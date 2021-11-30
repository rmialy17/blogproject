<?php
$route = isset($post) && $post->get('id') ? 'editComment' : 'addComment';
$submit = $route === 'addComment' ? 'Ajouter' : 'Mettre à jour';
?>

<head>
<link href="../templates/assets/css/blog.css" rel="stylesheet" type="text/css">
</head>


            <div id="comments-form" class="row wow">
                <div class="col-md-12">
                    <div class="mt60 mb50 single-section-title">
                    <h3>Laissez un commentaire</h3>
                    </div>
                    <div id="comment_message"></div>
                   <form action="../public/index.php?route=<?= $route; ?>&articleId=<?= htmlspecialchars($article->getId()) ?>" method="post">

                        <!-- <form action="../public/index.php?route=administration" method="post"> -->
                   
                     <p class="commentpseudo"><strong>VOTRE PSEUDO * : <input class="commentpseudo2"for="pseudo" id="commentform" name="pseudo"  value="<?= $this->session->getUserInfo('pseudo') ?>" readOnly="readOnly"></strong></p>
                           <!-- value="<?= isset($post) ? htmlspecialchars($post->get('pseudo')) : ''; ?>"> -->

                           
               
                    <?= isset($errors['pseudo']) ? $errors['pseudo'] : ''; ?>

                    <textarea for="content" class="form-control" name="content" id="content" cols="30" rows="10" placeholder="Votre commentaire *"><?= isset($post) ? htmlspecialchars($post->get('content')): ''; ?></textarea>
                    <?= isset($errors['content']) ? $errors['content'] : ''; ?>

                    <!-- <input type="submit" class="btn btn-primary pull-right" value="<?= $submit; ?>" name="submit" id="submit"> -->

                    <a href="../public/index.php?route=flagComment&commentId"><input type="submit" class="btn btn-primary pull-right" value="<?= $submit; ?>" name="submit" id="submit"></a>
                  

                    </form> 

                    <p>*Champs obligatoires</p>
                    </div>
                </div>
            </div>

                      