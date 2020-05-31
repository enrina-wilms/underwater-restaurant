<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>underwater restaurant</title>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles/contact_usStyle.css">
</head>

<body>
    <header id="header">
        <a href="index.php"><img id="underwater-logo" src="images/logo_white.png" alt="underwater restaurant logo"
                width="100" title="underwater restaurant" /></a>
        <nav id="main-menu">
            <ul class="top-nav">
                <li><a href="about.php">ABOUT</a></li>
                <li><a href="location.php">LOCATION</a></li>
                <li><a href="menu.php">MENU</a></li>
                <li><a href="weeklySpecial.php">WEEKLY SPECIAL</a></li>
                <li><a href="eventsbooking.php">RESERVATIONS</a></li>
                <li><a href="contacts.php">CONTACT</a></li>
            </ul>
        </nav>
    </header>
    <main id="main">
        <h1>Contact Us</h1>
        <p id="par1">If you would like to contact us you can submit an inquiry below,
            <span>and we will respond as soon as possible, or you can call us at the following number</span>
        </p>
        <span id="formSuccess"></span>
        <?php
                    include 'includes/contact/addContact.php';
                ?>
    </main>
    <footer id="footer">
        <div id="aside-info-left">
            <aside id=asideinfoleft>
                <ul class="bottom-nav">
                    <li><a href="location.php">Hours</a></li>
                    <li><a href="menu.php">Menu</a></li>
                    <li><a href="giftcard.php">Gift Card</a></li>
                    <li><a href="sitemap.php">Site Map</a></li>
                    <li><a href="careers.php">Careers</a></li>
                    <li><a href="contacts.php">Contact</a></li>
                </ul>
                <p class="right">© Copyright underwater restaurant. All rights reserved.</p>
            </aside>
        </div>
        <div id="aside-info-right">
            <aside id=asideinforight>
                <ul class="bottom-nav">
                    <li><a href="index.php"><img src="images/logo_344a6d.png" alt="underwater restaurant logo"
                                width="150" title="underwater restaurant" /></a>
                        <p class="footerp">5000 Yonge St. Toronto, ON M2N 7E9</p>
                        <p class="footerp">(416)050-5050</p>
                    </li>
                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter-square"></i></a>
                </ul>
            </aside>
        </div>
    </footer>
    <script src="javascript/contact.js"></script>
</body>

</html>