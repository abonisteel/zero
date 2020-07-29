<?php define('BASE_URL', '/cas222/template/'); ?>
<header class="header">
    <input class="menu-btn" type="checkbox" id="menu-btn" />
    <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
    <div id="logo">
        <img src="<?php echo BASE_URL; ?>images/templogo.png" alt="Logo">
        <?php include 'intro.inc.html.php' ?>
    </div>
    <ul class="menu">
        <?php include 'menu.inc.html.php' ?>
    </ul>
</header>
