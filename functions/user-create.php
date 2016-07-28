<?php

include 'db-connect.php';

$conn = connect('curso_php');

//var_dump($conn);

//var_dump($_POST);

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$status = $_POST['status'];

$sql = "INSERT INTO USER (name, email, password, phone, address, status) VALUES ('$name', '$email', '$password', '$phone', '$address', '$status')";

$result = mysqli_query($conn, $sql);

if ($result) {
	$msg = 'Valor inserido com sucesso!';
} else {
	$msg = 'Houve um erro. Por favor, tente novamente.';
}

echo "<script>alert('$msg');location.href='../users.php'</script>";