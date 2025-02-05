<?php
$action = $_POST['action'];

//Variabelen vullen
if($action == "create")
{
    $attractie = $_POST['attractie'];
    $capaciteit = $_POST['capaciteit']; 
    $melder = $_POST['melder'];
    $type = $_POST['type'];
    $overig = $_POST['overig'];
    if(isset($_POST['prioriteit']))
    {
        $prioriteit = true;
    }
    else
    {
        $prioriteit = false;
    }
    //error benoemer
    $attractie = $_POST['attractie'];
    if(empty($attractie))
    {
    $errors[] = "Vul de attractie-naam in.";
    }
    if(empty($type))
    {
    $errors[] = "Vul een type in.";
    }
    if(empty($melder))
    {
    $errors[] = "Vul de melder-naam in.";
    }
    $capaciteit = $_POST['capaciteit'];
    if(!is_numeric($capaciteit))
    {
    $errors[] = "Vul voor capaciteit een geldig getal in.";
    }
    if(isset($errors))
    {
    var_dump($errors);
    die();
    }


    //1. Verbinding
    require_once 'conn.php';

    //2. Query

    $query = "INSERT INTO meldingen (attractie, type, capaciteit, melder, prioriteit, overige_info) VALUES (:attractie, :type, :capaciteit, :melder, :prioriteit, :overige_info)";


    //3. Prepare

    $statement = $conn->prepare($query);

    //4. Execute

    $statement->execute([
        ":attractie" => $attractie,
        ":type" => $type,
        ":capaciteit" => $capaciteit,
        ":melder" => $melder,
        ":prioriteit" => $prioriteit,
        ":overige_info" => $overig
    ]);

    $group = $_POST['group'];

    echo $group;

    header("Location: ../meldingen/index.php?msg=Melding opgeslagen");
}

if($action == "update")
{
    $attractie = $_POST['attractie'];
    $capaciteit = $_POST['capaciteit'];
    $id = $_POST['id'];

    require_once 'conn.php';

    // query

    $query = "UPDATE meldingen SET attractie = :attractie,  capaciteit = :capaciteit  WHERE id = :id";

    $statement = $conn->prepare($query);

    // Execute

    $statement->execute([
        ":attractie" => $attractie,
        ":capaciteit" => $capaciteit,
        ":id" => $id,
    ]);

    header("Location: ../meldingen/index.php?msg=Melding veranderd");
}
