<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App</title>
    <link rel="stylesheet" href="/pico.min.css">
</head>
<body>
    <div class="container">
        <h1>Task of the Day (APP)</h1>
        <form method="POST" action="index.php" id="greeting-form">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <p>Favorite Food:</p>
            <input type="radio" id="pulao" name="favoriteFood" value="Pulao" required>
            <label for="pulao">Panner</label><br>

            <input type="radio" id="paneer" name="favoriteFood" value="Paneer" required>
            <label for="paneer">Pulao</label><br>

            <input type="radio" id="biryani" name="favoriteFood" value="Biryani" required>
            <label for="biryani">Soyabean</label><br>

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
