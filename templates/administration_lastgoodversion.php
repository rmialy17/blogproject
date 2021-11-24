<?php $this->title = 'Administration'; ?>

<p><h2 class="section-subheading secondary-font" style="font-family: serif;font-style: italic;color: #F4A460;margin-top: 5%;margin-bottom: -5%;"> 
<?= $this->session->show('delete_article'); ?>
<?= $this->session->show('unflag_comment'); ?>
<?= $this->session->show('delete_comment'); ?>
<?= $this->session->show('delete_user'); ?>
<?=$this->session->show('update_role');?></h2></p><br>


  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="https//code.jquery.com/jquery-1.11.1.min.js"></script>


    <!-- Custom CSS -->
    <!-- <link href="../templates/assets/css/admin.css" rel="stylesheet"> -->


<!-- fichier datatables -->

<link rel="stylesheet" type="text/css" href="../templates/assets/DataTables/media/css/jquery.dataTables.min.css">



   <!------ Include the above in your HEAD tag ----------> 



<br><p class="mt30"><a href="../public/index.php?route=home"class="btn btn-primary btn-theme page-scroll"style="margin-left: 4%;">Retour aux Blog Posts</a></p>

<div class="container">
    <div class="row">

        <section class="content">
            <h1>Gestions des données</h1>
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="pull-right">
                            <div class="btn-group" >
                                <button type="button" class="btn btn-success btn-filter" data-target="pagado">Blog Posts</button>
                                <button type="button" class="btn btn-warning btn-filter" data-target="pendiente">Commentaires</button>
                                <button type="button" class="btn btn-danger btn-filter" data-target="cancelado">Utilisateurs</button>
                                <button type="button" class="btn btn-default btn-filter" data-target="all">Todos</button>
                            </div>

                        </div>
                        <!-- <section> -->
                        <div class="table-container">

                        <!--------------Table1------------------>

                            <table id="tab"class="table table-filter"style="width: 150%;">  
                            
                                 <thead><th>Gestion des blog posts</th>
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
                                                    <p class="summary"><?= htmlspecialchars($article->getChapo());?></p>
                                                    <td><span class="pull-left"><?= htmlspecialchars($article->getAuthor());?></span></td>
                                                    <td><?= htmlspecialchars($article->getCreatedAt());?></td>
                                                     <td>
                                                        
                <a href="../public/index.php?route=editArticle&amp;articleId=<?= $article->getId(); ?>">Modifier</a>
                <a href="../public/index.php?route=deleteArticle&amp;articleId=<?= $article->getId(); ?>">Supprimer</a>
            </td>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                                <!-- </tbody> -->
                        <!-- </table>
                    </div> -->
                <!-- </section> -->



                <!-------------------------Table 2--------------------->

                <!-- <section> -->

                    <!-- <div class="table-container"> -->
                        <!-- <table id="tab"class="table table-filter"style="width: 150%;"> -->
                        
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
                                   <!-- <tbody> -->
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
                                                <!-- </td> -->
                                                    <td><?= htmlspecialchars($comment->getId());?></td>
                                                    <p class="summary"></p>
                                       
                                                   <td><div align="center"><button class="popup-button"data-modal="popup_<?= htmlspecialchars($comment->getId()) ;?>"> Voir le commentaire</button></div> 

                          <!----POP UP CONTENT------------->                         
   
        <div class="content">
            <div class="modal blur-effect" id="popup_<?= htmlspecialchars($comment->getId());?>" ><br><br>
             
           <div class="popup-content"><?= substr(htmlspecialchars($comment->getContent()), 0, 150);?><div class="close"></div></div>
            </div>
        </div>

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
                                        </td>
                                    </tr>
                                        <?php
                                }
                                ?>
                            <!-- </tbody>  -->

                      <!-- </table>
                    </div> -->
                <!-- </section> -->



                <!---------------------------Table 3---------------------------->

                <!-- <section> -->
                    <!-- <div class="table-container"> -->
                         <!-- <table id="tab"class="table table-filter"style="width: 150%;"> -->

                         
                                <thead>
                                    <tr data-status="cancelado"> 
                                        <td><h5 class="box-title">Gestion des users</h5></td></tr>
                                    <tr data-status="cancelado"> 
                                        <td style="width: 3%;">Pseudo de l'utilisateur</td>
                                        <td style="width: 15%;">Référence</td>
                                        <td style="width: 20%;">Date création</td>
                                        <td style="width: 15%;">Rôle</td>
                                        <td style="width: 50%;">Actions</td>
                                    </tr>    
                                </thead>  
                                 <!-- <tbody> -->
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
                                                    <!-- </td>    -->
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
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                 
                                    
                                </tbody>
                            </table>
                        <!-- </div> -->
                    <!-- </section> -->


                    </div>
                </div>
            
            <div class="row paging text-center">
                <br><p><a class="btn btn-primary mt30" href="#" >Haut de page</a>
                </p>
                <br><p></p>
            </div>

                </div>


            </div>

  </div>
            
        </section>
        
    </div>
</div>  

 <!-----js----------->

    <script src="../templates/assets/js/admin.js"></script>

    <script type="text/javascript" src="../templates/assets/DataTables/media/js/jquery.js"></script>
     <!-- <script type="text/javascript" src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script> -->
<script type="text/javascript" src="../templates/assets/DataTables/media/js/jquery.dataTables.min.js"></script>
<!-- <script type="text/javascript" src="//code.jquery.com/jquery-3.5.1.js"></script> -->
<script type="text/javascript" src="../templates/assets/js/table.js"></script>
