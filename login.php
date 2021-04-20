<!doctype html>
<html lang="nl">

<head>
    <title>StoringApp</title>
    <?php require_once 'head.php'; ?>
</head>

<body>

<?php require_once 'header.php'; ?>

<?php
    require_once 'backend/conn.php';
    $query = "SELECT * FROM users";
    $statement = $conn->prepare($query);
    $statement->execute();
    $users = $statement->fetchAll(PDO::FETCH_ASSOC);
?>


    
    
    <div class="container home">

        <form action="backend/loginController.php" method="POST">
            
            <div class="form-group">
                <label for="username">username:</label>
                <input type="text" name="username" id="username" class="form-input">
            </div>
            <div class="form-group">
                <label for="password">password:</label>
                <input type="password" name="password" id="password" class="form-input">
            </div>
            <input type="submit" value="log in">   
        </form>
    </div>    

</body>

</html>
