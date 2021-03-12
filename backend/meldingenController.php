<?php

//Variabelen vullen
$attractie = $_POST['attractie'];
$capaciteit = $_POST['capaciteit']; 
$melder = $_POST['melder'];
$type = $_POST['type'];
$overig = $_POST['overig'];
if(isset($_POST['priotiteit']))
{
    $priotiteit = true;
}
else
{
    $priotiteit = false;
}

//1. Verbinding
require_once 'conn.php';

//2. Query

$query = "INSERT INTO meldingen (attractie, type, capaciteit, melder, priotiteit, overig_info) VALUES (:attractie, :type, :capaciteit, :melder, :priotiteit, :overig)";


//3. Prepare

$statement = $conn->prepare($query);

//4. Execute

$statement->execute([
    ":attractie" => $attractie,
    ":type" => $type,
    ":capaciteit" => $capaciteit,
    ":melder" => $melder,
    ":priotiteit" => $priotiteit,
    ":overig" => $overig
]);

$group = $_POST['group'];

echo $group;

header("Location: ../meldingen/index.php?msg=Melding opgeslagen");
