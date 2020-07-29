<!DOCTYPE html>

<!--
File Name: index.html
Date: 07/20/20
Programmer: Aster Bonisteel
-->

<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="author" content="Aster Bonisteel">
    <base target="_blank">
    <!-- open all links not marked "_self" in a new tab -->

    <title>Ace in the Hole Multisport Events</title>

    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&family=Mulish&display=swap" rel="stylesheet" type="text/css">
    <link href="css/reset.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/navigation.css" rel="stylesheet" type="text/css">

</head>

<secion id="hero">
    <img src="images/heroplaceholder.png" alt="Image Placeholder">
    <?php include 'includes/intro.inc.html.php' ?>
</secion>

<body>

    <?php include 'includes/header.inc.html.php' ?>

    <div id="container">

        <main>

            <section>
                <h2>Header One</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sed urna nulla. Etiam dictum viverra lectus ac semper. Nullam ac nisi laoreet, ultrices nulla sit amet, imperdiet est. Mauris imperdiet molestie leo. Ut non leo quis sapien faucibus ultrices. Morbi auctor, eros sit amet varius dapibus, erat est luctus eros, quis convallis libero ante non lorem. In tempor faucibus urna et malesuada. Mauris consequat leo vel justo facilisis, pharetra facilisis urna accumsan. Etiam vehicula arcu vel nunc congue viverra.</p>
            </section>

            <section>
                <h2>Simple slide show</h2>

                <div id="slideshow">
                    <img class="slide" src="images/placeholder1.png" alt="Slideshow Image Placeholder 1">
                    <img class="slide" src="images/placeholder2.png" alt="Slideshow Image Placeholder 2">
                    <img class="slide" src="images/placeholder3.png" alt="Slideshow Image Placeholder 3">
                </div>

            </section>

            <section>
                <h2>Header Two</h2>

                Etiam vitae est vestibulum dui faucibus dictum. Mauris facilisis lorem turpis, a euismod nunc congue a. Nunc vestibulum mollis lorem sit amet condimentum. Duis sodales nibh sit amet leo facilisis, consectetur vehicula ex semper. Ut facilisis nibh vitae lacus facilisis ultricies. Aliquam laoreet malesuada lacus at posuere. Morbi convallis enim eget vestibulum hendrerit. Duis interdum in nunc eget suscipit. Praesent fermentum libero id libero vehicula tempus. Donec fermentum eget erat ut condimentum. Nulla ac tempus orci. Aenean posuere fringilla augue ut volutpat.
            </section>

            <section id="weather">
                <h2>Weather feed</h2>
            </section>

            <section id="socialf">
                <h2>Social feed</h2>
            </section>

            <section>
                <h2>Questions</h2>
                <!-- Questions and Answers -->
                <dl id="faq">
                    <!-- Q&A 1 -->
                    <dt>Integer dignissim aliquam felis?</dt>
                    <dd>Etiam ac augue et nisi tempus iaculis congue sit amet urna. Ut quam lorem, eleifend id ullamcorper ac, maximus egestas felis. Donec ornare ex ac nunc viverra, sed commodo tortor elementum.</dd>

                    <!-- Q&A 2 -->
                    <dt>Aliquam consectetur?</dt>
                    <dd>Etiam ac augue et nisi tempus iaculis congue sit amet urna. Ut quam lorem, eleifend id ullamcorper ac, maximus egestas felis. Donec ornare ex ac nunc viverra, sed commodo tortor elementum.</dd>

                    <!-- Q&A 3 -->
                    <dt>Nulla eget placerat felis?</dt>
                    <dd>Etiam ac augue et nisi tempus iaculis congue sit amet urna. Ut quam lorem, eleifend id ullamcorper ac, maximus egestas felis. Donec ornare ex ac nunc viverra, sed commodo tortor elementum.</dd>

                    <!-- Q&A 4 -->
                    <dt>Sit amet dapibus sapien?</dt>
                    <dd>Etiam ac augue et nisi tempus iaculis congue sit amet urna. Ut quam lorem, eleifend id ullamcorper ac, maximus egestas felis. Donec ornare ex ac nunc viverra, sed commodo tortor elementum.</dd>

                    <!-- Q&A 5 -->
                    <dt>Duis sed urna et velit commodo?</dt>
                    <dd>Etiam ac augue et nisi tempus iaculis congue sit amet urna. Ut quam lorem, eleifend id ullamcorper ac, maximus egestas felis. Donec ornare ex ac nunc viverra, sed commodo tortor elementum.</dd>
                </dl>
            </section>

            <section>
                <h2>Form</h2>
                <div id="form">
                    <form method="post" action=" ">
                        <input type="text" name="honeypot" id="honeypot" value="" alt="if you fill this field out then your email will not be sent" />
                        <label for="course">*Option:</label><br>
                        <select size="1" name="course" id="course">
                            <option>Choose Your Option</option>
                            <option value="option1">Option 1</option>
                            <option value="option2">Option 2</option>
                            <option value="option3">Option 3</option>
                        </select><br>
                        <label for="myfname">*First Name:</label><br>
                        <input type="text" name="myfname" id="myfname" required><br>
                        <label for="mylname">Last Name:</label><br>
                        <input type="text" name="mylname" id="mylname"><br>
                        <label for="myemail">*Email:</label><br>
                        <input type="email" name="myemail" id="myemail" required><br>
                        <label for="myphone">Phone:</label><br>
                        <input type="tel" name="myphone" id="myphone"><br>
                        <label for="mydate">Date:</label><br>
                        <input type="date" name="mydate" id="mydate"><br>
                        <label for="mycomments">*Comment</label><br>
                        <textarea name="mycomments" id="mycomments" rows="2" cols="20" required></textarea><br>
                        <input id="mysubmit" type="submit" value="Submit">
                    </form>
                </div>
            </section>

        </main>

    </div>

    <?php include 'includes/footer.inc.html.php' ?>

    <!-- JavaScript + jQuery file links -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="scripts/scripts.js"></script>
    <script src="scripts/slideshow.js"></script>

</body>

</html>
