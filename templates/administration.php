<?php $this->title = 'Administration'; ?>

<?= $this->session->show('delete_article'); ?>
<?= $this->session->show('unflag_comment'); ?>
<?= $this->session->show('delete_comment'); ?>
<?= $this->session->show('delete_user'); ?>
<?=$this->session->show('update_role');?>


  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<link href="../templates/assets/css/admin2.css" rel="stylesheet"> 
<link href="../templates/assets/css/blog.css" rel="stylesheet" type="text/css">

<!-- fichier datatables -->

<link rel="stylesheet" type="text/css" href="../templates/assets/DataTables/media/css/jquery.dataTables.min.css">

    <script type="text/javascript" language="javascript" class="init"></script>
    
   <!------ Include the above in your HEAD tag ----------> 



<p class="mt30"><a href="../public/index.php?route=home"class="btn btn-primary btn-theme page-scroll"id="admin1">Retour aux Blog Posts</a></p>    

<body>

<div class="container">
    <div class="row">

        <section class="content">
           
            <div class="col-md-8 col-md-offset-2">
               
                    <div class="panel-body">
                        <div class="pull-right">
                          <div class="btn-group">

                                <a href="#posts"><button type="button" class="btn btn-success">Gestion des Posts</button></a>
                                <a href="#comments"><button type="button" class="btn btn-warning" data-target="pendiente">Gestion des Commentaires</button></a>
                                <a href="#users"><button type="button" class="btn btn-danger btn-filter" data-target="cancelado">Données Utilisateurs</button></a>
                                <input type="hidden"class="btn btn-default btn-filter" data-target="all">
                            </div>

                        </div>
</div>

                <!-- </div> -->


            </div>


            
        </section>
        
    </div>
</div>  
                        

                            <!-------------Table 1--------------->

<div class="container" id="posts">
    <div class="row">

        <section class="content">
            <center><h2>Gestion des Blog Posts</h2></center>
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="pull-right">
                        

                    <div class="table-container" >
                            <table id="tab"class="table table-filter"id="poststab">
                                

                                 <thead>

                                    <tr>
                                        <td><h5 class="box-title">Gestion des Blog Posts</h5></td></tr>

                                    <tr data-status="pagado">  

                                        <td id="poststab2">Titre</td>
                                        <td id="poststab3">Auteur</td>
                                        <td id="poststab4">Date/Heure</td>
                                        <td id="poststab5">Actions</td>
                                    </tr>  
                                   </thead> 
                                   <tbody> 
                                    
                                          <?php
                                    foreach ($articles as $article)
                                    {
                                        ?> 
                                        <tr data-status="pagado">    
                                        <td>
                                            <div class="media">
                                                <div class="media-body">
                                                    <h4><a class="title"href="../public/index.php?route=article&amp;articleId=<?= htmlspecialchars($article->getId())?>"><?= htmlspecialchars($article->getTitle()); ?>
                                                    </a></h4>
                                                    <p class="summary"><?= htmlspecialchars($article->getChapo());?></p></td>
                                                    <td><span class="pull-left"><?= htmlspecialchars($article->getAuthor());?></span></td>
                                                    <td><?= htmlspecialchars($article->getCreatedAt());?></td>
                                                     <td>
                                                        
                <a href="../public/index.php?route=editArticle&amp;articleId=<?= $article->getId(); ?>">Modifier</a>
                <a href="../public/index.php?route=deleteArticle&amp;articleId=<?= $article->getId(); ?>">Supprimer</a>
            </td>
                                                </div>
                                            </div>
                                        <!-- </td> -->
                                    </tr>
                                <?php
                                }
                                ?>
                                 </tbody>
                        </table>
                    </div>

            </div>
                </div>
            
         

                </div>

<div class="row paging text-center">
                <p><a class="btn btn-primary mt30" id="commentsmodal" href="#" >Haut de page</a>
                </p><br>
            </div>
            </div>


            
        </section>
           
    </div>
</div>  

        <!-----------------------Table 2------------------------>

                <!---------------modal-------------->
<div class="comment-modal" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Contenu du commentaire</h4>
            </div>
            <div class="modal-body">
                <p>Corps d!e la modale</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-inverse" type="button" onclick="closeModal()"><i class="icon icon-times icon-lg"></i> Fermer</button>
            </div>
        </div>
    <!-- </div> -->
</div>
            <!-----------------end modal-------------->

