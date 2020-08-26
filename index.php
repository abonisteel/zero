<!DOCTYPE html>

<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <base target="_blank">
    <!-- open all links not marked "_self" in a new tab -->

    <title>About Ace in the Hole Multisport Events</title>

    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&family=Mulish&display=swap" rel="stylesheet" type="text/css">
    <link href="css/reset.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/index-hero.css" rel="stylesheet" type="text/css">
    <link href="css/navigation.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="favicon.ico" type="image/x-icon" />

</head>

<body>

    <section id="hero">
        <img src="images/og-hero.jpg" alt="Women Sprint">
        <!-- desktop hero image -->
        <?php include 'includes/intro.inc.html.php' ?>
    </section>

    <header class="header">
        <!-- tablet and mobile hero image -->
        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
        <div id="logo" class="image">
            <a href="index.php" target="_self"><img src="images/AITH.svg" alt="Ace in the Hole Logo"></a>
            <h1>Ace in the Hole</h1>
            <?php include 'includes/intro.inc.html.php' ?>
        </div>
        <ul class="menu">
            <?php include 'includes/menu.inc.html.php' ?>
        </ul>
    </header>

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0" nonce="HnKGRAP8"></script>

    <div id="container">

        <main>

            <section>
                <h2>About Us</h2>

                <p>The Annual Ace in the Hole Multisport Weekend is a legendary event in the Oregon triathlon and running community. It has become a traditional destination race for athletes from across the nation.</p>

                <p>There is something for every level of athletic ability. The weekend includes a first timer triathlon, a sprint, Olympic, and Half-Iron triathlons and 10K and Half marathon runs. Come to experience your first race or come to compete to win, but make sure you come to have fun!</p>
            </section>

            <section>

                <div id="slideshow">
                    <img class="slide" src="images/bike-1.jpg" alt="Bicyclists on a Track">
                    <img class="slide" src="images/div-walk-1.jpg" alt="Joggers on a Track">
                    <img class="slide" src="images/swim-2.jpg" alt="Swimmers Entering the Ocean">
                    <img class="slide" src="images/run-2.jpg" alt="Atheletes Running">
                    <img class="slide" src="images/run-1.jpg" alt="Runners Running Down the Road">
                    <img class="slide" src="images/swim-1.jpg" alt="Swimmers Entering Water">
                </div>

            </section>

            <section>
                <h2>What to Bring</h2>

                <!-- Weather Feed -->
                <a class="weatherwidget-io" href="https://forecast7.com/en/45d52n122d68/portland/" data-label_1="PORTLAND" data-label_2="WEATHER" data-font="Roboto" data-icons="Climacons Animated" data-theme="clear">PORTLAND WEATHER</a>
                <script>
                    ! function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (!d.getElementById(id)) {
                            js = d.createElement(s);
                            js.id = id;
                            js.src = 'https://weatherwidget.io/js/widget.min.js';
                            fjs.parentNode.insertBefore(js, fjs);
                        }
                    }(document, 'script', 'weatherwidget-io-js');

                </script>
                <!-- End Weather Feed -->

                <p>Watch the weather closely. The show goes on no matter what the weather is doing.</p>

                <p>You must wear your chip timing piece during the entire event. You will be given a band that will hold your chip timing piece around your ankle throughout the entire event. Be sure that it is snapped tightly. Be sure to have your Chip Timing piece on before you start the race and be sure to step over the timing mats after each segment of the race. If you are wearing a wet-suit, make sure the timing piece goes under your wetsuit otherwise, you will have a very difficult time getting off your wet suit.</p>

                <h3>Swim</h3>
                <p>Wetsuits are optional for the swim but will provide buoyancy and warmth. However, many people opt for no wetsuit for a triathlon so no worries. We will provide you with a swim cap but you will want to bring your own goggles.</p>

                <h3>Bike</h3>
                <p>A biking helmet is mandatory. You will also receive 2 stickers in your package with your race number on them. The small sticker should go on the front of your helmet. The bigger sticker will wrap around your bike frame. Road or mountain bikes are acceptable. For safety reasons, be sure to have end-caps on the end of your handle-bars.</p>

                <h3>Run</h3>
                <p>You must finish the race with your bib number on the front of you. Some people choose to pin it on at the beginning of the race and have it on for the whole event so they don't have to worry about it. Others pin it on a singlet that they put on once they finish the swim before they head out for the bike. Others use an elastic racing strap that they pin their bib number to and then quickly strap it on before they leave for the run. Use whatever option feels best for you.
                </p>

                <p>Remember to bring a change of clothing so you can enjoy the post-event festivities.</p>

            </section>

            <section class="social-feeds">
                <div class="fb-page" data-href="https://www.facebook.com/Cas222Aceinthehole-110661963841617/" data-tabs="timeline" data-width="400" data-height="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/Cas222Aceinthehole-110661963841617/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Cas222Aceinthehole-110661963841617/">Cas222Aceinthehole</a></blockquote>
                </div>

                <a class="twitter-timeline" data-width="400" data-height="500" href="https://twitter.com/pcccas222?ref_src=twsrc%5Etfw">Tweets by pcccas222</a>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
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
