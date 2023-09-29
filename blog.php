<?php 

class Post {
    public $user, $post, $comment;

    public function __construct($u, $p){
        $u = this -> user;
        $p = this -> post;

        echo '$u' . '/n' . '$p';

    }

    

}

$post = new Post('niaj','this is a sample post') ;

