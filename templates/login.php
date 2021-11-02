<?php $this->title = "Connexion" ?>

<!-- 
        <section class="dark-wrapper opaqued parallax" data-parallax="scroll"data-image-src="../templates/assets/img/bg/bg2.jpg" data-speed="0.7">
            <div class="section-inner text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 mt30 wow">-->
                            <h4 class="section-heading">Decouvrez les posts</h4>
                            <div class="item-metas text-muted mb30 white"> 

      <div class="message_erreur" style="'text-align : center';" >

        <?= $this->session->show('error_login')?>
        <?= $this->session->show('need_login');?>
     </div>
          <h2><p>Connectez-vous</h2></p> 
        <form method="post" action="../public/index.php?route=login">
        <label for="pseudo">Pseudo</label><br>
        <input type="text" id="pseudo" name="pseudo" value="<?= isset($post) ? htmlspecialchars($post->get('pseudo')) : '';?>" style="color:black;"><br>
        <label for="password">Mot de passe</label><br>
        <input type="password" id="password" name="password"style="color:black;"><br>
        <br><input type="submit" style="color: black;"value="Connexion" id="submit" name="submit">
        </form>
           <p><span class="meta-item"><i class="pe-icon pe-7s-folder"></i><a href="../public/index.php?route=register"> Pas encore inscrit ? </a><span>C'est par ici</span></span></p>
         <p><span class="meta-item"><i class="pe-icon pe-7s-ticket"></i><a href="../public/index.php"><span> Retour à l'accueil</a></span></span></p>
    
 
  
    </div>
  

   




