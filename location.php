<?php require_once "header.php"?>
<div class="page-wrapper">
    <main id="main-slideshow">
        <div class="slideshow-container">
            <div class="slideshow">
                <a href="location.html"><img class="slideimg1" src="images/1Avocado.jpg" alt="location-food"
                        title="location" /></a>
            </div>
            <div class="slideshow">
                <a href="location.html"><img class="slideimg2" src="images/Grill-Roast-Dinner.jpg" alt="location-food"
                        title="location" /></a>
            </div>
            <div class="slideshow">
                <a href="location.html"><img class="slideimg3" src="images/1Grill-Wine-Clinking.jpg" alt="location-food"
                        title="location" /></a>
            </div>
        </div>
    </main>
    <div class="section-container">
        <div id="container">
            <div id="map" class="location">
            </div>
            <!--Using google maps API and setting marker for our location-->
            <script>
                var map;
                var humber = {
                    lat: 43.7661592,
                    lng: -79.4151374
                }

                function initMap() {
                    map = new google.maps.Map(document.getElementById('map'), {
                        center: humber,
                        zoom: 15
                    });
                    var marker = new google.maps.Marker({
                        position: humber,
                        map: map
                    });
                }
            </script>
                <script
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCL4lK7w5Tr11XPk6i8o7pJqpsN1Jnjrws&callback=initMap"
                    async defer></script>


            <div id="sec2-geninfo">
                <div id="sec2">
                    <h3 class="hours">Open Hours</h3>
                    <p class="open-hours">Monday 10:00am-10:30pm</p>
                    <p class="open-hours">Tuesday 10:00am-10:30pm</p>
                    <p class="open-hours">Wednesday 10:00am-10:30pm</p>
                    <p class="open-hours">Thursday 10:00am-10:30pm</p>
                    <p class="open-hours">Friday 09:00am-11:00pm</p>
                    <p class="open-hours">Saturday 11:00am-12:00pm</p>
                    <p class="open-hours">Sunday 11:00am-12:00pm</p>
                    <h3>Lunch Special</h3>
                    <p>Mon-Fri 12:00am-2pm</p>
                    <h3>Dinner Special</h3>
                    <p>Mon-Thur 5:30am-9pm</p>
                    <p>Fri-Sun 5:30am-9:30pm</p>
                    <h3>underwater restaurant</h3>
                    <p>5000 Yonge St. Toronto, ON M2N 7E9</p>
                    <p>(416)050-5050</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once "footer.php"?>