<?php

namespace App\src\controller;

use App\config\Parameter;

use App\config\controller\BackController;

/**
 * Class FrontController
 * Contrôleur qui gère ce qui est accessible à tout le monde
 * @package App\src\controller
 */
class FrontController extends Controller
{
    /**
     * Gère l'affichage de la page d'accueil du site
     * i.e. tous les billets disponibles
     */

    public function bloghome()
    {
        header('Location: ../templates/bloghome.php');
    }

    public function home()
    {
        $articles = $this->articleDAO->getArticles();
        $this->view->render('home', [
            'articles' => $articles
        ]);
    }

    public function contact()
    {
        header('Location: ../templates/contact.php');
    }

    /**
     * Gère l'affichage d'un article et de ses commentaires
     * @param $articleId mixed Identifiant de l'article ciblé
     */
    public function article($articleId)
    {
        $article = $this->articleDAO->getArticle($articleId);
        $comments = $this->commentDAO->getCommentsFromArticle($articleId);
        $this->view->render('single', [
            'article' => $article,
            'comments' => $comments
        ]);
    }


    /**
     * Inscription sur le site
     * @param $post Parameter Données utilisateur d'incription
     */
    public function register(Parameter $post)
    {
        //Si formulaire soumis
       
                if (session_status() === PHP_SESSION_NONE)
                {
                session_start();} 
        if ($post->get('submit')) 
        {     
                //-----------anti csrf----------//
                //On va vérifier :
                //Si le jeton est présent dans la session et dans le formulaire
                if(isset($_SESSION['register_token']) && isset($_SESSION['register_token_time']) && isset($_POST['register_token']))
                {
        
                    //Si le jeton de la session correspond à celui du formulaire
                    if(hash_equals($_SESSION['register_token'], $_POST['register_token']))
                    {
                        //On stocke le timestamp qu'il était il y a 15 minutes
                        $timestamp_ancien = time() - (15*60);
                            //Si le jeton n'est pas expiré
                            if($_SESSION['register_token_time'] >= $timestamp_ancien)
                            {
                                $errors = $this->validation->validate($post, 'User');
                                $checkUser = $this->userDAO->checkUser($post);
                                if ($checkUser) {
                                //Ajoute une erreur avec un message renvoyé par checkUser
                                $errors['pseudo'] = $checkUser;
                            }
                                
                                if (!$errors) {
                                $this->userDAO->register($post);
                                $this->session->set('register', 'Votre inscription à bien été effectuée');
                                header('Location: ../public/index.php?route=home');
                                } else {
                                $this->view->render('register', [
                                'errors' => $errors,
                                'post' => $post ]); }
                            }
                    }else echo'erreur'; 
                }  
        } else {
        $this->view->render('register'); }
       
    }

    /**
     * Page de connexion
     * @param Parameter $post Données de connexion
     */
    public function login(Parameter $post)
    {
        //Si formulaire soumis, vérification de l'identité
        //Stockage des infos de l'utilisateur dans la session
        if ($post->get('submit')) 
        {

                    //-----------anti csrf----------//
            if (session_status() === PHP_SESSION_NONE)
            {
                session_start();}
                    //On va vérifier :
                    //Si le jeton est présent dans la session et dans le formulaire
                    if(isset($_SESSION['login_token']) && isset($_SESSION['login_token_time']) && isset($_POST['login_token']))
                    {
            
                        //Si le jeton de la session correspond à celui du formulaire
                        if(hash_equals($_SESSION['login_token'], $_POST['login_token']))
                        {
                            //On stocke le timestamp qu'il était il y a 15 minutes
                            $timestamp_ancien = time() - (15*60);
                                //Si le jeton n'est pas expiré
                                if($_SESSION['login_token_time'] >= $timestamp_ancien)
                                {
                                    $result = $this->userDAO->login($post);
                                    if ($result && $result['isPasswordValid'])
                                    {
                                        $this->session->set('login_message', 'Contente de vous revoir !');
                                        $this->session->set('user', $result['result']);
                                        header('Location: ../public/index.php?route=home');
                                    } else {
                                        //Si mot de passe invalide, remet la page de connexion avec infos
                                        $this->session->set('error_login', 'Le pseudo ou le mot de passe sont incorrects');
                                        $this->view->render('login', [
                                            'post' => $post
                                                        ]); }                          
                                }
                        }else echo'erreur'; }
                   
                    }else {
                                        //Si aucun formulaire soumis, retour page connexion
                                     $this->view->render('login'); }
        }
                                           
    }
