<!doctype html>
<html lang="nl">

<head>
</head>

<body>
    <?php
    

    
    $id = $_GET['id'];
    require_once '../backend/conn.php';
    $query = "SELECT * FROM meldingen WHERE id = :id";
    $statement = $conn->prepare($query);
    $statement->execute([":id" => $id]);
    $melding = $statement->fetch(PDO::FETCH_ASSOC);

    

    ?>


    <form action="../backend/meldingenController.php" method="POST">
            
            <div class="form-group">
                <label for="attractie">Naam attractie:</label>
                <input type="text" name="attractie" id="attractie" class="form-input">
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <select name="type" id="type" class="form-input">
                    <option value="">kies een type</option>
                    <option value="achtbaan">achtbaan</option>
                    <option value="draaiend">draaiend</option>
                    <option value="kinder">kinder</option>
                    <option value="horeca">horeca</option>
                    <option value="show">show</option>
                    <option value="water">water</option>
                    <option value="overig">overig</option>
                </select>
            </div>
            <div class="form-group">
                <label for="prioriteit">prioriteit:<label>
                <input type="checkbox" name="prioriteit" id="prioriteit" class="form-input">
                <label for="prioriteit">dit is een priotiteit attractie</label>
            </div>
            <div class="form-group">
                <label for="capaciteit">Capaciteit p/uur:</label>
                <input type="number" min="0" name="capaciteit" id="capaciteit" class="form-input">
            </div>
            <div class="form-group">
                <label for="melder">Naam melder:</label>
                <input type="text" name="melder" id="melder" class="form-input">
            </div>
            <div class="form-group">
                <label for="overig">overige info:</label>
                <textarea name="overig" id="overig" class="form-input" rows="4"></textarea>
            </div>
            
            <form action="../backend/meldingenController.php" method="POST">
        <input type="hidden" name="action" value="update">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="submit" value="wijzig">



   
    
</body>

</html>
