<?php $this->title = 'Administration'; ?>

<?= $this->session->show('delete_article'); ?>
<?= $this->session->show('unflag_comment'); ?>
<?= $this->session->show('delete_comment'); ?>
<?= $this->session->show('delete_user'); ?>
<?=$this->session->show('update_role');?>


  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


    <!-- Custom CSS -->
    <!-- <link href="../templates/assets/css/admin.css" rel="stylesheet"> -->
<link href="../templates/assets/css/admin2.css" rel="stylesheet"> 

<!-- fichier datatables -->

<link rel="stylesheet" type="text/css" href="../templates/assets/DataTables/media/css/jquery.dataTables.min.css">

    <script type="text/javascript" language="javascript" class="init"></script>
    
   <!------ Include the above in your HEAD tag ----------> 



<p class="mt30"><a href="../public/index.php?route=home"class="btn btn-primary btn-theme page-scroll"style="margin-left: 4%;">Retour aux Blog Posts</a></p>    

 <div class="comment-modal" >    
         <div class="closex" onclick="closeModal()">X</div>
          <div class="modalC"></div>
        </div>

<div class="container">
    <div class="row">

        <section class="content">
            <h1>Gestions des données</h1>
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="pull-right">
                            <div class="btn-group">
                                <button type="button" class="btn btn-success btn-filter" data-target="pagado">Posts</button>
                                <button type="button" class="btn btn-warning btn-filter" data-target="pendiente">Commentaires</button>
                                <button type="button" class="btn btn-danger btn-filter" data-target="cancelado">Utilisateurs</button>
                                
                                <button type="button" class="btn btn-default btn-filter" data-target="all">Tout</button>
                            </div>

                        </div>

                        <div class="table-container" >

                            <!-------------Table 1--------------->

                            <table id="tab"class="table table-filter"style="width: 150%;">
                                

                                 <thead>

                                    <tr data-status="pagado">
                                        <td><h5 class="box-title">Gestion des Blog Posts</h5></td></tr>

                                    <tr data-status="pagado">  

                                        <td style="width: 42%;">Titre</td>
                                        <td style="width: 20%;">Auteur</td>
                                        <td style="width: 20%;">Date/Heure</td>
                                        <td style="width: 30%;">Actions</td>
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

                <!-------------Table 2--------------->

       
                    <div class="table-container">

                        <table id="tab2"class="table table-filter" style="width: 150%;">
                            <!-- <tbody> -->
                                <thead>
                                    <tr data-status="pendiente">
                                        <td><h5 class="box-title">Gestion des commentaires</h5></td></tr>

                                    <tr data-status="pendiente">   
                                        <td style="width: 30%;">Auteur du commentaire</td>
                                        <td style="width: 15%;">Réf.</td>
                                        <td style="width: 15%;">Message</td>
                                        <td style="width: 20%;">Date/Heure</td>
                                       <td style="width: 20%;">Réf.Article associé</td>
                                        <td style="width: 40%;">Actions</td>
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
                                       
                                                   <td><div align="center"><button class="popup-button"data-modal="popup_<?= htmlspecialchars($comment->getId()) ;?>" onclick="showModal(<?=htmlspecialchars($comment->getId())?>)" > Voir le commentaire</button></div> 

                          <!----NEW POP UP CONTENT------------->


    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" aria-hidden="true" data-dismiss="modal">×</button>
                <h4 class="modal-title">Titre de la modale</h4>
            </div>
            <div class="modal-body">
                <p>Corps de la modale</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" type="button"><i class="icon icon-check icon-lg"></i> Valide</button>
                <button class="btn btn-inverse" type="button" data-dismiss="modal"><i class="icon icon-times icon-lg"></i> Fermer</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
$('#myModal').modal(options)</script>
                 <!----POP UP CONTENT------------->

   <input type="hidden" id="popup_<?= htmlspecialchars($comment->getId());?>"value="<?= substr(htmlspecialchars($comment->getContent()), 0, 150);?>">

   <!-- <span class="modalspan" ></span> -->
        <!-- <div class="comment-modal" >
            <div id="popup_<?= htmlspecialchars($comment->getId());?>" ><br><br>
             
           <div><?= substr(htmlspecialchars($comment->getContent()), 0, 150);?><div class="closex"></div></div>
            </div>
        </div> -->

                            <!----------POPUP End------>
            <div class="overlay"></div> 
            <!-- (When POPUP->background->black(transparent)) -->

</td>
         <!-- Le script qui crée la popup -->
        <script src="../templates/assets/js/popupadmin.js"></script>
    <!-- Pour l'effet blur -->
        <!-- by @derSchepp https://github.com/Schepp/CSS-Filters-Polyfill -->
        <!-- <script src="../templates/assets/js/cssParser.js"></script> -->
        <!-- <script src="../templates/assets/js/css-filters-polyfill.js"></script> -->
                                                   
 

                                                 <td><?= htmlspecialchars($comment->getCreatedAt());?></td>
                                                 <td><a href="../public/index.php?route=article&amp;articleId=<?= htmlspecialchars($comment->getArticleId());?>"><?= htmlspecialchars($comment->getArticleId());?></a></td>
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


                <!---------------------Table 3-------------->

                    <div class="table-container">
                         <table id="tab3"class="table table-filter"style="width: 150%;">

                           
                                <thead>
                                    <tr data-status="cancelado"> 
                                        <td><h5 class="box-title">Gestion des users</h5></td></tr>

                             <!-- <tbody>             -->
                                    <tr data-status="cancelado"> 
                                        <td style="width: 3%;">Pseudo de l'utilisateur</td>
                                        <td style="width: 15%;">Référence</td>
                                        <td style="width: 20%;">Date création</td>
                                        <td style="width: 15%;">Rôle</td>
                                        <td style="width: 50%;">Actions</td>
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

    