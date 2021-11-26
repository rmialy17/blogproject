<?php $this->title = "Inscription"; ?>

<section class="connexion">
            <div class="section-inner text-center"style="background-size:cover;margin:0;padding: 0;">
                <div class="container" >
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 mt30 wow">

                            <h7 class="section-heading">INSCRIVEZ-VOUS</h7>
                            <div class="item-metas text-muted mb30 white"> 

      <div class="message_erreur" style="text-align : center;color:red;" >
         <?= $this->session->show('error_register')?>
    </div>
    
    <form method="post" action="../public/index.php?route=register">
        <label for="pseudo"style="color:#303030;">Pseudo</label><br>
        <input type="text" id="pseudo" name="pseudo" value="<?= isset($post) ? htmlspecialchars($post->get('pseudo')) : '' ?>"style="color:black;"><br>
        <?= isset($errors['pseudo']) ? $errors['pseudo'] : ''?>
        <label for="password"style="color:#303030;">Mot de passe</label><br>
        <input type="password" id="password" name="password" value="<?= isset($post) ? htmlspecialchars($post->get('password')) : ''; ?>"style="color:black;"><br>
        <?= isset($errors['password']) ? $errors['password'] : ''?>
        <br><input type="submit" value="S'inscrire" id="submit" name="submit" style="color: black;">
    </form>
  
     <br><p><span class="meta-item" ><i class="pe-icon pe-7s-folder"style="color:#303030;"></i><a href="../public/index.php?route=login"><strong> Déjà inscrit ? </strong><span class="meta-item" style="color:#303030;">Connectez-vous</span></span></a></p>
         <p><span class="meta-item"><i class="pe-icon pe-7s-ticket"></i><a href="../public/index.php?route=home"><span> Retour à l'accueil</a></span></span></p>
</div>
</section>