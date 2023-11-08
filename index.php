<?php

if(session_status() != PHP_SESSION_ACTIVE){
  session_start();
}

?>

<html>
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="style.css">

</head>
<body>
      
    <div class = "logo_bar">
        <ul class = logo_left_elements>
            <li><img src = "images/runner_seal_small.png"></li>
            <li><h2>VMI Running Club</h2></li>
        </ul>
        <ul class = "logo_right_elements">
            <li><img src="images/avatar.png"></li> 
            <?php if(isset($_SESSION['privilege'])): ?> <!--i.e. logged in-->
              <li><h3><a href = "signout.php">Sign Out</a></h3></li>
              <li><h3><a href = "#">Manage User</a></h3></li>
            <?php else: ?>              
              <li><h3><a href="login.php">Login</a></h3></li>
              <li><h3><a href="register.php">Register</a></h3></li>
            <?php endif; ?>
        </ul>
    </div>
    <div class= "nav_elements">
        <ul class = "nav_left_elements">
            <li><a href="#">Races</a></li>
            <li><a href="#">Photos</a></li>
            <li><a href="#">Shop</a></li>  
        </ul>
    </div>

    <div class="slideshow-container">

        <div class="mySlides fade">
          <div class="numbertext">1 / 3</div>
          <img src="images/hustle_banner.png" style="width:100%">
          <!-- <div class="text">Harvest Hustle</div> -->
        </div>
        
        <div class="mySlides fade">
          <div class="numbertext">2 / 3</div>
          <img src="images/fall_banner.jpg" style="width:100%">
          <!-- <div class="text">Fall is Fun</div> -->
        </div>
        
        <div class="mySlides fade">
          <div class="numbertext">3 / 3</div>
          <img src="images/chessie_banner.png" style="width:100%">
          <!-- <div class="text">Chessie Trail</div> -->
        </div>
        
    </div>

    <br><br>

    <div class = "container">

        
        <div style="text-align:center">
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span> 
        </div>

        <script>
            let slideIndex = 0;
            showSlides();
            
            function showSlides() {
              let i;
              let slides = document.getElementsByClassName("mySlides");
              let dots = document.getElementsByClassName("dot");
              for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
              }
              slideIndex++;
              if (slideIndex > slides.length) {slideIndex = 1}    
              for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
              }
              slides[slideIndex-1].style.display = "block";  
              dots[slideIndex-1].className += " active";
              setTimeout(showSlides, 4000); // Change image every 2 seconds
            }
            </script>
            

        <!-- <img src="images/banner.png"/ style = "width: 100%; height: 450px; margin: auto;"> -->
        <h1>About Us!</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ultricies laoreet ligula eget dapibus. Phasellus dignissim sagittis justo nec faucibus. Vestibulum vel tincidunt metus. In volutpat volutpat massa, a pharetra nisi laoreet ut. Aliquam accumsan tempus augue. Integer ac ante in lacus egestas ultricies non in eros. Morbi lacinia, dui interdum vulputate varius, ipsum ligula facilisis tortor, at tempus tortor tellus a lacus. Donec semper faucibus tincidunt. Morbi non justo eu ligula lacinia ullamcorper at non purus. Aliquam erat volutpat. Aenean vestibulum urna porta, varius nisl sit amet, tristique ipsum. Nullam aliquet malesuada ante, ac dapibus erat varius a. Curabitur arcu neque, auctor non consectetur scelerisque, imperdiet ut massa. Vivamus maximus lacus felis, id rhoncus augue varius nec. Curabitur id massa dolor.

            Aliquam fringilla porttitor sapien, eu fermentum nunc euismod at. Sed tristique, massa sed laoreet tincidunt, urna sapien scelerisque tellus, a mollis tellus sem quis nibh. Nunc imperdiet auctor aliquet. Nam eu porttitor ipsum, vel posuere metus. Donec ac velit id massa vehicula tincidunt vitae vehicula ante. In sed lectus eget leo gravida interdum. Proin quis neque dignissim, lacinia justo nec, molestie leo. Etiam et lacus dignissim dolor scelerisque pharetra.
            
            Nulla eu est lectus. Cras ut iaculis neque. Nam eget quam sed magna pretium faucibus. Mauris elit ligula, porttitor sed tortor accumsan, lacinia finibus leo. Nam maximus vulputate massa ut efficitur. Proin posuere, elit malesuada porta viverra, metus arcu elementum arcu, sit amet varius sapien ex quis nulla. Sed euismod dolor sit amet eleifend laoreet. Ut id sapien maximus, aliquam ex non, pharetra eros. Duis erat nisl, interdum a fringilla sed, molestie eleifend sem. Sed lobortis mi et justo mollis, in bibendum elit consequat. Pellentesque sit amet porttitor sapien. Nulla nec consequat ipsum.
            
            Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce luctus justo quis ultrices lobortis. Ut non facilisis nisi. Sed tempus lacus urna, ut ultrices elit ullamcorper vitae. Vivamus tempus felis ac sapien fermentum feugiat. Etiam imperdiet lectus vel leo auctor lacinia. Etiam bibendum vulputate eros. Cras eget gravida enim, in efficitur sem. Mauris convallis ipsum eget magna pellentesque lobortis. Nullam tempor, metus at consequat tristique, ipsum enim semper quam, vitae fermentum odio nibh vel ligula.
            
            Integer elementum augue vel molestie scelerisque. Curabitur sit amet mauris in augue convallis placerat. Proin convallis, nisi sit amet mollis dictum, magna magna cursus nulla, sed condimentum augue ante quis nisi. Aenean dictum, felis quis consectetur suscipit, lacus risus volutpat magna, at aliquam lacus diam ac justo. Integer in metus quis justo iaculis tristique ut sit amet lorem. Suspendisse potenti. Phasellus eget diam mi. Etiam et suscipit enim, nec tempor nulla. Quisque tincidunt dui arcu, fringilla viverra arcu porttitor non. In pharetra ante sapien, at cursus nulla cursus ut. In eleifend consequat mi quis laoreet. Etiam maximus tincidunt nibh, vel elementum odio ullamcorper ut. Maecenas non accumsan orci. Sed aliquet ipsum non velit cursus posuere. Ut turpis enim, porta et purus ut, aliquet interdum purus. Vivamus bibendum tortor sed dui interdum, quis porttitor leo ornare.
            
            Nulla consequat porttitor elit. Nullam molestie, risus sit amet pretium vehicula, orci augue sodales augue, vel sagittis justo elit in risus. Curabitur turpis elit, tincidunt ac est vel, mollis posuere tortor. Sed id lorem ac metus venenatis blandit. In hendrerit, neque vitae molestie suscipit, urna sapien pretium ante, sit amet dapibus ex tellus a arcu. Duis pellentesque, risus ut iaculis pretium, ligula ex ornare lectus, eget ullamcorper lacus dui quis odio. Fusce egestas ultricies leo, sit amet dignissim enim consectetur at. Nulla facilisi. Nunc eget pulvinar erat. Mauris leo ex, semper vitae iaculis ut, tincidunt a lacus. Morbi eu magna ac risus ultrices convallis. Mauris mi enim, tempor eget porttitor ut, interdum id nibh. Sed et vehicula quam. Donec volutpat vestibulum justo sed auctor.
            
            Morbi dignissim tempor lectus. Nullam at sapien vulputate dui consequat vulputate. Aliquam dapibus luctus maximus. Maecenas id pharetra libero. Cras tellus orci, consequat at bibendum sit amet, condimentum ac orci. Aliquam sed tortor ut lorem semper tincidunt. Integer consectetur a nibh sed sagittis. Quisque tincidunt congue nisl vitae volutpat. Praesent ut nulla cursus, gravida ex quis, iaculis justo. Quisque metus nisl, lobortis eu ligula eget, gravida commodo tortor. Quisque purus est, posuere quis est id, posuere blandit arcu. Phasellus id leo eu purus hendrerit faucibus. Proin vestibulum, nisi nec tristique hendrerit, lorem arcu venenatis orci, nec imperdiet felis nunc eget turpis. Nulla facilisi. Phasellus nec vulputate diam, a facilisis neque.
            
            Mauris in blandit ligula. Nullam tristique diam sed diam pretium, eu tempor lacus tristique. Nam congue tincidunt tempor. Nam sed mollis augue, eu laoreet ligula. Nulla scelerisque metus et magna euismod, nec pharetra metus efficitur. Cras facilisis diam ac turpis scelerisque volutpat. Cras ullamcorper, lorem eget sollicitudin fermentum, quam tellus efficitur ante, a hendrerit nisi ex quis risus. Aenean eleifend est non dui fringilla eleifend. Proin sed lacus dignissim, viverra magna sed, aliquet ipsum. Ut sed tincidunt sem. Vivamus vel tortor dolor. Curabitur quam tortor, vulputate ut auctor in, convallis et dui. Nulla vehicula lobortis libero, ut molestie quam scelerisque sed. Fusce venenatis porttitor consequat. Integer eget quam ac eros pellentesque blandit nec faucibus dui.
            
            In tellus ipsum, cursus at aliquam in, placerat quis odio. Nam eros nisi, consectetur vel ipsum sed, pretium pharetra ante. Duis quis nunc ut magna blandit faucibus. Proin vitae justo at ligula sagittis suscipit. Sed hendrerit ultricies dolor, in ullamcorper dui aliquam vitae. Vivamus viverra, sem pharetra fringilla commodo, quam odio rhoncus lacus, et bibendum ante nisi et leo. Maecenas commodo ex imperdiet sagittis pretium. Integer sapien libero, accumsan nec euismod nec, consectetur vel lorem. In lacus arcu, blandit et molestie at, malesuada a orci. Sed auctor urna velit, vitae condimentum nibh scelerisque sed. Mauris accumsan dapibus faucibus. Maecenas convallis, mauris quis facilisis pulvinar, leo dui vehicula massa, non malesuada lorem dolor a urna. Phasellus non lorem pulvinar, venenatis diam in, congue mauris. Nulla facilisi. Donec vulputate imperdiet eros vitae sagittis.
            
            Phasellus eu nibh mauris. Curabitur quis justo vitae risus consequat rutrum quis fermentum felis. Vestibulum et nulla ac lacus accumsan varius quis at nulla. Donec euismod libero ut lectus posuere consequat. In sit amet nibh tincidunt, molestie justo a, viverra sem. Vestibulum congue nulla sed nibh rhoncus congue. Proin ex sapien, pulvinar id fermentum vitae, scelerisque nec mauris. Duis justo ipsum, hendrerit et ipsum in, ullamcorper iaculis risus. Morbi ac rhoncus urna.</p>
    </div>
</body>
</html>