<div class="container" id="comments">
    <div class="row">

        <section class="content">
            <center><h2>Gestion des commentaires</h2></center>
            <div class="col-md-8 col-md-offset-2">
                <div class="panel ">
                    <div class="panel-body">
                        <div class="pull-right">
                            <div class="btn-group">

                                 <p><a href="#posts"><button type="button" class="btn btn-success">Gestion des Posts</button></a>
                                <a href="#comments"><button type="button" class="btn btn-warning" data-target="pendiente">Gestion des Commentaires</button></a>
                                <a href="#users"><button type="button" class="btn btn-danger" data-target="cancelado">Données Utilisateurs</button></a>
                                <input type="hidden"class="btn btn-default btn-filter" data-target="all"></p><br>
                            </div>

                        </div>

                    <div class="table-container">

                        <table id="tab2"class="table table-filter" id="commentstab">
                            <!-- <tbody> -->
                                <thead>
                                  
                                        <tr><td><h5 class="box-title">Gestion des commentaires</h5></td></tr>

                                    <tr data-status="pendiente">   
                                        <td id="commentstab2">Auteur du commentaire</td>
                                        <td id="commentstab3">Réf.</td>
                                        <td id="commentstab4">Message</td>
                                        <td id="commentstab5">Date/Heure</td>
                                       <td id="commentstab6">Réf.Article </td>
                                        <td id="commentstab7">Actions</td>
                                    </tr>
                                </thead> 
                                   <tbody>
                                    <?php

                                foreach ($comments as $comment)
                                { 
                                    ?> 
                                    <tr data-status="pendiente">
                                        <td>
                                            <div class="media">
                                                <div class="media-body">
                                                    
                                                    <h4 class="title">
                                                        <?= htmlspecialchars($comment->getPseudo());?>
                                                        <!-- <?= $this->session->getUserInfo('id') ?> -->
                                                    </h4> 
                                                </td>
                                                    <td><?= htmlspecialchars($comment->getId());?></td>
                                                    <p class="summary"></p>
                                       
                                                <td> 
                <a href="#commentsmodal"><button class="btn btn-primary"type="button"data-modal="popup_<?= htmlspecialchars($comment->getId()) ;?>" onclick="showModal(<?=htmlspecialchars($comment->getId())?>)"><i class="icon icon-check icon-lg" ></i> Voir le commentaire</button></a>
           

              <!-------------Modal content------------->

                   
                <input type="hidden" id="popup_<?= htmlspecialchars($comment->getId());?>"value="<?= substr(htmlspecialchars($comment->getContent()), 0, 150);?>">
          
                    <!----------------end modal content-------------->
                </td>

                                                 <td><?= htmlspecialchars($comment->getCreatedAt());?></td>
                                                 <td><center><a href="../public/index.php?route=article&amp;articleId=<?= htmlspecialchars($comment->getArticleId());?>"><?= htmlspecialchars($comment->getArticleId());?></a></center></td>
                                                    <td>
            <a href="../public/index.php?route=unflagComment&commentId=<?= $comment->getId(); ?>">Autoriser</a>
            <a href="../public/index.php?route=deleteComment&commentId=<?= $comment->getId(); ?>">Supprimer</a>
        </td>
                                                </div>
                                            </div>
                                        <!-- </td> -->
                                    </tr>
                                        <?php
                                }
                                ?>
                           </tbody> 

                      </table>
                    </div>


            </div>
                </div>
            
            <div class="row paging text-center">
                <br><p><a class="btn btn-primary mt30" href="#" >Haut de page</a>
                </p>
                <br><p></p>
            </div>

                </div>


            </div>


            
        </section>
        
    </div>
</div> 



                <!---------------------Table 3-------------->

<div class="container"id="users">
    <div class="row">

        <section class="content">
            <center><h2>Données utilisateurs</h2></center>
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="pull-right">
                            <div class="btn-group">
                               
                                 <p><a href="#posts"><button type="button" class="btn btn-success">Gestion des Posts</button></a>
                                <a href="#comments"><button type="button" class="btn btn-warning" data-target="pendiente">Gestion des Commentaires</button></a>
                                <a href="#users"><button type="button" class="btn btn-danger" data-target="cancelado">Données Utilisateurs</button></a>
                                <input type="hidden"class="btn btn-default btn-filter" data-target="all"></p><br>
                            </div>

                        </div>

                    <div class="table-container">
                         <table id="tab3"class="table table-filter"id="userstab">

                           
                                <thead>
                                   
                                        <tr><td><h5 class="box-title">Gestion des users</h5></td></tr>

                             <!-- <tbody>             -->
                                    <tr data-status="cancelado"> 
                                        <td id="userstab2">Pseudo de l'utilisateur</td>
                                        <td id="userstab3">Référence</td>
                                        <td id="userstab4">Date création</td>
                                        <td id="userstab5">Rôle</td>
                                        <td id="userstab6">Actions</td>
                                    </tr>    
                                </thead>  
                                <tbody>
                                    <?php
                                    foreach ($users as $user)
                                    {
                                    ?>
                                    <tr data-status="cancelado">
                                        <td>
                                            <div class="media">
                                                <div class="media-body">
                                                    <h4 class="title"><?= htmlspecialchars($user->getPseudo());?>
                                                    </h4>
                                                    <p class="summary"></p>  
                                                    </td>   
                                                    <td><center><?= htmlspecialchars($user->getId());?></center></td>
                                                    <td><?= htmlspecialchars($user->getCreatedAt());?></td>
                                                    <td><?= htmlspecialchars($user->getRole());?></td>
                                      
                                            <td>
                                                                           <?php
                                                if ($user->getRole() !== 'admin') {
                                                    ?>
                                                    <a href="../public/index.php?route=deleteUser&userId=<?= $user->getId();?>">Supprimer</a><br>
                                                   <a href="../public/index.php?route=updateRole&userId=<?= $user->getId();?>">Modifier role</a>
                                                <?php
                                                } else {
                                                    ?>
                                                   Actions impossibles
                                                <?php
                                                }
                                                ?> 
                                            </td>
                                        </div>
                                    </div>
                                <!-- </td> -->
                            </tr>
                            <?php
                        }
                        ?>
                
                 
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            
            <div class="row paging text-center">
                <br><p><a class="btn btn-primary mt30" href="#" >Haut de page</a>
                </p>
                <br><p></p>
            </div>

                </div>


            </div>


            
        </section>
        
    </div>
</div>  

 <!-----js----------->

    <script src="../templates/assets/js/admin.js"></script>

    <script type="text/javascript" src="../templates/assets/DataTables/media/js/jquery.js"></script>
<script type="text/javascript" src="../templates/assets/DataTables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../templates/assets/js/table.js"></script>
<script type="text/javascript" src="../templates/assets/js/admin2.js"></script>

 </body>   