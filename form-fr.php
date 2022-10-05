<?php
include 'header.php';
?>
<form method="post" action="thanks-fr.php">
    <div>
      <label  for="prénom">Prénom</label>
      <input  type="text"  id="prénom"  name="user_firstname" placeholder="Entrez votre prénom" required>
    </div>
    <div>
      <label  for="nom">Nom</label>
      <input  type="text" id="nom"  name="user_lastname" placeholder="Entrez votre nom" required>
    </div>
    <div>
      <label  for="courriel">Mail</label>
        <input  type="email"  id="courriel"  name="user_email" placeholder="Entrez votre adresse mail" required>
    </div>
    <div>
      <label  for="phoneNumber">Numéro de téléphone</label>
        <input  type="phoneNumber"  id="phoneNumber"  name="user_phone" placeholder="Entrez votre numéro de téléphone" required>
    </div>
    <div>
      <label  for="message">Message</label>
      <textarea  id="message"  name="user_message" placeholder="Entrez votre message" required></textarea>
    </div>
    <div>
      <input type="checkbox" id="rulesAccept" required>En soumettant ce formulaire, je accepte que les informations saisies dans ce formulaire soient utilisées, exploitées, traitées pour permettre de me recontacter, pour m’envoyer la newsletter, dans le cadre de la relation commerciale qui découle de cette demande de devis.
</div>
      <div  class="button">
      <button  class="send-button" type="submit">Envoyer le message</button>
    </div>
  </form>
<?php
include 'footer.php';
?>