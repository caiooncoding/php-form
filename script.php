<?php
include "services/SessionMessageService.php";
include "services/CategoryService.php";
include "services/ValidationService.php";


$name = $_POST['name'];
$age = $_POST['age'];

defineCategory($name, $age);

header('location: index.php');

?>