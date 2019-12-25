<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Kalam' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
    <title>USA</title>
    <link rel="stylesheet" href="../src/style.css">
</head>

<body>
    <section class="flex row">
        <div class="sidebar flex col">
            <?php require_once('sidebar.php'); ?>
        </div>
        <div class="main-container flex col center">
            <div class="flex center">
                <h1>USA</h1>
            </div>
            <div class="img-triple flex row center">
                <div class="img-text-rotate-negative90 flex col">
                    <img src="../img/usa1.jpg" alt="">
                    <p>Being a bigger family, we realized that we should start looking for better opportunities to provide to our little guy a better life in the future.</p>
                </div>
                <div class="img-text-rotate-negative90 flex col">
                    <img src="../img/usa2.jpg" alt="">
                    <p>After so many great people being willing to help us out, The United of States of America became a real opportunity to achieve that better life that we were dreaming.</p>
                </div>
                <div class="img-text-rotate-negative90 flex col">
                    <img src="../img/usa3.jpg" alt="">
                    <p>Lucas was only 6 months when we got here, and after two years this place has been a place of so much learning and development to us.</p>
                </div>
            </div>
            <div class="flex row center">
                <button><a href="lucas.php">Previous</a></button>
                <button><a href="english.php">Next</a></button>
            </div>
            <?php require_once('footer.php'); ?>
        </div>
    </section>
</body>

</html>