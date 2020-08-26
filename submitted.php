<?php define('BASE_URL', '/cas222/template/'); ?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">

    <title>Register for Ace in the Hole</title>

    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&family=Mulish&display=swap" rel="stylesheet" type="text/css">
    <link href="<?php echo BASE_URL; ?>css/reset.css" rel="stylesheet" type="text/css">
    <link href="<?php echo BASE_URL; ?>css/style.css" rel="stylesheet" type="text/css">
    <link href="<?php echo BASE_URL; ?>css/register-hero.css" rel="stylesheet" type="text/css">
    <link href="<?php echo BASE_URL; ?>css/navigation.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="<?php echo BASE_URL; ?>favicon.ico" type="image/x-icon" />

</head>

<body>

    <section id="hero">
        <img src="<?php echo BASE_URL; ?>images/crowd-1.jpg" alt="Runners Finish Line"><!-- Desktop Hero Image -->
        <?php include 'includes/intro.inc.html.php' ?>
    </section>

    <header class="header">
        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
        <div id="logo" class="image">
            <a href=" index.php" target="_self"><img src="<?php echo BASE_URL; ?>images/AITH.svg" alt="Ace in the Hole Logo"></a>
            <h1>Register Today</h1>
            <?php include 'includes/intro.inc.html.php' ?>
        </div>
        <ul class="menu">
            <li><a href="<?php echo BASE_URL; ?>index.php" target="_self">Home</a></li>
            <li><a href="<?php echo BASE_URL; ?>courses.php" target="_self">Courses</a></li>
            <li><a href="<?php echo BASE_URL; ?>register.php" target="_self">Register</a></li>
            <li><a href="<?php echo BASE_URL; ?>faq.php" target="_self">FAQs</a></li>
            <li><a href="<?php echo BASE_URL; ?>contact.php" target="_self">Contact</a></li>
        </ul>
    </header>

    <div id="container">

        <main>

            <p id="submission">Thank you for your submission.</p>

        </main>

    </div>

    <footer>
        <section class="footer">

            <ul class="nav">
                <li><a href="<?php echo BASE_URL; ?>index.php" target="_self">Home</a></li>
                <li><a href="<?php echo BASE_URL; ?>courses.php" target="_self">Courses</a></li>
                <li><a href="<?php echo BASE_URL; ?>register.php" target="_self">Register</a></li>
                <li><a href="<?php echo BASE_URL; ?>faq.php" target="_self">FAQs</a></li>
                <li><a href="<?php echo BASE_URL; ?>contact.php" target="_self">Contact</a></li>
            </ul>
            <div class="social">
                SOCIAL
                <br><a href="https://www.facebook.com/Cas222Aceinthehole-110661963841617/" target="_blank"><img src="<?php echo BASE_URL; ?>images/facebook.svg" alt="FaceBook Link"></a>
                <a href="https://twitter.com/pcccas222?lang=en" target="_blank"><img src="<?php echo BASE_URL; ?>images/twitter.svg" alt="Twitter Link"></a>
            </div>
            <div class="copy">Copyright &copy; 2020<br>Ace in the Hole Multisport Events<br>
            </div>

        </section>
    </footer>

</body>

</html>
