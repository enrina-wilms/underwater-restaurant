<?php require_once "header.php"?>
<div class="page-wrapper">
    <main id="main-reservation">
        <div id="main-content">
            <p id="hours">Our Hours: Monday - Sunday 11:30 AM - 11:30 PM </p>
            <p id="more-info">For further questions or to make reservation over the phone<br>please call (416)-050-5050
            </p>
            <form class="reserve">
                <input type="text" name="date" placeholder="Select Date">
                <input type="text" name="time" placeholder="Time (HH:MM) ">
                <input type="text" name="party-size" placeholder="Party Size">
                <div id="info">
                    <input type="text" name="name" placeholder="Your Name"><br>
                    <input type="text" name="email" placeholder="Email Address"><br>
                    <input type="text" name="phone" placeholder="Phone Number">
                    <input type="submit" value="Reserve Now" id="reserve" name="reserve">
                </div>
            </form>
        </div>
    </main>
</div>
<br>
<br>
<br>

<?php require_once "footer.php"?>