<?php
include 'header.php';
?>
<form method="post" action="thanks.php">
    <div>
      <label  for="prénom">First name</label>
      <input  type="text"  id="prénom"  name="user_firstname" placeholder="Enter your first name" required>
    </div>
    <div>
      <label  for="nom">Last name</label>
      <input  type="text" id="nom"  name="user_lastname" placeholder="Enter your last name" required>
    </div>
    <div>
      <label  for="courriel">Mail</label>
        <input  type="email"  id="courriel"  name="user_email" placeholder="Enter your mail address" required>
    </div>
    <div>
      <label  for="phoneNumber">Phone number</label>
        <input  type="phoneNumber"  id="phoneNumber"  name="user_phone" placeholder="Enter your phone number" required>
    </div>
    <div>
      <label  for="message">Message</label>
      <textarea  id="message"  name="user_message" placeholder="  Enter your message" required></textarea>
    </div>
    <div class="checkbox-rules">
      <input type="checkbox" id="rulesAccept" required>
      <span class="rulesText">By submitting this form, I agree that the information entered in this form is used, 
        exploited, processed to allow me to contact you.</span>.
      </div>
      <div  class="button">
      <button  class="send-button" type="submit">Send your message</button>
    </div>
  </form>
<?php
include 'footer.php';
?>