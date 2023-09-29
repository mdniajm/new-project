<?php 

class Post {
    public $user, $post, $comment;

    public function __constructor($u, $p){
        $u = this -> user;
        $p = this -> post;

        echo '$u' . '/n' . '$p';

    }

    

}

$post = new Post;

echo $post;