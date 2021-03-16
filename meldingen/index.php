<!doctype html>
<html lang="nl">

<head>
    <title>StoringApp / Meldingen</title>
    <?php require_once '../head.php'; ?>
</head>

<body>

    <?php require_once '../header.php'; ?>
    
    <div class="container">
        <h1>Meldingen</h1>
        <a href="create.php">Nieuwe melding &gt;</a>

        <?php if(isset($_GET['msg']))
        {
            echo "<div class='msg'>" . $_GET['msg'] . "</div>";
        } ?>

        <div style="height: 300px; background: #ededed; display: flex; justify-content: center; align-items: center; color: #666666;">(hier komen de storingsmeldingen)</div>
        <?php
    require_once '../backend/conn.php';
    $query = "SELECT * FROM meldingen";
    $statement = $conn->prepare($query);
    $statement->execute();
    $meldingen = $statement->fetchAll(PDO::FETCH_ASSOC);
    foreach($meldingen as $melding): ?>
        <p> <?php echo $melding['attractie']; echo " type: "; echo $melding['type'];?> </p>
        <p> <?php echo $melding['capaciteit']; ?> </p>
        <p> <?php echo $melding['melder']; ?> </p>
        <p> <?php echo $melding['prioriteit']; ?> </p>
        <p> <?php echo $melding['overige_info']; ?> </p>
    <?php endforeach; ?>

    </div>  
    
</body>

</html>
