<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Kalam' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
    <title>Mission</title>
    <link rel="stylesheet" href="../src/style.css">
</head>

<body>
    <section class="flex row">
        <div class="sidebar flex col">
            <?php require_once('sidebar.php'); ?>
        </div>
        <div class="main-container flex col center">
            <h1>Mission - Brazil Curitiba South</h1>
            <div class="img-triple flex row center">
                <div class="img-text flex col">
                    <img src="../img/mission1.jpg" style="transform: rotate(0deg);" alt="">
                    <p>I went on my mission without understanding very well how church works. I didn't know about the Seventies, or who the Apostles were, I just knew that it was/is the Church of Christ and I should go on a mission.</p>
                </div>
                <div class="img-text flex col">
                    <img src="../img/mission2.jpg" style="transform: rotate(0deg);" alt="">
                    <p>Until three days before the transfer, I wasn't supposed to be Elder Peay's companion. I'm so grateful for Heavenly Father giving new inspirations to President Fernandes and changing my life so much.</p>
                </div>
                <div class="img-text flex col">
                    <img src="../img/mission3.jpg" style="transform: rotate(0deg);" alt="">
                    <p>I felt like Heavenly Father was teaching, guiding, and blessing me and my family the whole time. I came back home better prepared to be a husband, a father, a friend.</p>
                </div>
            </div>
            <div class="flex row center">
                <button><a href="dating.php">Previous</a></button>
                <button><a href="marriage.php">Next</a></button>
            </div>
            <?php require_once('footer.php'); ?>
        </div>
    </section>
</body>

</html>