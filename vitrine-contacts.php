<!DOCTYPE html>

 <html>

     <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  <head>
 <link rel="stylesheet" href="vitrine.css">

  <title> Vitrine - Contacts </title>
 </head>

<?php

$nav_en_cours = 'contacts';

include 'header.php';

?>

 <body>

     <h2> CONTACTS</h2>

     <form action="/ma-page-de-traitement" method="post">
         <div>
             <label for="name">Nom :</label>
             <input type="text" id="name" name="user_name">
         </div>
         <div>
             <label for="mail">e-mail :</label>
             <input type="email" id="mail" name="user_mail">
         </div>
         <div>
             <label for="msg">Message :</label>
             <textarea id="msg" name="user_message"></textarea>
         </div>

         <div class="button">
             <a button type="submit">Envoyer le message </a></button>
         </div>

     </form>


 </body>

 <?php

include 'footer.php';

?>

 </html> 