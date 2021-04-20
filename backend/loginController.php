<?php 

session_start();
$username = $_POST['username'];
$password = $_POST['password'];

require_once 'conn.php';

$query = "SELECT * FROM users WHERE username = :username";

$statement = $conn->prepare($query);



$statement->execute([
    ":username" => $username,
]);

if($statement->rowCount() < 1)
{
 die("Error: account bestaat niet");
}
if(!password_verify($password, $username['password']))
{
 die("Error: wachtwoord niet juist!");
}

$group = $_POST['group'];

echo $group;

?>