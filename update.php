<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
if (isset($_GET['id'])) {
    if (!empty($_POST)) {
        $id = isset($_POST['id']) ? $_POST['id'] : NULL;
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $cpf = isset($_POST['cpf']) ? $_POST['cpf'] : '';
        $rg = isset($_POST['rg']) ? $_POST['rg'] : '';
        $marital_status = isset($_POST['marital_status']) ? $_POST['marital_status'] : '';
        $birth_date = isset($_POST['birth_date']) ? $_POST['birth_date'] : '';
        $gender = isset($_POST['gender']) ? $_POST['gender'] : '';

        $stmt = $pdo->prepare('UPDATE people SET name = ?, cpf = ?, rg = ?, email = ?, marital_status = ?, birth_date = ?, gender = ? WHERE id = ?');
        $stmt->execute([$name, $cpf, $rg, $email, $marital_status, $birth_date, $gender, $_GET['id']]);
        $msg = 'Updated Successfully!';
    }

    $stmt = $pdo->prepare('SELECT * FROM people WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $people = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$people) {
        exit('Person doesn\'t exist with that ID!');
    }
} else {
    exit('No ID specified!');
}
?>
<?=template_header('Update')?>

<div class="content update">
	<h2>Update Person #<?=$people['id']?></h2>
    <form action="update.php?id=<?=$people['id']?>" method="post">
        <label for="name">Name</label>
        <label for="email">Email</label>
        <input type="text" name="name" placeholder="Allan" value="<?=$people['name']?>" id="name">
        <input type="text" name="email" placeholder="Allan@allan.com" value="<?=$people['email']?>" id="email">
        <label for="cpf">CPF</label>
        <label for="rg">RG</label>
        <input type="text" name="cpf" placeholder="40647955806" value="<?=$people['cpf']?>" id="cpf">
        <input type="text" name="rg" placeholder="5087258305" value="<?=$people['rg']?>" id="rg">
        <label for="marital_status">Marital Status</label>
        <label for="created">Birth Date</label>
        <input type="text" name="marital_status" placeholder="Solteiro" value="<?=$people['marital_status']?>" id="marital_status">
        <input type="date" name="birth_date" value="<?=$people['birth_date']?>" id="birth_date">
        <label for="created">Gender</label>
        <label for=""></label>
        <input type="text" name="gender" id="gender" placeholder="Masculino" value="<?=$people['gender']?>">
        <input type="submit" value="Update">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>
