<!-- Header -->
<?php
include('header.php');

      // Database Information
        $servername = "52.7.250.96";
        $username = "web277_sangalinem";
        $password = "jaRk781?";
        $dbname = "web277_sangalinem";
        
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        
        // Check connection
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
        // Values to input into table
              $name =  $_REQUEST['name'];
              $email = $_REQUEST['email'];
              $comment =  $_REQUEST['comment'];
              $gender = $_REQUEST['gender'];
              $age = $_REQUEST['age'];
              date_default_timezone_set("America/New_York");
              $created_on = date('Y-m-d H:i:s');
        // prepare and bind
              $stmt = $conn->prepare("INSERT INTO share_something (fullname, email, comment, gender, age, created_on) VALUES (?, ?, ?, ?, ?, ?)");
              $stmt->bind_param("ssssis", $name, $email, $comment, $gender, $age, $created_on);

        if($stmt->execute()) {
echo "<h1>Here is the information you submitted:</h1>";
            echo "<ul>";
            echo "<li>";
            echo $name;
            echo "</li>";
            echo "<li>";
            echo $email; 
            echo "</li>";
            echo "<li>";
            echo $comment; 
            echo "</li>";
            echo "<li>";
            echo $gender; 
            echo "</li>";
            echo "<li>";
            echo $age;
            echo "</li>";
            echo "<li>";
            echo $created_on;
            echo "</li>";
            echo "<br />";
            echo "</ul>";
        } else {
            echo "Form was not submitted.";
        } 
        $stmt->close();
        $conn->close();

    

?>

<!-- Header End -->
<!-- Page Content -->
<div class="find-us-image">
    <div class="hero-text">
        <h1>Here's a map</h1>
        <p>So you can find us, of course</p>
    </div>
</div>

<div id="contact-icon">
        <img src="images/message.svg" alt="contact" height="50"
            width="50" id="contact-image"><br>
            <span class="hover-text"><b>Click here to send us a message!</b></span>
      </div>
    <div id="contact-popup">
        <form class="contact-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contact-form"
            method="get" enctype="multipart/form-data">
            <span class="close-form">&times;</span>
            <h1>Want to share  something?</h1>
            <div>
                <div>
                    <label>Name: </label><span id="name-info"
                        class="info">&nbsp;&nbsp;</span><span class="error">
                </div>
                <div>
                    <input placeholder="Enter your full name" type="text" id="userName" name="name"
                        class="inputBox" tabindex="1" />
                </div>
            </div>
            <div>
                <div>
                    <label>Email: </label><span id="email-info"
                        class="info">&nbsp;&nbsp;</span><span class="error">
                </div>
                <div>
                    <input placeholder="Enter your email address" type="text" id="email" name="email"
                        class="inputBox" tabindex="2"/>
                </div>
            </div>
            <div>
                <div>
                    <label>Comment: </label><span id="comment-info"
                        class="info"></span>
                </div>
                <div>
                    <textarea placeholder="Type your message here" id="comment" name="comment"
                        class="inputBox" tabindex="3"></textarea>
                </div>
            </div>
            <div>
                <div>
                    <label>Gender: </label><span id="gender-info"
                        class="info"></span><br>
                </div>
                <div>
                        <input type="radio" tabindex="4" name="gender" value="female">Female &nbsp;&nbsp;
                        <input type="radio" tabindex="5" name="gender" value="male">Male &nbsp;&nbsp;
                        <input type="radio" tabindex="6" name="gender" value="other">Other &nbsp;&nbsp;
                        <br><br>
                        <span class="error">
                </div>
            </div>
            <div>
                <div>
                    <label>Age: </label><span id="age-info"
                    class="info"></span><br>
                </div>
                <div>
                    <input type="number" tabindex="7" min="0" max="120" name="age" value="" />
                    <br>
                    <span class="error"><?php echo $ageErr;?></span>
                </div>
            </div>
            <div>
                <input type="submit" id="submit" name="submit" value="Submit" tabvalue="8"/>
            </div>
            <br>
        </form>
    </div>
    <script>
      var modal = document.getElementById("contact-popup");
        var span = document.getElementsByClassName("close-form")[0];

        span.onclick = function() {
        modal.style.display = "none";
        }
    </script>


<table>
    <tr>
        <th>Location:</th>
        <td>A fake location</td>
    </tr>
    <tr>
        <th>Phone:</th>
        <td>(000) 111 - XXXX</td>
    </tr>
    <tr>
        <th>Email:</th>
        <td>afakeemail@fakeemail.email</td>
    </tr>
</table>

  <!--Contact Form-->
  <style>
      /* Form */
div#success {
    text-align: center;
    box-shadow: 1px 1px 5px #455644;
    background: #bae8ba;
    padding: 10px;
    border-radius: 3px;
    margin: 0 auto;
    width: 350px;
}

.inputBox {
    width: 100%;
    margin: 5px 0px 15px 0px;
    border: #dedede 1px solid;
    box-sizing: border-box;
    padding: 15px;
}

#contact-popup {
    position: relative;
    display: none;
    color: #676767;
}

.contact-form {
    width: 400px;
    margin: 0px;
    background-color: white;
    font-family: 'Fira Sans', sans-serif;
    position: relative;
    left: 50%;
    top: 50%;
    margin-left: -210px;
    margin-top: -255px;
    box-shadow: 1px 1px 5px #444444;
    padding: 20px 40px 40px 40px;
}


#contact-icon {
    padding: 10px 5px 5px 12px;
    width: 600px;
    cursor: pointer;
    margin: 60px auto;
}

#contact-icon .hover-text {
  visibility: hidden;
  width: 250px;
  text-align: center;
  padding: 5px 0;
  position: absolute;
  z-index: 1;
}

#contact-icon:hover .hover-text {
  visibility: visible;
}

.info {
    color: #d30a0a;
    letter-spacing: 2px;
    padding-left: 5px;
}

#submit {
    background-color: #443850;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
    opacity: 0.9;
}

    #submit:hover {
        opacity:1;
    }

#contact-popup h1 {
    font-weight: normal;
    text-align: center;
    margin: 10px 0px 20px 0px;
}

.input-error {
    border: #e66262 1px solid;
}

.close-form {
    color: #443850;
    float: right;
    font-size: 50px;
    font-weight: bold;
    cursor: pointer;
  }

  .close-form:hover,
    .close-form:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
        }
</style>
<!-- Footer -->
<?php 
include('footer.php'); 
?>
<!-- End Footer -->