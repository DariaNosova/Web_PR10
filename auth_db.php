<?php
session_start();
if (isset($_POST['first_name']) && isset($_POST['last_name'])&& isset($_POST['password'])&& isset($_POST['id_role'])&& isset($_POST['login'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $password = $_POST['password'];
    $id_role = $_POST['id_role'];
	$login = $_POST['login'];

    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_base = 'testdb';
    $db_table = "users";

    $mysqli = new mysqli($db_host, $db_user, $db_password, $db_base);
	$sql = "INSERT INTO " . $db_table . " (first_name,last_name,password,id_role,login) VALUES ('$first_name','$last_name','$password','$id_role','$login')";
    var_dump ($sql);
   
   $result = $mysqli->query("INSERT INTO " . $db_table . " (first_name,last_name,password,id_role,login) VALUES ('$first_name','$last_name','$password','$id_role','$login')");
    if ($result == true) {
        echo "Информация занесена в базу данных";
    } else {
        echo "Информация не занесена в базу данных";
    }
}
?>

