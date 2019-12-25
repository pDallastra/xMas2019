<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
    <title>The Dallastras</title>
    <link rel="stylesheet" href="../src/style.css">
</head>

<body>
    <section class="flex row">
        <div class="sidebar flex col">
            <?php require_once('sidebar.php'); ?>
        </div>
        <div class="main-container flex col center">
            <h1>The Dallastras</h1>
            <img src="../img/family.jpg" alt="">
            <h2>“Being a family means you are a part of something very wonderful. It means you will love and be loved
                for the rest of your life.” – Lisa Weed</h2>
            <div class="flex row center">
                <button><a href="index.php">Home</a></button>
                <button><a href="dating.php">Next</a></button>
            </div>
            <?php require_once('footer.php'); ?>
        </div>
    </section>
</body>

</html>