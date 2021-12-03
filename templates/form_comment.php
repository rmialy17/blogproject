<?php
$route = isset($post) && $post->get('id') ? 'editComment' : 'addComment';
$submit = $route === 'addComment' ? 'Ajouter' : 'Mettre à jour';

                    //-----anti csrf-----//

//On démarre les sessions
if (session_status() === PHP_SESSION_NONE) {
session_start();}
//On génére un jeton totalement unique (c'est capital :D)
$comment_token = bin2hex(random_bytes(32));
//Et on le stocke
$_SESSION['comment_token'] = $comment_token;
//On enregistre aussi le timestamp correspondant au moment de la création du token
$_SESSION['comment_token_time'] = time();


            //----------fin anti csrf----------//

include 'comment_token.php';  

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

                           
               
                    <?= isset($errors['pseudo']) ? $errors['pseudo'] : ''; ?>

                    <textarea for="content" class="form-control" name="content" id="content" cols="30" rows="10" placeholder="Votre commentaire *"><?= isset($post) ? htmlspecialchars($post->get('content')): ''; ?></textarea>
                    <?= isset($errors['content']) ? $errors['content'] : ''; ?>

                    <input type="hidden" class="form-control" name="comment_token" id="comment_token" value="<?php
                    //Le champ caché a pour valeur le jeton
                     echo $comment_token;?>"/>

                    <a href="../public/index.php?route=flagComment&commentId"><input type="submit" class="btn btn-primary pull-right" value="<?= $submit; ?>" name="submit" id="submit"></a>
                  

                    </form> 

                    <p>*Champs obligatoires</p>
                    </div>
                </div>
            </div>

                      