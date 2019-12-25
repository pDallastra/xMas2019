<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Kalam' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
    <title>Lucas</title>
    <link rel="stylesheet" href="../src/style.css">
</head>

<body>
    <section class="flex row">
        <div class="sidebar flex col">
            <?php require_once('sidebar.php'); ?>
        </div>
        <div class="main-container flex col center">
            <h1>Lucas</h1>
            <div class="img-triple flex row center">
                <div class="img-text flex col">
                    <img src="../img/marriage12.jpg" style="transform: rotate(180deg);" alt="">
                    <p>We were didn't want to start our family so soon, so Amora was our child for a few months.</p>
                </div>
                <div class="img-text flex col">
                    <img src="../img/lucas2.jpg" style="transform: rotate(180deg);" alt="">
                    <p>We talked to so many good couples and families, and we couldn't avoid the desire of starting our own journey of raising Heavenly Father's children.</p>
                </div>
                <div class="img-text-rotate-negative90 flex col">
                    <img src="../img/lucas1.jpg" style="transform: rotate(90deg);" alt="">
                    <p>And after being married for about 15 months - 13/1/2017, Lucas came and we were no longer a family of 2.</p>
                </div>
            </div>
            <div class="flex row center">
                <button><a href="marriage.php">Previous</a></button>
                <button><a href="usa.php">Next</a></button>
            </div>
            <?php require_once('footer.php'); ?>
        </div>
    </section>
</body>

</html>