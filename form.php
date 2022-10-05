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
        <input  type="phoneNumber"  id="phoneNumber"  name="user_phone" placeholder="Enter your phone nomber" required>
    </div>
    <div>
      <label  for="message">Message</label>
      <textarea  id="message"  name="user_message" placeholder="Enter your message" required></textarea>
    </div>
    <div>
      <input type="checkbox" id="rulesAccept" required>En soumettant ce formulaire, je accepte que les informations saisies dans ce formulaire soient utilisées, exploitées, traitées pour permettre de me recontacter, pour m’envoyer la newsletter, dans le cadre de la relation commerciale qui découle de cette demande de devis.
</div>
      <div  class="button">
      <button  class="send-button" type="submit">Send your message</button>
    </div>
  </form>
<?php
include 'footer.php';
?>