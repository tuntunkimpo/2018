<?php
    include_once './inc/head.php';
?>
        <main>
            <section id="main" class="scene one row">
                <header class="col-md-12 titleheader" >
                        <div class="title"><h1>코딩은 본디 혼자 배우는 것!!</h1>
                            <button class="btn success">see more</button>
                        </div>
                        <div class="box redbox"><img src="./img/main.83684950.png" alt=""></div>
                        <div class="box greenbox"><img src="./img/components.ea89c574.png" alt=""></div>
               </header>
            </section>
            </div>
            <section class="scene two row">
                <header class="col-md-12">
                  <h1>2Lorem ipsum dolor sit amet.</h1> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam suscipit sint ab beatae nihi
                </header>
            </section>
            
            <section class="scene three row">
                <header class="col-md-12">
                  <h1>3Lorem ipsum dolor sit amet.</h1> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam suscipit sint ab beatae nihi
                </header>
            </section>
        </main>
        
        <!-- Contact Section -->
        <div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
            <h3 class="w3-center">CONTACT</h3>
            <p class="w3-center w3-large">Lets get in touch. Send us a message:</p>
            <div class="w3-row-padding" style="margin-top:64px">
                <div class="w3-half">
                <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> Suwon, KO</p>
                <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: +10 49055202</p>
                <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: tuntunkimpo@naver.com</p>
                <br>
                <form action="/action_page.php" target="_blank">
                    <p><input class="w3-input w3-border" type="text" placeholder="Name" required name="Name"></p>
                    <p><input class="w3-input w3-border" type="text" placeholder="Email" required name="Email"></p>
                    <p><input class="w3-input w3-border" type="text" placeholder="Subject" required name="Subject"></p>
                    <p><input class="w3-input w3-border" type="text" placeholder="Message" required name="Message"></p>
                    <p>
                    <button class="w3-button w3-black" type="submit">
                        <i class="fa fa-paper-plane"></i> SEND MESSAGE
                    </button>
                    </p>
                </form>
                </div>
                <div class="w3-half">
                <!-- Add Google Maps -->
                <div id="googleMap" class="w3-greyscale-max" style="width:100%;height:510px;"></div>
                </div>
            </div>
        </div>
      
      <!-- Footer -->
      <footer class="w3-center w3-black w3-padding-64" style="background-color: #36333C !important; height: 10em !important;">
        <a href="#home" class="w3-button" >
            <!-- <i class="fa fa-arrow-up w3-margin-right"></i>To the top -->
        </a>
      <footer class="w3-center w3-black w3-padding-64" style="background-color: #36333C !important;">
        <a href="#home" class="w3-button" ><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
        <div class="w3-xlarge w3-section">
          <i class="fa fa-facebook-official w3-hover-opacity"></i>
          <i class="fa fa-instagram w3-hover-opacity"></i>
          <i class="fa fa-snapchat w3-hover-opacity"></i>
          <i class="fa fa-pinterest-p w3-hover-opacity"></i>
          <i class="fa fa-twitter w3-hover-opacity"></i>
          <i class="fa fa-linkedin w3-hover-opacity"></i>
        </div>
      </footer>
    </div>

<!-- Add Google Maps -->
<script>
        function myMap()
        {
          myCenter=new google.maps.LatLng(37.277829, 126.969704);
          var mapOptions= {
            center:myCenter,
            zoom:12, scrollwheel: false, draggable: false,
            mapTypeId:google.maps.MapTypeId.ROADMAP
          };
          var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);
        
          var marker = new google.maps.Marker({
            position: myCenter,
          });
          marker.setMap(map);
        }
        
        // Modal Image Gallery
        function onClick(element) {
          document.getElementById("img01").src = element.src;
          document.getElementById("modal01").style.display = "block";
          var captionText = document.getElementById("caption");
          captionText.innerHTML = element.alt;
        }
        
        
        // Toggle between showing and hiding the sidebar when clicking the menu icon
        var mySidebar = document.getElementById("mySidebar");
        
        function w3_open() {
            if (mySidebar.style.display === 'block') {
                mySidebar.style.display = 'none';
            } else {
                mySidebar.style.display = 'block';
            }
        }
        
        // Close the sidebar with the close button
        function w3_close() {
            mySidebar.style.display = "none";
        }

        // 스크롤 jquery에니메이션 
        $(window).scroll(function(){
            console.log($(this).scrollTop());
            // transform: translate3d(0px, 330px, 0px);
            var redBoxSpeed = $(this).scrollTop()/5;
            var greenBoxSpeed = $(this).scrollTop()/3;
            
    
    
            $(".redbox").css("-webkit-transform", "translate3d(0px,"+redBoxSpeed+"px, 0px)");
            $(".greenbox").css("-webkit-transform", "translate3d(0px,"+greenBoxSpeed+"px, 0px)");
        });
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCs933UzjYy_fxRkGivV_7L6Ieo_S-yCtY&callback=myMap"></script>
    <!--
    To use this code on your website, get a free API key from Google.
    Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
    -->

    <!-- bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>

</html>