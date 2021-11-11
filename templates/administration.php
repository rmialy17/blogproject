<?php $this->title = 'Administration'; ?>

<?= $this->session->show('delete_article'); ?>
<?= $this->session->show('add_article'); ?>
<?= $this->session->show('edit_article'); ?>
<?= $this->session->show('unflag_comment'); ?>
<?= $this->session->show('delete_comment'); ?>
<?= $this->session->show('delete_user'); ?>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


    <!-- Custom CSS -->
    <link href="../templates/assets/css/admin.css" rel="stylesheet">


   <!------ Include the above in your HEAD tag ----------> 



<p class="mt30"><a href="../public/index.php?route=home"class="btn btn-primary btn-theme page-scroll"style="margin-left: 4%;">Retour aux Blog Posts</a></p>    

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
                                <button type="button" class="btn btn-default btn-filter" data-target="#">Droits</button>
                                <button type="button" class="btn btn-default btn-filter" data-target="all">Tout</button>
                            </div>
                        </div>
                        <div class="table-container">
                            <table class="table table-filter"style="width: 150%;">
                                <tbody>
                                    <tr data-status="pagado">
                                        <div>
                                        <td style="width: 42%;">Titre</td>
                                        <td style="width: 20%;">Auteur</td>
                                        <td style="width: 20%;">Date/Heure</td>
                                        <td style="width: 30%;">Actions</td>
                                        </div>
                                    </tr>  
                                   
                                          <?php
                                    foreach ($articles as $article)
                                    {
                                        ?> 
                                        <tr data-status="pagado">    
                                        <td>
                                            <div class="media">
                                                <div class="media-body">
                                                    <h4 class="title"href="../public/index.php?route=article&amp;articleId=<?= htmlspecialchars($article->getId())?>"><?= htmlspecialchars($article->getTitle()); ?>
                                                    </h4>
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

                                    <tr data-status="pendiente">
                                        <div>
                                        <td style="width: 30%;">Pseudo</td>
                                        <td style="width: 15%;">Référence</td>
                                        <td style="width: 30%;">Message</td>
                                        <td style="width: 20%;">Date/Heure</td>
                                        <td style="width: 30%;">Actions</td>
                                        </div>
                                    </tr> 
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
                                                    </h4>
                                                    <td><?= htmlspecialchars($comment->getId());?></td>
                                                    <p class="summary"></p>
                                                    <td><?= substr(htmlspecialchars($comment->getContent()), 0, 150);?></td>
                                                    <td><?= htmlspecialchars($comment->getCreatedAt());?></td>
                                                    <td>
            <a href="../public/index.php?route=unflagComment&commentId=<?= $comment->getId(); ?>">Désignaler</a>
            <a href="../public/index.php?route=deleteComment&commentId=<?= $comment->getId(); ?>">Supprimer</a>
        </td>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                        <?php
                                }
                                ?>

                                <tr data-status="cancelado">
                                        <div>
                                        <td style="width: 30%;">Pseudo</td>
                                        <td style="width: 15%;">Référence</td>
                                        <td style="width: 30%;">Date création</td>
                                        <td style="width: 20%;">Rôle</td>
                                        <td style="width: 30%;">Actions</td>
                                        </div>
                                    </tr>
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
                                                    <td><?= htmlspecialchars($user->getId());?></td>
                                                    <td><?= htmlspecialchars($user->getCreatedAt());?></td>
                                                    <td><?= htmlspecialchars($user->getRole());?></td>
                                               
                                            <td>
                                                                            <?php
                                                if ($user->getRole() !== 'admin') {
                                                    ?>
                                                    <a href="../public/index.php?route=deleteUser&userId=<?= $user->getId();?>">Supprimer</a>
                                                <?php
                                                } else {
                                                    ?>
                                                    Suppression impossible
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
    