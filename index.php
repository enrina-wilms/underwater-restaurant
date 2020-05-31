<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>underwater restaurant</title>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300" rel="stylesheet">
    <link rel="stylesheet" , type="text/css" , href="styles/homepageStyle.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="javascript/homepage.js" type="text/javascript"></script>
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
    <div class="page-wrapper">
        <main id="main-slideshow">

            <div id="slideshow-container">
                <a href="weeklyspecial.php"><img class="slides" src="images/weeklyspecial.jpg" alt="weekly spaical"
                        title="weekly spaical banner" /></a>
                <!--image source: https://www.sbs.com.au/food/recipes/rhubarb-and-lentil-salad-goats-curd-and-black-olives-->
                <a href="contest.php"><img class="slides" src="images/contestbanner.jpg" alt="contest"
                        title="contest banner" /></a>
                <!--image source: http://anthonys.restaurant/menu/fettucine-alfredo/02-23-att-risotto-ftr1/-->
                <a href="giftcard.php"><img class="slides" src="images/giftcardbanner.jpg" alt="gift card"
                        title="gift card banner" /></a>
                <!--image source: https://thelodgedinners.com/img_1289/-->
                <button class="btn" onclick="plusIndex(-1)" id="btnprev">&#10094;</button>
                <button class="btn" onclick="plusIndex(1)" id="btnnext">&#10095;</button>
            </div>
            <div class="slideshow-textblock-container">
                <p class="slideshow-title"><a href="weeklySpecial.php">Weekly Special</a></p>
                <p class="slideshow-title"><a href="contest.php">Join the Contest</a></p>
                <p class="slideshow-title"><a href="giftcard.php">Gift Card</a></p>
            </div>
        </main>
        <div class="section-container">
            <section id="sec1-menu">
                <a href="menu.php"><img id="menuhomeimg" src="images/menu_homepage.jpg" alt="menu"
                        title="menu image" /></a>
                <!--image sourse from:https://www.foodandwine.com/recipes/seafood-pasta-tuscan-hot-oil -->
                <div id="menu-text-block">
                    <h2 class="menu-subtitle"><a href="menu.php">Menu</a></h2>
                </div>
            </section>
            <section id="sec2-geninfo">
                <div id="sec2">
                    <h3 class="hours">Hours</h3>
                    <h3>Lunch</h3>
                    <p>Mon-Fri 11:30am-2:30pm</p>
                    <h3>Dinner</h3>
                    <p>Mon-Thur 5:30am-9pm</p>
                    <p>Fri-Sun 5:30am-9:30pm</p>
                    <h3>underwater restaurant</h3>
                    <p>5000 Yonge St. Toronto, ON M2N 7E9</p>
                    <p>(416)050-5050</p>
                </div>
            </section>
        </div>
    </div>
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
</body>

</html>