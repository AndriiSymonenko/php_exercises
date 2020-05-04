<?php
define ('ADMIN', 'admin');
session_start();
if (!empty($_POST['login'])) {
    if ($_POST['login'] === ADMIN) {
        $_SESSION['admin'] = ADMIN;
        $_SESSION['res'] =  'Вы авторизовались';
        
    } else {
        $_SESSION['res'] = 'Неверный логин!';
    }

    header("Location: sess_1.php");
        die;
}


 ?>

 <ul>
     <li><a href="sesss_1.php">Sess 1</a></li>
     <li><a href="sesss_2.php">Sess 2</a>Sess 2</li>
     <li><a href="secret.php">Secret</a></li>
 </ul>

<hr>
<?php
if (!isset($_SESSION['res'])) {
    echo $_SESSION['res'];
}

?>
 <form action="" method="POST">
 <input type="text" name="login">
 <button type="submit">Login</button>
 
 </form>