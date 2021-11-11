<?php $this->title = 'Modifier mot mot de passe'; ?>


        <section class="connexion">
            <div class="section-inner text-center"style="background-size:cover;margin:0;padding: 0;">
                <div class="container" >
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 mt30 wow">

                            <h7 class="section-heading"><?= $this->session->getUserInfo('pseudo'); ?></h7>
                            <div class="item-metas text-muted mb30 white"> 

     </div>
        <h1 class="titre" style="color:grey;"><p>Entrez votre nouveau mot de passe, il sera mis à jour</h1></p> 
        <form method="post" action="../public/index.php?route=updatePassword">
        <br><label for="password">Nouveau mot de passe</label><br>
        <input type="password" id="password" name="password"><br>
        <?= isset($errors) ? $errors['password'] : ''?>
        <br><input type="submit" style="color: black;"value="Mettre à jour" id="submit" name="submit">
        </form>
        
         <br><p><span class="meta-item"><i class="pe-icon pe-7s-ticket"></i><a href="../public/index.php?route=home"><span> Retour aux blog posts</a></span></span></p>
    
 
                        
                         </div> 
                    </div> 
                </div>
                      
            </div>
        </section>