<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
$records_per_page = 5;

$stmt = $pdo->prepare('SELECT * FROM people ORDER BY id LIMIT :current_page, :record_per_page');
$stmt->bindValue(':current_page', ($page-1)*$records_per_page, PDO::PARAM_INT);
$stmt->bindValue(':record_per_page', $records_per_page, PDO::PARAM_INT);
$stmt->execute();

$peoples = $stmt->fetchAll(PDO::FETCH_ASSOC);
$num_peoples = $pdo->query('SELECT COUNT(*) FROM people')->fetchColumn();
?>
<?=template_header('Read')?>

<div class="contentread read">
	<h2>Read Peoples</h2>
	<a href="create.php" class="create-contact">Create Person</a>
	<table>
        <thead>
            <tr>
                <td>#</td>
                <td>Name</td>
                <td>Email</td>
                <td>CPF</td>
                <td>RG</td>
								<td>Marital Status</td>
								<td>Birth Date</td>
								<td>Gender</td>
                <td>Created</td>
								<td>Update</td>
								<td>Edit</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($peoples as $people): ?>
            <tr>
                <td><?=$people['id']?></td>
                <td><?=$people['name']?></td>
                <td><?=$people['email']?></td>
                <td><?=$people['cpf']?></td>
                <td><?=$people['rg']?></td>
                <td><?=$people['marital_status']?></td>
                <td><?=$people['birth_date']?></td>
                <td><?=$people['gender']?></td>
                <td><?=$people['created_at']?></td>
                <td><?=$people['updated_at']?></td>
                <td class="actions">
                    <a href="update.php?id=<?=$people['id']?>" class="edit"><i class="fas fa-pen fa-xs"></i></a>
                    <a href="delete.php?id=<?=$people['id']?>" class="trash"><i class="fas fa-trash fa-xs"></i></a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
	<div class="pagination">
		<?php if ($page > 1): ?>
		<a href="read.php?page=<?=$page-1?>"><i class="fas fa-angle-double-left fa-sm"></i></a>
		<?php endif; ?>
		<?php if ($page*$records_per_page < $num_peoples): ?>
		<a href="read.php?page=<?=$page+1?>"><i class="fas fa-angle-double-right fa-sm"></i></a>
		<?php endif; ?>
	</div>
</div>

<?=template_footer()?>
