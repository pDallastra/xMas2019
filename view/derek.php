<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Kalam' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
    <title>Derek</title>
    <link rel="stylesheet" href="../src/style.css">
</head>

<body>
    <section class="flex row">
        <div class="sidebar flex col">
            <?php require_once('sidebar.php'); ?>
        </div>
        <div class="main-container flex col center">
            <div class="flex center">
                <h1>Derek</h1>
            </div>
            <div class="img-triple flex row center">
                <div class="img-text flex col">
                    <img src="../img/derek2.jpg" alt="">
                    <p>We started feeling of making our family bigger again. We felt that we could bring one more Heavenly Father's child to this Earth and learn from it.</p>
                </div>
                <div class="img-text flex col">
                    <img src="../img/derek1.jpg" alt="">
                    <p>Thais was so strong again. We moved from Utah and she was already pregnant for 5 months. We found a new home, a new doctor and then we had a new baby.</p>
                </div>
                <div class="img-text flex col">
                    <img src="../img/derek3.jpg"alt="">
                    <p>He came as a great kid! Since he was born - 12/27/2018 - we started receiving even more blessings and learning so much more from Heavenly Father.</p>
                </div>
            </div>
            <div class="flex row center">
                <button><a href="byui.php">Previous</a></button>
                <button><a href="index.php">Home</a></button>
            </div>
            <?php require_once('footer.php'); ?>
        </div>
    </section>
</body>

</html>