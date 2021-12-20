<!-- Header -->
<?php
include('header.php');
?>
<!-- Header End -->

    <!-- JavaScript Modal -->
    <div id="popupDiv">
        <span class="close">&times;</span>
        <form action="" class="divform" onload="modalFunction()">
                <h2>Sign-up for our newsletter!</h2>
        
                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" required> 
                <button type="submit" class="modalbtn">Sign Up</button>
          </form>
    </div>

    <script>
        var modal = document.getElementById("popupDiv");
        var span = document.getElementsByClassName("close")[0];

        onload = function() {
        setTimeout(function() { modal.style.display = "block"; }, 3000);
        }

        span.onclick = function() {
        modal.style.display = "none";
        }
    </script>
    <!-- /Javascript Modal -->


<!-- Page Content -->
<div class="hero-image">
    <div class="hero-text">
        <h1>Pseudo Company</h1>
        <p>A delightful experience</p>
    </div>
</div>


<section>
<h1>This is an example of how I've stylized h1 headers</h1>
    <h2>And here is an h2</h2>
    <p>This website is a project website for WEB 277 at WCCC.<br>
    Everything here is fake.<br>
    I used graphics from <a href="https://blush.design/" alt="blush.design">https://blush.design/</a>.</p>
</section>

        <div class="div-container">
             <div class="div-card">
                <h3>Content information</h3>
                <img class="target-img" src="images/chat.png">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>
             <div class="div-card">
                <h3>Content information</h3>
                <img class="target-img" src="images/groupchat.jpg">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>
            <div class="div-card">
                <h3>Content information</h3>
                <img class="target-img" src="images/phone.png">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>
            <div class="div-card">
                <h3>Content information</h3>
                <img class="target-img" src="images/calendar.png">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<?php 
include('footer.php'); 
?>
<!-- End Footer -->