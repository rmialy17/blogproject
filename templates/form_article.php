 
<div>
 <p class="mt30"><a href="../public/index.php?route=home"class="btn btn-primary btn-theme page-scroll"style="margin-left: 5%;">Retour aux Blog Posts</a></p> </div>

            <div class="section-inner text-center"style="background-size:cover;margin:0;padding: 0;">
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
    <label for="title"style="color:#303030;">Titre du blog post</label><br>
    <input type="text" id="title" name="title" value="<?= $title; ?>" style="color:#303030; width: 50%;"><br>
    <?= isset($errors['title']) ? $errors['title'] : '' ?>

    <label for="chapo"style="text-align: left;color:#303030;">Chapo</label><br>
    <textarea id="chapo" name="chapo"style="color:#303030;width: 50%;"><?= $chapo; ?></textarea><br>
    <?= isset($errors['chapo']) ? $errors['chapo'] : '' ?>

    <label for="content"style="color:#303030;">Contenu</label><br>
    <textarea name="content" id="contenu" cols="30" rows="10"style="color:#303030;width: 50%;"><?= $content; ?></textarea><br>
    <?= isset($errors['content']) ? $errors['content'] : '' ?>

   <br> <input type="submit" value="<?= $submit; ?>" id="submit" name="submit"style="color:#303030;"></br>
</form>


                         </div> 
                    </div> 
                </div>
                      
            </div>
        </section>