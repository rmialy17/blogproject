

 <?php
            //-----------anti csrf----------//
session_start();
//On va vérifier :
//Si le jeton est présent dans la session et dans le formulaire
if(isset($_SESSION['comment_token']) && isset($_SESSION['comment_token_time']) && isset($_POST['comment_token']))
{
    
    //Si le jeton de la session correspond à celui du formulaire
    if($_SESSION['comment_token'] === $_POST['comment_token'])
    {
        //On stocke le timestamp qu'il était il y a 15 minutes
        $timestamp_ancien = time() - (15*60);
        //Si le jeton n'est pas expiré
        if($_SESSION['comment_token_time'] >= $timestamp_ancien)
        {
            
            if (isset($_POST['comments'])) {
        $position_arobase = strpos($_POST['email'], '@');
        if ($position_arobase === false)
            echo '<p>Votre email doit comporter un arobase.</p>';
        else {
            $retour = mail('mialy.razaf@gmail.com', $_POST['firstname'].' '. $_POST['name'],   $_POST['comments'], 'From: ' . $_POST['email']);
            if($retour)
                echo '<p>Votre message a été envoyé.</p>';
            else
                echo '<p>Erreur.</p>';
        }
    }

    ini_set("SMTP", "smtp.free.fr");
        }
    }
}
else echo'erreur';

    ?>

   