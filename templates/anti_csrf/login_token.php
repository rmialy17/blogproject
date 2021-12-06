

 <?php
            //-----------anti csrf----------//
if (session_status() === PHP_SESSION_NONE) {
session_start();}
//On va vérifier :
//Si le jeton est présent dans la session et dans le formulaire
if(isset($_SESSION['login_token']) && isset($_SESSION['login_token_time']) && isset($_POST['login_token']))
{
    
    //Si le jeton de la session correspond à celui du formulaire
    if(hash_equals($_SESSION['login_token'], $_POST['login_token']))
    {
        //On stocke le timestamp qu'il était il y a 15 minutes
        $timestamp_ancien = time() - (15*60);
        //Si le jeton n'est pas expiré
        if($_SESSION['login_token_time'] >= $timestamp_ancien)
        {
            
            if (isset($_POST['comments'])) {

                if($retour)
                        echo '';
                else
                        echo '<p>Erreur.</p>'; 
            }
         
        }
    } else echo'erreur';
}

    ?>

   