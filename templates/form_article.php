 <head>
<link href="../templates/assets/css/blog.css" rel="stylesheet" type="text/css">
</head>

<div>
 <p class="mt30"><a href="../public/index.php?route=home"class="btn btn-primary btn-theme page-scroll" id="returnbtn2">Retour aux Blog Posts</a></p> </div>

            <div class="section-inner text-center" id="addpost">
                <div class="container" >
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 mt30 wow">

                            <h7 class="section-heading">Ajoutez/Modifiez un post</h7>
                            <div class="item-metas text-muted mb30 white"> 

<?php
/**
 * Si existance d'un article, alors on affiche ses données pré-remplies => modification
 * Sinon champs vide => insertion
 * Affichage des erreurs de validation des données sous les champs correspondants
 *
 * La route générée est :
 * Si données POST : edition donc editArticle pour modification
 * Si pas de données POST : addArticle pour ajout
 */

       

$route = isset($post) && $post->get('id') ? 'editArticle&articleId=' . $post->get('id') : 'addArticle';
$title = isset($post) ? htmlspecialchars($post->get('title')) : '';
$chapo = isset($post) ? htmlspecialchars($post->get('chapo')) : '';
$content = isset($post) ? htmlspecialchars($post->get('content')) : '';
$submit = $route === 'addArticle' ? 'Envoyer' : 'Mettre à jour';
?>
<form action="../public/index.php?route=<?= $route; ?>" method="post">
    <label for="title" id="addpost2">Titre du blog post</label><br>
    <input type="text" class="addpost3"id="title" name="title" value="<?= $title; ?>"><br>
    <?= isset($errors['title']) ? $errors['title'] : '' ?>

    <label for="chapo" id="addpost2">Chapo</label><br>
    <textarea class="addpost3" id="chapo" name="chapo"><?= $chapo; ?></textarea><br>
    <?= isset($errors['chapo']) ? $errors['chapo'] : '' ?>

    <label for="content"id="addpost2">Contenu</label><br>
    <textarea name="content" class="addpost3"id="contenu" cols="30" rows="10"><?= $content; ?></textarea><br>
    <?= isset($errors['content']) ? $errors['content'] : '' ?>

   <br> <input type="submit" id="addpost2"value="<?= $submit; ?>" id="submit" name="submit"></br>
</form>


                         </div> 
                    </div> 
                </div>
                      
            </div>
        </section>