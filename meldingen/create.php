<!doctype html>
<html lang="nl">

<head>
    <title>StoringApp / Meldingen / Nieuw</title>
    <?php require_once '../head.php'; ?>
</head>

<body>

    <?php require_once '../header.php'; ?>

    <div class="container">
        <h1>Nieuwe melding</h1>

        <form action="../backend/meldingenController.php" method="POST">
        
            <div class="form-group">
                <label for="attractie">Naam attractie:</label>
                <input type="text" name="attractie" id="attractie" class="form-input">
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <select name="type" id="type" class="form-input">
                    <option value="">kies een type</option>
                    <option value="A">achtbaan</option>
                    <option value="B">draaiend</option>
                    <option value="C">kinder</option>
                    <option value="D">horeca</option>
                    <option value="E">show</option>
                    <option value="F">water</option>
                    <option value="G">overig</option>
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
            
            <input type="submit" value="Verstuur melding">

        </form>
    </div>  

</body>

</html>
