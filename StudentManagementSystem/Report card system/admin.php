<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div id="grades" class="grades-container">
        <h1 class="form-title">Grades</h1>
        <form action="data_check.php" method="POST">

            <div class="form-group">
                <label class="form-label" for="webprog">webprog</label>
                <input class="form-input" type="text" id="webprog" name="webprog">
            </div>
            <div class="form-group">
                <label class="form-label" for="oop">oop</label>
                <input class="form-input" type="text" id="oop" name="oop">
            </div>
            <div class="form-group">
                <label class="form-label" for="entrep">entrep</label>
                <input class="form-input" type="text" id="entrep" name="entrep">
            </div>
            <div class="form-group">
                <label class="form-label" for="immersion">immersion</label>
                <input class="form-input" type="text" id="immersion" name="immersion">
            </div>
            <div class="form-group">
                <input class="form-button" type="submit" name="submit">
                </input>
            </div>



</body>

</html>