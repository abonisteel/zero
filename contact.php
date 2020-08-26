<!DOCTYPE html>

<!--
File Name: contact.php
Date: 08/23/20
Programmer: Aster Bonisteel
-->

<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">

    <title>Contact Ace in the Hole</title>

    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&family=Mulish&display=swap" rel="stylesheet" type="text/css">
    <link href="css/reset.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/contact-hero.css" rel="stylesheet" type="text/css">
    <link href="css/navigation.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="favicon.ico" type="image/x-icon" />

</head>

<body>

    <section id="hero">
        <img src="images/bike-2.jpg" alt="Bicyclists on a Track"><!-- desktop hero image -->
        <?php include 'includes/intro.inc.html.php' ?>
    </section>

    <header class="header">
        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
        <div id="logo" class="image">
            <a href="index.php" target="_self"><img src="images/AITH.svg" alt="Ace in the Hole Logo"></a>
            <h1>Contact Us Here</h1>
            <?php include 'includes/intro.inc.html.php' ?>
        </div>
        <ul class="menu">
            <?php include 'includes/menu.inc.html.php' ?>
        </ul>
    </header>

    <div id="container">

        <main>

            <section>
                <h2>Contact</h2>
                <div id="form">
                    <form method="post" action="includes/contact-form.php">
                        <!-- if you fill the field out below, your email will not be sent -->
                        <input type="text" name="honeypot" id="honeypot" value="" />

                        <!--<input type="hidden" name="recipient" value="your-email-address@pcc.edu">-->

                        <label for="myname">Full Name:</label><br>
                        <input type="text" name="myname" id="myname" required><br>

                        <label for="myemail">Email:</label><br>
                        <input type="email" name="myemail" id="myemail" required><br>

                        <label for="mycomment">Comment:</label><br>
                        <textarea name="mycomment" id="mycomment" rows="3" cols="20" required></textarea><br>

                        <label for="role">Role:</label><br>
                        <select size="1" name="role" id="role" required>
                            <option value="">Choose Role</option>
                            <option value="ath">Athlete</option>
                            <option value="vol">Volunteer</option>
                            <option value="party">Interested Party</option>
                        </select><br>

                        <input id="mysubmit" type="submit" value="Submit">
                    </form>
                </div>
            </section>

        </main>

    </div>

    <?php include 'includes/footer.inc.html.php' ?>

</body>

</html>
