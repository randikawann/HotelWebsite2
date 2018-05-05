<?php
    include_once 'includes/header.php';
?>
    <link rel="stylesheet" href="Style/HomeStyle.css"/>
<?php
    include_once 'includes/nav.php';
?>

    <img id="largeImage" src="Image/bed2.jpg"/>
    <div class="middleText">
        <p class="topicHotel"><span id="one"> HOTEL SINHARAGAMA </span><span id="two">RESORT & SPA </span><span id="three">Anuradhapura-SriLanka</span></p>
        
        <p class="conten1">"Hotel sinharagama is Located in sinharagama Only 8km From Wilpaththu National Park and 20km Away from Anuradhapura Ancient City, The Accommodation Welcomes Guests with an Outdoor Swimming Pool and "</p>
        
    </div>
    <div>
        <form action="mailto:randikawann@gmail.com" method:post>
            <fieldset>
                <ledgend>Room recevation :</ledgend>
                <label for="username">UserName</label>
                <input type="text" name="UserName" required="required">
                <label for="tp">TelephoneNumber :</label>
                <input type="number" name="tp" required="required">
                <label for="email">E-mail :</label>
                <input type="email" name="email">
                <label for="rooms">Number of Rooms :</label>
                <input type="number" name="rooms">
                <label for="roomtype">Room Type :</label>
                <select name=”device”>
                    <option value=”ipod”>delux</option>
                    <option value=”computer”>luxcery</option>

                
            </fieldset>
            
        </form>
    </div>
<?php
    include_once 'includes/footer.php';
?>