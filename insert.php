<?php
      // Database Information
        $servername = "52.7.250.96";
        $username = "web277_sangalinem";
        $password = "jaRk781?";
        $dbname = "web277_sangalinem";
        
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        
        if(isset($_GET['submit'])) {
            if(!empty($_GET['name']) && !empty($_GET['email']) && !empty($_GET['gender']) && !empty($_GET['age'])) {
        // Values to input into table
              $name =  $_GET['name'];
              $email = $_GET['email'];
              $comment =  $_GET['comment'];
              $gender = $_GET['gender'];
              $age = $_GET['age'];
        // prepare and bind
              $stmt = $conn->prepare("INSERT INTO share_something (fullname, email, comment, gender, age) VALUES (?, ?, ?, ?, ?)");
              $stmt->bind_param("ssssi", $name, $email, $comment, $gender, $age);
              $stmt->execute();

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
            echo $gender; 
            echo "</li>";
            echo "<li>";
            echo $age;
            echo "</li>";
            echo "<br />";
            echo "</ul>";
        } else {
            echo "Form was not submitted.";
        } 
        $stmt->close();
        $conn->close();
    }
}
?>