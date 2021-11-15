<?php $this->title = "Connexion" ?>

 
        <section class="connexion">
            <div class="section-inner text-center"style="background-size:cover;margin:0;padding: 0;">
                <div class="container" >
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 mt30 wow">

                            <h7 class="section-heading">CONNECTEZ-VOUS</h7>
                            <div class="item-metas text-muted mb30 white"> 

      <div class="message_erreur" style="text-align : center;color:red;" >

        <?= $this->session->show('error_login')?>
        <?= $this->session->show('need_login');?>
     </div>
          <h1 class="titre" style="color:grey;"><p>Entrez votre identifiant et votre mot de passe</h1></p> 
        <form method="post" action="../public/index.php?route=login">
        <label for="pseudo" style="color:#303030;">Identifiant</label><br>
        <input type="text" id="pseudo" name="pseudo" value="<?= isset($post) ? htmlspecialchars($post->get('pseudo')) : '';?>" style="color:black;"><br>
        <label for="password" style="color:#303030;">Mot de passe</label><br>
        <input type="password" id="password" name="password"style="color:black;"><br>
        <br><input type="submit" style="color: black;"value="Connexion" id="submit" name="submit">
        </form>
           <br><p><span class="meta-item" ><i class="pe-icon pe-7s-folder"style="color:#303030;"></i><a href="../public/index.php?route=register"><strong> Pas encore inscrit ? </strong><span class="meta-item" style="color:#303030;">C'est par ici</span></span></a></p>
         <p><span class="meta-item"><i class="pe-icon pe-7s-ticket"></i><a href="../public/index.php?route=home"><span> Retour aux blog posts</a></span></span></p>
    
 
                        
                         </div> 
                    </div> 
                </div>
                      
            </div>
        </section>
  

   




