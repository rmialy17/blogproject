<?php $this->title = "Connexion";

                    //-----anti csrf-----//

//On démarre les sessions
if (session_status() === PHP_SESSION_NONE) {
session_start();}
//On génére un jeton totalement unique (c'est capital :D)
$login_token = bin2hex(random_bytes(32));
//Et on le stocke
$_SESSION['login_token'] = $login_token;
//On enregistre aussi le timestamp correspondant au moment de la création du token
$_SESSION['login_token_time'] = time();


            //----------fin anti csrf----------//

?>



 <head>
<link href="../templates/assets/css/blog.css" rel="stylesheet" type="text/css">
</head>

        <section class="connexion">
            <div class="section-inner text-center"id="addpost">
                <div class="container" >
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 mt30 wow">

                            <h7 class="section-heading">CONNECTEZ-VOUS</h7>
                            <div class="item-metas text-muted mb30 white"> 

      <div class="errormessage">

        <?= $this->session->show('error_login')?>
        <?= $this->session->show('need_login');?>
     </div>
          <h1 class="titre" id="loginh1"><p>Entrez votre identifiant et votre mot de passe</h1></p> 
        <form method="post" action="../public/index.php?route=login">
        <label for="pseudo" id="logincolor">Identifiant</label><br>
        <input type="text" class="logincolor2"id="pseudo" name="pseudo" value="<?= isset($post) ? htmlspecialchars($post->get('pseudo')) : '';?>"><br>
        <label for="password" id="logincolor">Mot de passe</label><br>
        <input type="password" class="logincolor2"id="password" name="password"><br>
        <input type="hidden" class="form-control" name="login_token" id="login_token" value="<?php
                    //Le champ caché a pour valeur le jeton
                     echo $login_token;?>"/>
        <br><input type="submit" class="logincolor2" value="Connexion" id="submit" name="submit">
        </form>
           <br><p><span class="meta-item" ><i class="pe-icon pe-7s-folder" id="logincolor"></i><a href="../public/index.php?route=register"><strong> Pas encore inscrit ? </strong><span class="meta-item" id="logincolor">C'est par ici</span></span></a></p>
         <p><span class="meta-item"><i class="pe-icon pe-7s-ticket"></i><a href="../public/index.php?route=home"><span> Retour aux blog posts</a></span></span></p>
    
 
                        
                         </div> 
                    </div> 
                </div>
                      
            </div>
        </section>
  

   




