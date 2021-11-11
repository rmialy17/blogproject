<?php
$route = isset($post) && $post->get('id') ? 'editComment' : 'addComment';
$submit = $route === 'addComment' ? 'Ajouter' : 'Mettre à jour';
?>


            <div id="comments-form" class="row wow">
                <div class="col-md-12">
                    <div class="mt60 mb50 single-section-title">
                    <h3>Laissez un commentaire</h3>
                    </div>
                    <div id="comment_message"></div>
                    <form action="../public/index.php?route=<?= $route; ?>&articleId=<?= htmlspecialchars($article->getId()) ?>" method="post">

                    <input type="text" for="pseudo" class="form-control col-md-4" id="commentform" class="comment-form"name="pseudo" id="name1" placeholder="Votre pseudo *"
                           value="<?= isset($post) ? htmlspecialchars($post->get('pseudo')) : ''; ?>">
               
                    <?= isset($errors['pseudo']) ? $errors['pseudo'] : ''; ?>

                    <textarea for="content" class="form-control" name="content" id="content" cols="30" rows="10" placeholder="Votre commentaire *"><?= isset($post) ? htmlspecialchars($post->get('content')): ''; ?></textarea>
                    <?= isset($errors['content']) ? $errors['content'] : ''; ?>

                    <input type="submit" class="btn btn-primary pull-right" value="<?= $submit; ?>" name="submit" id="submit">
                    </form> 

                    <p>*Champs obligatoires</p>
                    </div>
                </div>
            </div>

                             