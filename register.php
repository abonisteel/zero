<!DOCTYPE html>

<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">

    <title>Register for Ace in the Hole</title>

    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&family=Mulish&display=swap" rel="stylesheet" type="text/css">
    <link href="css/reset.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/register-hero.css" rel="stylesheet" type="text/css">
    <link href="css/navigation.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="favicon.ico" type="image/x-icon" />

</head>

<body>

    <section id="hero">
        <img src="images/crowd-1.jpg" alt="Runners Finish Line">
        <!-- desktop hero image -->
        <?php include 'includes/intro.inc.html.php' ?>
    </section>

    <header class="header">
        <!-- tablet and mobile hero image -->
        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
        <div id="logo" class="image">
            <a href=" index.php" target="_self"><img src="images/AITH.svg" alt="Ace in the Hole Logo"></a>
            <h1>Register Today</h1>
            <?php include 'includes/intro.inc.html.php' ?>
        </div>
        <ul class="menu">
            <?php include 'includes/menu.inc.html.php' ?>
        </ul>
    </header>

    <div id="container">

        <main>

            <section>
                <h2>Register</h2>
                <div id="form">
                    <form method="post" action="includes/register-form.php">
                        <!-- if you fill the field out below, your email will not be sent -->
                        <input type="text" name="honeypot" id="honeypot" value="" />

                        <label for="myname">Full Name:</label><br>
                        <input type="text" name="myname" id="myname" required><br>

                        <label for="myage">Age:</label><br>
                        <input type="text" name="myage" id="myage" required><br>

                        <label for="myrole">Role:</label><br>
                        <select size="1" name="myrole" id="myrole" required>
                            <option value="">Choose Role</option>
                            <option value="ath">Athlete</option>
                            <option value="vol">Volunteer</option>
                        </select><br>

                        <label for="myemail">Email:</label><br>
                        <input type="email" name="myemail" id="myemail" required><br>

                        <label for="myecname">Emergency Contact Name:</label><br>
                        <input type="text" name="myecname" id="myecname" required><br>

                        <label for="myecphone">Emergency Contact Phone:</label><br>
                        <input type="tel" name="myecphone" id="myecphone" required><br>

                        <label for="mygender">Gender Identification:</label><br>
                        <select size="1" name="mygender" id="mygender" required>
                            <option value="">Choose Gender Identification</option>
                            <option value="fgender">Female</option>
                            <option value="mgender">Male</option>
                            <option value="ngender">Non-binary/Other</option>
                        </select><br>

                        <label for="mysize">T-Shirt Size:</label><br>
                        <select size="1" name="mysize" id="mysize" required>
                            <option value="">Choose Size</option>
                            <option value="s">S</option>
                            <option value="m">M</option>
                            <option value="l">L</option>
                            <option value="xl">XL</option>
                            <option value="xxl">2XL</option>
                        </select><br>

                        <label for="satday">Saturday Events Registering For:</label><br>
                        <select size="1" name="satday" id="satday" required>
                            <option value="none">Choose Event</option>
                            <option value="long">Long Course Triathlon 7:00 AM</option>
                            <option value="tenk">10K 7:15 AM</option>
                            <option value="halfm">Half Marathon 7:15 AM</option>
                            <option value="oly">Olympic Triathlon 7:30 AM</option>
                        </select><br>

                        <label for="sunday">Sunday Events Registering For:</label><br>
                        <select size="1" name="sunday" id="sunday" required>
                            <option value="none">Choose Event</option>
                            <option value="sprint">Sprint Triathlon 8:00 AM</option>
                            <option value="tri">Try-a-Tri 8:20 AM</option>
                            <option value="splash">Splash n Dash 12:00 PM</option>
                        </select><br>

                        <label for="myaccom">Any Special Accommodations Needed?</label><br>
                        <textarea name="myaccom" id="myaccom" rows="3" cols="20"></textarea><br>

                        <input id="mysubmit" type="submit" value="Submit">
                    </form>
                </div><br>

                <h2>Packet Pick Up</h2>

                <p>All packet pick up will occur at:<br>
                    Why Worry Racing, 123 NW Everett, Portland OR.</p>
                <p>Packet pick up hours:</p>
                <ul class="cost-includes">
                    <li>Thursday 8:00 AM - 5:00 PM</li>
                    <li>Friday 9:00 AM - noon.</li>
                </ul>
                <p>No day of event packet pick up.</p>

            </section>

        </main>

    </div>

    <?php include 'includes/footer.inc.html.php' ?>

</body>

</html>
