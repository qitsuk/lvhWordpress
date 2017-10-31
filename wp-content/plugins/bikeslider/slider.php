<?php
/*
Plugin Name: bikeslider
Plugin URI: http://evang.dk/
Description: A slider to show examples on bullit bikes
Version: 0.2
Author: Cecilie Karlsson
Author URI: http://evang.dk
License: GPL
*/
function showbikeslider()
{

?>


<html>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
<h2 class="w3-center">Examples of Bullit Bikes</h2>



<div class="w3-content w3-display-container">
    <a href="http://localhost/?page_id=74" data-toggle="tooltip" title="The Standard Bullit Bike"> <img class="mySlides" src="http://www.larryvsharry.com/wp-content/uploads/2016/04/Alfine_plstbox_clockwork.png" style="width:100%"></a>
    <a href="http://localhost/?page_id=74" data-toggle="tooltip" title="The Family Bike"> <img class="mySlides" src="http://www.larryvsharry.com/wp-content/uploads/2016/04/Nexus_Milk_Canopy.png" style="width:100%"></a>
    <a href="http://localhost/?page_id=74" data-toggle="tooltip" title="The Speedster"> <img class="mySlides" src="http://www.larryvsharry.com/wp-content/uploads/2016/04/Ext_Bluebird_BBX.png" style="width:100%"></a>
    <a href="http://localhost/?page_id=74" data-toggle="tooltip" title="The Tool "> <img class="mySlides" src="http://www.larryvsharry.com/wp-content/uploads/2016/04/Ext_alubox_Sub.png" style="width:100%"></a>
    <a href="http://localhost/?page_id=74" data-toggle="tooltip" title="The Steps Ebullit"><img class="mySlides" src="http://www.larryvsharry.com/wp-content/uploads/2016/04/Ebullitt_pepper.png" style="width:100%"></a>

    <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
    <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>

<script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        x[slideIndex-1].style.display = "block";
    }
</script>

</body>
</html>
    <?php
}

add_shortcode('bikeslider', 'showbikeslider');

?>