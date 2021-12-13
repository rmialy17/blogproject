<?php $this->title = "Inscription"; 

               //-----anti csrf-----//

//On démarre les sessions
if (session_status() === PHP_SESSION_NONE) {
session_start();}
//On génére un jeton totalement unique (c'est capital :D)
$register_token = bin2hex(random_bytes(32));
//Et on le stocke
$_SESSION['register_token'] = $register_token;
//On enregistre aussi le timestamp correspondant au moment de la création du token
$_SESSION['register_token_time'] = time();


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

                            <h7 class="section-heading">INSCRIVEZ-VOUS</h7>
                            <div class="item-metas text-muted mb30 white">
    
    <form method="post" action="../public/index.php?route=register">
        <label for="pseudo" id="logincolor">Pseudo</label><br>
        <input type="text" class="logincolor2"id="pseudo" name="pseudo" value="<?= isset($post) ? htmlspecialchars($post->get('pseudo')) : '' ?>"><br>
        <?= isset($errors['pseudo']) ? $errors['pseudo'] : ''?>
        <label for="password"id="logincolor">Mot de passe</label><br>
        <input type="password" class="logincolor2" id="password" name="password" value="<?= isset($post) ? htmlspecialchars($post->get('password')) : ''; ?>"><br>
        <?= isset($errors['password']) ? $errors['password'] : ''?>
        <input type="hidden" class="form-control" name="register_token" id="register_token" value="<?php
                    //Le champ caché a pour valeur le jeton
                     echo $register_token;?>"/>
        <br><input type="submit" class="logincolor2" value="S'inscrire" id="submit" name="submit">
    </form>
  
     <br><p><span class="meta-item" ><i class="pe-icon pe-7s-folder"id="logincolor"></i><a href="../public/index.php?route=login"><strong> Déjà inscrit ? </strong><span class="meta-item" id="logincolor">Connectez-vous</span></span></a></p>
         <p><span class="meta-item"><i class="pe-icon pe-7s-ticket"></i><a href="../public/index.php?route=home"><span> Retour à l'accueil</a></span></span></p>
</div>
</section>