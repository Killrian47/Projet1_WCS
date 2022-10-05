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
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["user_firstname"])) {
            echo ($fNameErr = "Votre prénom est nécessaire");
        } else if (empty($_POST["user_lastname"])) {
            echo ($lNameErr = "Votre nom est nécessaire");
        } else if ((empty($_POST["user_email"]))||(!filter_var($_POST["user_email"], FILTER_VALIDATE_EMAIL))) {
            echo ($emailErr = "Une adresse mail valide est nécessaire");
        } else if (empty($_POST["user_phone"])) {
            echo ($phoneErr = "Votre numéro de télépgone est nécessaire");
        } else if (empty($_POST["user_message"])) {
            echo ($message = "Veuillez entrer votre message");
        } else {
            $fName = test_input($_POST["user_firstname"]);
            $email = test_input($_POST["user_email"]);
            $lName = test_input($_POST["user_lastname"]); 
            $phone = test_input($_POST["user_phone"]);
            $message = test_input($_POST["user_message"]);
            echo ("<p>Merci $fName $lName pour votre message. 
            Je vous contacterai aussitôt que possible par courriel à l'adresse $email ou par téléphone au numéro $phone.
            <br><br>
            Votre message :
            <br>
            $message</p>");
        }
      }
      ?>
      </div>
</body>
<?php
include 'footer.php';
?>