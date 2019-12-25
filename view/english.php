<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Kalam' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
    <title>Learning English</title>
    <link rel="stylesheet" href="../src/style.css">
</head>

<body>
    <section class="flex row">
        <div class="sidebar flex col">
            <?php require_once('sidebar.php'); ?>
        </div>
        <div class="main-container flex col center">
            <h1>Learning English</h1>
            <div class="img-triple flex row center">
                <div class="img-text flex col">
                    <img src="../img/english1.png" style="transform: rotate(0deg);" alt="">
                    <p>I wasn't expecting to work so hard on learning English. School in Brazil is always part-time and
                        I had never spent so much time doing homework in my life haha.</p>
                </div>
                <div class="img-text flex col">
                    <img src="../img/english1.jpg" alt="">
                    <p>Working hard for two semesters helped me realize that I could achieve so much more if I spend the
                        right amount of time studying.</p>
                </div>
                <div class="img-text flex col">
                    <img src="../img/english3.png" alt="">
                    <p>I worked as much as I could during 6 months to be able 
                    to get accepted from BYU Idaho and get started the next step.</p>
                </div>
            </div>
            <div class="flex row center">
                <button><a href="usa.php">Previous</a></button>
                <button><a href="byui.php">Next</a></button>
            </div>
            <?php require_once('footer.php'); ?>
        </div>
    </section>
</body>

</html>