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

        <!-- Logo Bar w/ Account Links -->
        <div class = "logo_bar">
            <ul class = logo_left_elements>
                <li><img src = "images/runner_seal_small.png"></li>
                <li><h2>VMI Running Club</h2></li>
            </ul>
            <ul class = "logo_right_elements">
                <li><img src="images/avatar.png"></li> 
                <?php if(isset($_SESSION['privilege'])): ?> <!--i.e. logged in-->
                  <li><h3><a href = "signout.php">Sign Out</a></h3></li>
                  <li><h3><a href = "manageUser.php">Manage User(s)</a></h3></li>
                <?php else: ?>              
                  <li><h3><a href="login.php">Login</a></h3></li>
                  <li><h3><a href="register.php">Register</a></h3></li>
                <?php endif; ?>
            </ul>
        </div>

        <!-- Navigation Links -->
        <div class= "nav_elements">
            <ul class = "nav_left_elements">
                <li><a href="#">Races</a></li>
                <li><a href="#">Photos</a></li>
                <li><a href="#">Shop</a></li>  
            </ul>
        </div>
    
        <div class = "contain">
            <div id = "posts_bar">
                <h3>Post</h3>
                <p>postem ipsum conteosnbga in justo.</p>
                <h3>Post</h3>
                <p>postem ipsum conteosnbga in justo.</p>
                <h3>Post</h3>
                <p>postem ipsum conteosnbga in justo.</p>
                <h3>Post</h3>
                <p>postem ipsum conteosnbga in justo.</p>
                <h3>Post</h3>
                <p>postem ipsum conteosnbga in justo.</p>
                <h3>Post</h3>
                <p>postem ipsum conteosnbga in justo.</p>
                <h3>Post</h3>
                <p>postem ipsum conteosnbga in justo.</p>
                <h3>Post</h3>
                <p>postem ipsum conteosnbga in justo.</p>
                <h3>Post</h3>
                <p>postem ipsum conteosnbga in justo.</p>
                <h3>Post</h3>
                <p>postem ipsum conteosnbga in justo.</p>
                <h3>Post</h3>
                <p>postem ipsum conteosnbga in justo.</p>
                <h3>Post</h3>
                <p>postem ipsum conteosnbga in justo.</p>
                <h3>Post</h3>
                <p>postem ipsum conteosnbga in justo.</p>
                <h3>Post</h3>
                <p>postem ipsum conteosnbga in justo.</p>
            </div>
            <div id = "main_content">
                <img src="images/marathon_banner_updated.png" style="width:100%">
                <h1>Hello World</h1>
                <p>
            
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ultricies laoreet ligula eget dapibus. Phasellus dignissim sagittis justo nec faucibus. Vestibulum vel tincidunt metus. In volutpat volutpat massa, a pharetra nisi laoreet ut. Aliquam accumsan tempus augue. Integer ac ante in lacus egestas ultricies non in eros. Morbi lacinia, dui interdum vulputate varius, ipsum ligula facilisis tortor, at tempus tortor tellus a lacus. Donec semper faucibus tincidunt. Morbi non justo eu ligula lacinia ullamcorper at non purus. Aliquam erat volutpat. Aenean vestibulum urna porta, varius nisl sit amet, tristique ipsum. Nullam aliquet malesuada ante, ac dapibus erat varius a. Curabitur arcu neque, auctor non consectetur scelerisque, imperdiet ut massa. Vivamus maximus lacus felis, id rhoncus augue varius nec. Curabitur id massa dolor.

            In tellus ipsum, cursus at aliquam in, placerat quis odio. Nam eros nisi, consectetur vel ipsum sed, pretium pharetra ante. Duis quis nunc ut magna blandit faucibus. Proin vitae justo at ligula sagittis suscipit. Sed hendrerit ultricies dolor, in ullamcorper dui aliquam vitae. Vivamus viverra, sem pharetra fringilla commodo, quam odio rhoncus lacus, et bibendum ante nisi et leo. Maecenas commodo ex imperdiet sagittis pretium. Integer sapien libero, accumsan nec euismod nec, consectetur vel lorem. In lacus arcu, blandit et molestie at, malesuada a orci. Sed auctor urna velit, vitae condimentum nibh scelerisque sed. Mauris accumsan dapibus faucibus. Maecenas convallis, mauris quis facilisis pulvinar, leo dui vehicula massa, non malesuada lorem dolor a urna. Phasellus non lorem pulvinar, venenatis diam in, congue mauris. Nulla facilisi. Donec vulputate imperdiet eros vitae sagittis.
            
            Phasellus eu nibh ma

                </p>

                
            </div>
        </div>

    </body>
</html>