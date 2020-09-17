<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
if (!empty($_POST)) {
    $id = NULL;
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $cpf = isset($_POST['cpf']) ? $_POST['cpf'] : '';
    $rg = isset($_POST['rg']) ? $_POST['rg'] : '';
    $marital_status = isset($_POST['marital_status']) ? $_POST['marital_status'] : '';
    $birth_date = isset($_POST['birth_date']) ? $_POST['birth_date'] : '';
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    $created_at = isset($_POST['created']) ? $_POST['created'] : date('Y-m-d H:i:s');
    $sql = "INSERT INTO people (id, name, cpf, rg, email, marital_status, birth_date, gender, created_at)
      VALUES (NULL, '$name', '$cpf', '$rg', '$email', '$marital_status', '$birth_date', '$gender', CURRENT_TIMESTAMP)";

    if($sql = $pdo->query($sql)){
      $msg = 'Created Successfully!';

    }else{
        $msg = 'Error creating!';
    }
}
?>
<?=template_header('Create')?>

<div class="content update">
	<h2>Create Person</h2>
    <form action="create.php" method="post">
      <label for="name">Name</label>
      <label for="email">Email</label>
      <input type="text" name="name" placeholder="Allan" id="name" required>
      <input type="text" name="email" placeholder="Allan@allan.com" id="email" required>
      <label for="cpf">CPF</label>
      <label for="rg">RG</label>
      <input type="text" name="cpf" placeholder="40647955806" id="cpf" required>
      <input type="text" name="rg" placeholder="5087258305" id="rg" required>
      <label for="marital_status">Marital Status</label>
      <label for="created">Birth Date</label>
      <input type="text" name="marital_status" placeholder="Solteiro" id="marital_status" required>
      <input type="date" name="birth_date" id="birth_date" required>
      <label for="created">Gender</label>
      <label for=""></label>
      <input type="text" name="gender" id="gender" placeholder="Masculino" required>
      <input type="submit" value="Create">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>
