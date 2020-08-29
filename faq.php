<!DOCTYPE html>

<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <base target="_blank">
    <!-- open all links not marked "_self" in a new tab -->

    <title>FAQs for Ace in the Hole</title>

    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&family=Mulish&display=swap" rel="stylesheet" type="text/css">
    <link href="css/reset.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/faq-hero.css" rel="stylesheet" type="text/css">
    <link href="css/navigation.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="favicon.ico" type="image/x-icon" />

</head>

<body>

    <section id="hero">
        <img src="images/swim-1.jpg" alt="Swimmers Entering Water">
        <!-- desktop hero image -->
        <?php include 'includes/intro.inc.html.php' ?>
    </section>

    <header class="header">
        <!-- tablet and mobile hero image -->
        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
        <div id="logo" class="image">
            <a href="index.php" target="_self"><img src="images/AITH.svg" alt="Ace in the Hole Logo"></a>
            <h1>Answers to FAQs</h1>
            <?php include 'includes/intro.inc.html.php' ?>
        </div>
        <ul class="menu">
            <?php include 'includes/menu.inc.html.php' ?>
        </ul>
    </header>

    <div id="container">

        <main>

            <section>
                <h2>Frequently Asked Questions</h2>
                <!-- Questions and Answers -->
                <dl id="faq">
                    <!-- Q&A 1 -->
                    <dt>What are the Rules?</dt>
                    <dd>We currently adhere to the USAT Rules for Triathlon & Duathlon. Important rules include no drafting, you must wear a helmet and music is ABSOLUTELY NOT allowed during the bike for obvious safety reasons.</dd>

                    <!-- Q&A 2 -->
                    <dt>Can I use a personal music device while cycling?</dt>
                    <dd>Absolutely no music devices are allowed during the bike segment for obvious safety risks and will result in immediate disqualification.</dd>

                    <!-- Q&A 3 -->
                    <dt>Can I use a personal music device while running?</dt>
                    <dd>During any running segments, we prefer for athletes to NOT use music devices to maximize safety, assure a fair competitive environment and assure athletes can hear all course marshal instructions. With that said, we also understand that many athletes rely on music to help endure the challenge of running. To accommodate the needs of our athletes while still assuring maximum safety and a fair, competitive environment, here is the arrangement that we can accommodate:

                        <ul class="faqli">
                            <li>If you choose to use a personal music device, you must always keep one ear open for instructions so only one ear-bud can be used at any time. In addition, if you opt to use music, you will not be eligible for awards, points and rankings. So as an athlete, you have to make a choice - music or awards/points/rankings.</li>

                            <li>If you are using a personal music device with two earbuds, you will be immediately disqualified. Trust us, we don't want to have to enforce a disqualification but in order to assure the safety of all athletes, this is a very important rule.</li>

                            <li>We also request that if you choose to use a personal music device that you keep the volume to a minimum to assure all instructions can be heard.</li>
                        </ul>

                    </dd>

                    <!-- Q&A 4 -->
                    <dt>Do I need to wear a wetsuit?</dt>
                    <dd>No, you do not need to wear a wetsuit. Many will not wear a wetsuit while others will choose to wear a wetsuit because of the buoyancy and warmth factor.</dd>

                    <!-- Q&A 5 -->
                    <dt>Do I have to use a road or racing bike?</dt>
                    <dd>No. We welcome any type of bike as long as it is functioning properly with brakes and endcaps at the end of your handlebars.</dd>
                </dl>
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
