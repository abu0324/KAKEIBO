<?php
// var_dump($_POST);
// exit();

$date = $_POST['date'];
$title = $_POST['title'];
$amount = $_POST['amount'];
$memo = $_POST['memo'];

$write_data = "{$date} {$title}  {$amount} {$memo}\n";

$file = fopen('data/food.txt','a');
flock($file,LOCK_EX);

fwrite($file, $write_data);

flock($file,LOCK_UN);
fclose($file);

header('Location:todo_txt_input.php');


