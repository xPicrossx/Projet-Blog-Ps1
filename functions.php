<?php 

function dbconnect() {
    //le try/catch, c'est un peu comme un if/else
    try{
    $pdo = new PDO('mysql:host=localhost;dbname=xprojetblogx', 'root', ''); 
    return $pdo;
    } catch (PDOException $e) {
    echo 'ça marche pas';
    }
    }

    function addArticle($title, $image, $text, $author){
        $connect = dbConnect();
        $stmt = $connect->query("INSERT INTO articles(title, image, text, fk_id_author) VALUES ('$title', '$image', '$text', $author)");

                }

                function addComment($comment, $author, $id){
                    $connect = dbConnect();
                    $stmt = $connect->query("INSERT INTO comments(text, nickname, fk_id_article) VALUES ('$comment', '$author', '$id')");
            
                            }
                

        function getAllarticles(){
            $connect = dbConnect();            
            $articles = $connect->query("SELECT * FROM articles");
            $list_articles = $articles->fetchAll(PDO::FETCH_ASSOC);
            return $list_articles; 
        }

        function getArticlebyId($articleId){
            $connect = dbConnect();       
            $articles = $connect->query("SELECT * FROM articles WHERE articles.id_article = $articleId");
            $article = $articles->fetchAll(PDO::FETCH_ASSOC);
            return $article; 
        }


        function addmember($nickname, $email, $password){
            $connect = dbConnect();
            $stmt = $connect->query("INSERT INTO authors VALUES (null, '$nickname', '$email', '$password')");
                    }

    function secure_email($email){
    $sanitize = filter_var($email, FILTER_SANITIZE_EMAIL); //filtre pour clear tous les espaces et caracteres non reconus
    $validate = filter_var($sanitize, FILTER_VALIDATE_EMAIL);//filtre pour tester si ça a l'apparence d'un email
    if($sanitize){
    return $validate;
    }
    }



        function getUser($mail,$password) {
           
            $connect = dbConnect();
            $stmt = $connect->prepare("SELECT * FROM authors WHERE authors.mail=:toto");
            $stmt->bindParam(':toto', $mail);
            $stmt->execute();
            
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            

            if ($user && (password_verify($password,$user["password"]))) {         
                
                    session_start();
            $_SESSION['user'] = [
            'id' => $user['ID'],
            'nickname' => $user['nickname'],
            'mail' => $user['mail']
        ];                    
                    header('Location:index.php');
                    return $user;
                    } else {
                        header('location:connexion.php?message=Mauvais email ou mot de passe&status=danger');
                    }            
                    print_r($user);            
        }


        function modifyText($newtitle, $newtext, $id) {
            $dbh = dbconnect();
            $stmt = $dbh->prepare("UPDATE articles SET articles.title = :newtitle, articles.text = :newtext WHERE articles.id_article = :ID");
            $stmt->bindParam(':newtitle', $newtitle);
            $stmt->bindParam(':newtext', $newtext);        
            $stmt->bindParam(':ID', $id);        
            $stmt->execute();
        }



        function getAllArticlesByIdAuthor($id) {
            $dbh = dbconnect();
            $stmt = $dbh->prepare("SELECT * FROM articles WHERE articles.fk_id_author = articles.id_article");
            
        }

function getUserAllbyId($id){
    $connect = dbConnect();
    $stmt = $connect->prepare("SELECT * FROM authors WHERE authors.ID=:id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $user = $stmt->fetchall(PDO::FETCH_ASSOC);
    return $user ;

}


function getAllCommentsByArticleId($id){
    $connect = dbConnect();
    $stmt = $connect->query("SELECT * FROM comments WHERE comments.fk_id_article = $id");
    $list_comments = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $list_comments; 

}




function getArticlesByAuthorId($id){
    $connect = dbConnect();
    $stmt = $connect->query("SELECT * FROM articles WHERE articles.fk_id_author = $id");
    $role = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $role;

}