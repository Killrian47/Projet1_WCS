<?php
include 'header.php';
?>
<body>
    <?php
function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
?>
<div class="thanks-message">
    <?php
    $errors=[];
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["user_firstname"])) {
            echo ($fNameErr = "Name is required");
        } else if (empty($_POST["user_lastname"])) {
            echo ($lNameErr = "Name is required");
        } else if ((empty($_POST["user_email"]))||(!filter_var($_POST["user_email"], FILTER_VALIDATE_EMAIL))) {
            echo ($emailErr = "A valid email is required");
        } else if (empty($_POST["user_phone"])) {
            echo ($phoneErr = "Phone number is required");
        } else if (empty($_POST["user_message"])) {
            echo ($message = "Message is required");
        } else {
            $fName = test_input($_POST["user_firstname"]);
            $email = test_input($_POST["user_email"]);
            $lName = test_input($_POST["user_lastname"]); 
            $phone = test_input($_POST["user_phone"]);
            $message = test_input($_POST["user_message"]);
            echo ("<p>Thank you $fName $lName for your message. 
            I will contact you as soon as possible via your 
            mail address $email or your phone number $phone.
            <br><br>
            Your message :
            <br>
            $message</p>");
        }
      }
      ?>
      </div>
      <div class="sep"></div>
</body>
<?php
include 'footer.php';
?>