<?php
/*
Plugin Name: bullitWizard
Plugin URI: http://evang.dk/
Description: A wizard to pick the right  prebuildt Bullit bike that fits your needs
Version: 0.2
Author: Cecilie Karlsson
Author URI: http://evang.dk
License: GPL
*/
function showBullitWizard()
{

    ?>
        <script type="text/javascript">

            step = 0;

            function wizardButtonClicked()
            {
                step ++;

                switch(step) {
                    case 0:
                        document.getElementById("bike-wizard-progress-bar").style.width = '0%';
                        document.getElementById("bike-wizard-text-field").innerHTML = "Welcome to the Bullit wizard.";
                        console.log(step);
                        break;
                    case 1:
                        document.getElementById("bike-wizard-progress-bar").style.width = '20%';
                        document.getElementById("bike-wizard-text-field").innerHTML =
                            "<div class='wrapper'>" +
                                " <h1> Step 1 - Choose Your Bike</h1> " +
                                "<div class='col-sm-12 ' >" +
                            "<img src='http://www.larryvsharry.com/wp-content/uploads/2016/04/Alfine_plstbox_clockwork.png' class='imgbullitwizard' >" +
                            "       <div class='radio'>" +
                            "           <label><input type='radio' name='optradio'>The Standard</label> " +
                            "       </div> " +
                            "At Larry Vs. Harry we like well made, quality components, so our builds start where most others stop. We want to ride all of our bikes, and refuse to sell bikes that we wouldn’t want to ride ourselves.\n" +
                            "\n" +
                            "The internal Shimano Alfine 8 speed for example is our most popular choice. It’s a no-fuss, carefree setup that just works, has a great gear range, powerful brakes and is Gates Carbon Drive compatible. Combine it with our strong, light and versatile Honeycomb Board and you have simple, effective setup with a lot of options for different sized cargo. This is great if you wish to maintain flexibility with the bike – groceries, friends, fridges and so on. " +
                            "</div>" +

                            "   <div class='col-sm-12'>" +
                            "<img src='http://www.larryvsharry.com/wp-content/uploads/2016/04/Nexus_Milk_Canopy.png' class='imgbullitwizard'>" +

                            "        <div class='radio'>" +
                            "           <label><input type='radio' name='optradio'>The Family</label> " +
                            "          </div> " +
                            "We know that our children are a huge part of our lives and if their safe, convenient transportation is your priority, this bike is worth your consideration.\n" +
                            "\n" +
                            "Built around the Canopy, with a Honeycomb Board as a solid foundation and the Foldable Seat, it offers a comfortable and protected build for your little ones. The Canopy gives 12cm/4,5” more space due to it’s aluminium sidebars, so there is a more room. Under normal circumstances and as a rough guide you can fit two children up to the age 5-7 years next to each other. If you choose a reliable and virtually maintenance free internal groupset, such as the Shimano Alfine 8 or Alfine 11, speedy and efficient school runs are guaranteed." +
                            "   </div>" +

                            "   <div class='col-sm-12'>" +
                            "<img src='http://www.larryvsharry.com/wp-content/uploads/2016/04/Ext_Bluebird_BBX.png' class='imgbullitwizard'>" +
                            "       <div class='radio'>" +
                            "           <label><input type='radio' name='optradio'>The Speedster</label> " +
                            "       </div>" +
                            "So you like some aspects of the “Minivan” – but you missed a bit of speed and maybe a bit of flexibility? Built around one of our most versatile accessories, the BBX Sidepanels, which comes with a soft-top foldable cover, and again build with our strong and light Honeycomb Board on the bottom. This setup can for example, still carry two children next to each other, and when they get older facing each other.\n" +
                            "\n" +
                            "When you’ve dropped the children off, the bike transforms instantly into a lightning quick commuter, fully utilizing quick shifting, external Shimano Deore 20 or XT 20 groupset. This is a really smart option if you have a fair distance to travel and wish to do so at speed." +
                           "   </div> " +

                            "   <div class='col-sm-12'>" +
                            "<img src='http://www.larryvsharry.com/wp-content/uploads/2016/04/Ext_alubox_Sub.png' class='imgbullitwizard'>" +
                            "       <div class='radio'>" +
                            "           <label><input type='radio' name='optradio'>The Tool</label> " +
                            "       </div>" +
                            "So is the Bullitt only for families and urban racers? No, certainly not. Set it up with an aluminium made lockable Convoy box, which is tailored to the Bullitt frame for maximum space – and you’ve got a perfect workhorse for professionals.\n" +
                            "\n" +
                            "The Convoy box has a load capacity of 145 litres and the smaller, lighter Alu Box 130 litres . Whether you are a photographer locking up your photo or video equipment or a carpenter, plumber or any other kind of craftsman locking up your tools, these two aluminium, lockable storage solutions will keep your valuables secure. You could very well choose to go with the Shimano Alfine 11 speed with this setup. It has a bigger gear ratio than the Shimano Alfine 8 speed (408% vs 307%) to help you deal with the extra weight." +
                            "   </div> " +

                            "   <div class='col-sm-12'>" +
                            "<img src='http://www.larryvsharry.com/wp-content/uploads/2016/04/Ebullitt_pepper.png' class='imgbullitwizard'>" +
                            "       <div class='radio'>" +
                            "           <label><input type='radio' name='optradio'>The Speps ebullit</label> " +
                            "       </div>" +
                            "This bike represents the pinnacle of the Bullitt’s development and a product we are incredibly proud of. It opens up, yet again the possibilities of urban transport for families, businesses and professionals and highlights our commitment to innovation and the development of the cargo bike.\n" +
                            "\n" +
                            "The STePS eBullitt has a specific frame to accomodate the motor which is now placed at the crank. This means in practical terms that the bike uses a regular Shimano Alfine hub now, so there is no drag and also has the added benefit of centering the weight more evenly, to create a more balanced ride. The battery takes care of both the pedelec assistance and also the gear shifting as the STePS eBullitt incorporates Shimano’s Di2 electronic shifting for more reliable and durable gear changing. In addition, the lights are also powered from the main battery and can be controlled from the handlebar controls, where the on-board display gives on the spot information on speed, battery life and mode selection. Last, but not least, and a feature we were particularly impressed by was the automatic downshifting at stops, an inventive and highly functional addition whereby the bike automatically shifts to a preselected lower gear, for more manageable starts." +
                           "   </div> " +

                            "</div> ";
                        console.log(step);
                        break;
                    case 2:
                        document.getElementById("bike-wizard-progress-bar").style.width = '40%';
                        document.getElementById("bike-wizard-text-field").innerHTML =
                            "<div class='wrapper'>" +
                            "<h1>Step 2 - What you are buying</h1>" +
                            "<p> Here you will find a list of what items you have checked off, and recommendations on what you are missing. <br>" +
                            "Here you can check off things if you have regret or do not want to buy them. <br> " +
                            "If everything seems as it is supposed to, then just click next and go to the payment site. </p>" +
                            "</div>";

                        console.log(step);
                        break;
                    case 3:
                        document.getElementById("bike-wizard-progress-bar").style.width = '60%';
                        document.getElementById("bike-wizard-text-field").innerHTML =
                            "<div class='wrapper'>" +
                            "<h1>Step 3 - Payment</h1>" +
                            "<p> This is the payment area. Where there will be a form where you can pay. " +
                            " <form class='form-horizontal'>" +
                            "    <div class='form-group'>" +
                            "      <label class='col-sm-2 control-label'>Email</label>" +
                            "      <div class='col-sm-10'>" +
                            "        <input class='form-control' id='focusedInput' type='text' value='Enter email...'>" +
                            "      </div>" +
                            "    </div>" +

                            "    <div class='form-group'>" +
                            "      <label class='col-sm-2 control-label'>Name</label>" +
                            "      <div class='col-sm-10'>" +
                            "        <input class='form-control' id='focusedInput' type='text' value='Enter Name...'>" +
                            "      </div>" +
                            "    </div>" +

                            "    <div class='form-group'>" +
                            "      <label class='col-sm-2 control-label'>Adress</label>" +
                            "      <div class='col-sm-10'>" +
                            "        <input class='form-control' id='focusedInput' type='text' value='Enter Adress...'>" +
                            "      </div>" +
                            "    </div>" +
                            "    <div class='form-group'>" +
                            "      <label class='col-sm-2 control-label'>Cardnumber</label>" +
                            "      <div class='col-sm-10'>" +
                            "        <input class='form-control' id='focusedInput' type='text' value='Enter Cardnumber...'>" +
                            "      </div>" +
                            "    </div>" +
                            "<div class='form-group'> " +
                            "      <div class='col-sm-offset-2 col-sm-10'>" +
                            "        <button type='submit' class='btn btn-default'>Submit</button>" +
                            "      </div>" +
                            "    </div>" +
                            "  </form>" +
                            "</p>" +
                            "</div>";
                        console.log(step);
                        break;
                    case 4:
                        document.getElementById("bike-wizard-progress-bar").style.width = '80%';
                        document.getElementById("bike-wizard-text-field").innerHTML =
                            "<div class='wrapper'>" +
                            "<h1>Step 4 - Order confirmation</h1>" +
                            "<p> Here you can see you order, that are payed and waiting to be packed and shipped </p>" +
                            "</div>";
                        console.log(step);
                        break;
                    case 5:
                        document.getElementById("bike-wizard-progress-bar").style.width = '100%';
                        document.getElementById("bike-wizard-text-field").innerHTML =
                            "<div class='wrapper'>" +
                            "<h1>Step 5 - Thank you for your purchase </h1>" +
                            "<p>Here is some other things you might find interesting </p>" +
                            "</div>";
                        console.log(step);
                        break;

                    case 6:
                        if (this.step > 5) {this.step = 5;}
                        document.getElementById("bike-wizard-progress-bar").style.width = '100%';
                        document.getElementById("bike-wizard-text-field").innerHTML ="<div class='wrapper'>" +
                            "<h1>Step 5 - Thank you for your purchase </h1>" +
                            "<p>Here is some other things you might find interesting </p>" +
                            "</div>";
                        console.log(step);
                        break;
                    default:
                       // document.getElementById("bike-wizard-progress-bar").style.width = '100%';
                      //  document.getElementById("bike-wizard-text-field").innerHTML = "Step 5...";
                        console.log(step);
                        break;

                }


            }

            function wizardButtonClickedback() {
                step--;

                switch(step) {
                    case -1:
                        if (this.step < 0) {
                            this.step = 0;
                        }
                        document.getElementById("bike-wizard-progress-bar").style.width = '0%';
                        document.getElementById("bike-wizard-text-field").innerHTML = "Welcome to the bike wizard. Here you can custom build your own Bullit.";
                        console.log(step);
                        break;
                    case 0:

                        document.getElementById("bike-wizard-progress-bar").style.width = '0%';
                        document.getElementById("bike-wizard-text-field").innerHTML =  "Welcome to the Bullit wizard.";
                            console.log(step);
                        break;
                    case 1:
                        document.getElementById("bike-wizard-progress-bar").style.width = '20%';
                        document.getElementById("bike-wizard-text-field").innerHTML =
                            "<div class='wrapper'>" +
                            " <h1> Step 1 - Choose Your Bike</h1> " +
                            "<div class='col-sm-12 ' >" +
                            "<img src='http://www.larryvsharry.com/wp-content/uploads/2016/04/Alfine_plstbox_clockwork.png' class='imgbullitwizard' >" +
                            "       <div class='radio'>" +
                            "           <label><input type='radio' name='optradio'>The Standard</label> " +
                            "       </div> " +
                            "At Larry Vs. Harry we like well made, quality components, so our builds start where most others stop. We want to ride all of our bikes, and refuse to sell bikes that we wouldn’t want to ride ourselves.\n" +
                            "\n" +
                            "The internal Shimano Alfine 8 speed for example is our most popular choice. It’s a no-fuss, carefree setup that just works, has a great gear range, powerful brakes and is Gates Carbon Drive compatible. Combine it with our strong, light and versatile Honeycomb Board and you have simple, effective setup with a lot of options for different sized cargo. This is great if you wish to maintain flexibility with the bike – groceries, friends, fridges and so on. " +
                            "</div>" +

                            "   <div class='col-sm-12'>" +
                            "<img src='http://www.larryvsharry.com/wp-content/uploads/2016/04/Nexus_Milk_Canopy.png' class='imgbullitwizard'>" +

                            "        <div class='radio'>" +
                            "           <label><input type='radio' name='optradio'>The Family</label> " +
                            "          </div> " +
                            "We know that our children are a huge part of our lives and if their safe, convenient transportation is your priority, this bike is worth your consideration.\n" +
                            "\n" +
                            "Built around the Canopy, with a Honeycomb Board as a solid foundation and the Foldable Seat, it offers a comfortable and protected build for your little ones. The Canopy gives 12cm/4,5” more space due to it’s aluminium sidebars, so there is a more room. Under normal circumstances and as a rough guide you can fit two children up to the age 5-7 years next to each other. If you choose a reliable and virtually maintenance free internal groupset, such as the Shimano Alfine 8 or Alfine 11, speedy and efficient school runs are guaranteed." +
                            "   </div>" +

                            "   <div class='col-sm-12'>" +
                            "<img src='http://www.larryvsharry.com/wp-content/uploads/2016/04/Ext_Bluebird_BBX.png' class='imgbullitwizard'>" +
                            "       <div class='radio'>" +
                            "           <label><input type='radio' name='optradio'>The Speedster</label> " +
                            "       </div>" +
                            "So you like some aspects of the “Minivan” – but you missed a bit of speed and maybe a bit of flexibility? Built around one of our most versatile accessories, the BBX Sidepanels, which comes with a soft-top foldable cover, and again build with our strong and light Honeycomb Board on the bottom. This setup can for example, still carry two children next to each other, and when they get older facing each other.\n" +
                            "\n" +
                            "When you’ve dropped the children off, the bike transforms instantly into a lightning quick commuter, fully utilizing quick shifting, external Shimano Deore 20 or XT 20 groupset. This is a really smart option if you have a fair distance to travel and wish to do so at speed." +
                            "   </div> " +

                            "   <div class='col-sm-12'>" +
                            "<img src='http://www.larryvsharry.com/wp-content/uploads/2016/04/Ext_alubox_Sub.png' class='imgbullitwizard'>" +
                            "       <div class='radio'>" +
                            "           <label><input type='radio' name='optradio'>The Tool</label> " +
                            "       </div>" +
                            "So is the Bullitt only for families and urban racers? No, certainly not. Set it up with an aluminium made lockable Convoy box, which is tailored to the Bullitt frame for maximum space – and you’ve got a perfect workhorse for professionals.\n" +
                            "\n" +
                            "The Convoy box has a load capacity of 145 litres and the smaller, lighter Alu Box 130 litres . Whether you are a photographer locking up your photo or video equipment or a carpenter, plumber or any other kind of craftsman locking up your tools, these two aluminium, lockable storage solutions will keep your valuables secure. You could very well choose to go with the Shimano Alfine 11 speed with this setup. It has a bigger gear ratio than the Shimano Alfine 8 speed (408% vs 307%) to help you deal with the extra weight." +
                            "   </div> " +

                            "   <div class='col-sm-12'>" +
                            "<img src='http://www.larryvsharry.com/wp-content/uploads/2016/04/Ebullitt_pepper.png' class='imgbullitwizard'>" +
                            "       <div class='radio'>" +
                            "           <label><input type='radio' name='optradio'>The Speps ebullit</label> " +
                            "       </div>" +
                            "This bike represents the pinnacle of the Bullitt’s development and a product we are incredibly proud of. It opens up, yet again the possibilities of urban transport for families, businesses and professionals and highlights our commitment to innovation and the development of the cargo bike.\n" +
                            "\n" +
                            "The STePS eBullitt has a specific frame to accomodate the motor which is now placed at the crank. This means in practical terms that the bike uses a regular Shimano Alfine hub now, so there is no drag and also has the added benefit of centering the weight more evenly, to create a more balanced ride. The battery takes care of both the pedelec assistance and also the gear shifting as the STePS eBullitt incorporates Shimano’s Di2 electronic shifting for more reliable and durable gear changing. In addition, the lights are also powered from the main battery and can be controlled from the handlebar controls, where the on-board display gives on the spot information on speed, battery life and mode selection. Last, but not least, and a feature we were particularly impressed by was the automatic downshifting at stops, an inventive and highly functional addition whereby the bike automatically shifts to a preselected lower gear, for more manageable starts." +
                            "   </div> " +

                            "</div> ";
                        console.log(step);
                        break;
                    case 2:
                        document.getElementById("bike-wizard-progress-bar").style.width = '40%';
                        document.getElementById("bike-wizard-text-field").innerHTML =
                            "<div class='wrapper'>" +
                            "<h1>Step 2 - What you are buying</h1>" +
                            "<p> Here you will find a list of what items you have checked off, and recommendations on what you are missing. <br>" +
                            "Here you can check off things if you have regret or do not want to buy them. <br> " +
                            "If everything seems as it is supposed to, then just click next and go to the payment site. </p>" +
                            "</div>";

                        console.log(step);
                        break;
                    case 3:
                        document.getElementById("bike-wizard-progress-bar").style.width = '60%';
                        document.getElementById("bike-wizard-text-field").innerHTML =
                            "<div class='wrapper'>" +
                            "<h1>Step 3 - Payment</h1>" +
                            "<p> This is the payment area. Where there will be a form where you can pay. " +
                            " <form class='form-horizontal'>" +
                            "    <div class='form-group'>" +
                            "      <label class='col-sm-2 control-label'>Email</label>" +
                            "      <div class='col-sm-10'>" +
                            "        <input class='form-control' id='focusedInput' type='text' value='Enter email...'>" +
                            "      </div>" +
                            "    </div>" +

                            "    <div class='form-group'>" +
                            "      <label class='col-sm-2 control-label'>Name</label>" +
                            "      <div class='col-sm-10'>" +
                            "        <input class='form-control' id='focusedInput' type='text' value='Enter Name...'>" +
                            "      </div>" +
                            "    </div>" +

                            "    <div class='form-group'>" +
                            "      <label class='col-sm-2 control-label'>Adress</label>" +
                            "      <div class='col-sm-10'>" +
                            "        <input class='form-control' id='focusedInput' type='text' value='Enter Adress...'>" +
                            "      </div>" +
                            "    </div>" +
                            "    <div class='form-group'>" +
                            "      <label class='col-sm-2 control-label'>Cardnumber</label>" +
                            "      <div class='col-sm-10'>" +
                            "        <input class='form-control' id='focusedInput' type='text' value='Enter Cardnumber...'>" +
                            "      </div>" +
                            "    </div>" +
                            "<div class='form-group'> " +
                            "      <div class='col-sm-offset-2 col-sm-10'>" +
                            "        <button type='submit' class='btn btn-default'>Submit</button>" +
                            "      </div>" +
                            "    </div>" +
                            "  </form>" +
                            "</p>" +
                            "</div>";
                        console.log(step);
                        break;
                    case 4:
                        document.getElementById("bike-wizard-progress-bar").style.width = '80%';
                        document.getElementById("bike-wizard-text-field").innerHTML =
                            "<div class='wrapper'>" +
                            "<h1>Step 4 - Order confirmation</h1>" +
                            "<p> Here you can see you order, that are payed and waiting to be packed and shipped </p>" +
                            "</div>";
                        console.log(step);
                        break;
                    case 5:
                        document.getElementById("bike-wizard-progress-bar").style.width = '100%';
                        document.getElementById("bike-wizard-text-field").innerHTML =
                            "<div class='wrapper'>" +
                            "<h1>Step 5 - Thank you for your purchase </h1>" +
                            "<p>Here is some other things you might find interesting </p>" +
                            "</div>";
                        console.log(step);
                        break;
                    default:
                        console.log(step);
                        // document.getElementById("bike-wizard-progress-bar").style.width = '20%';
                       // document.getElementById("bike-wizard-text-field").innerHTML = "Step 1...";
                        break;

                }
            }
        </script>

        <div class="progress">
            <div class="progress-bar" id="bike-wizard-progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:0%">
            <span class="sr-only">70% Complete</span>
            </div>
        </div>

        <div id="bike-wizard-text-field">
<br>
            Bullitt’s are as different as the people who ride them and with years of experience, we have developed what we believe to be the ultimate, do-it-all cargo bike.
<br>
            Designed, built and ridden daily in Copenhagen and across the globe.
            <br>
            9 colour options and a diverse component and accessory line.
<br>
            With quick delivery and availability, competitive pricing and a highly developed system of components and accessories, the Bullitt is the quickest, most flexible and durable solution currently on the market.
<br>
            This buyer’s guide is designed to help you choose the correct Bullitt model and pair you with the most appropriate accessories for your needs.
        </div>
        <button type="button" class="btn btn-default" onclick="wizardButtonClickedback()">Back</button>
        <button type="button" class="btn btn-default" onclick="wizardButtonClicked()">Next Step</button>

    <?php
}

add_shortcode('bullitwizard', 'showBullitWizard');

?>

