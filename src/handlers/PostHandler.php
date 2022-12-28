<?php
namespace src\handlers;
use \src\models\Post;
use \src\models\User;
use \src\models\UserRelation;


class PostHandler {

    static function addPost($idUser, $type, $body){
        $body = trim($body);
        
        if(!empty($idUser) && !empty($body)){

            Post::insert([
                'id_user' => $idUser,
                'type' => $type,
                'created_at' => date('Y-m-d H:m:s'),
                'body' => $body
            ])->execute();
        }

    }

    static function getHomeFeed($idUser){
       
        $usersList = UserRelation::select()->where('user_from',$idUser)->get();
        $users = [];

        foreach($usersList as $userItem){
            $users[] = $userItem['user_to'];
        }

        $users[] = $idUser;
        
        $postsList = Post::select()
        ->where('id_user','in',$users)
        ->orderBy('created_at', 'desc')
        ->get();

        $posts = [];
        foreach($postsList as $postItem){
            $newPost = new Post();
            $newPost->id = $postItem['id'];
            $newPost->type = $postItem['type'];
            $newPost->created_at = $postItem['created_at'];
            $newPost->body = $postItem['body'];

            $newUser = User::select()->where('id', $postItem['id_user'])->one();
            $newPost->user = new User;
            $newPost->user->id = $newUser['id'];
            $newPost->user->name = $newUser['name'];
            $newPost->user->avatar = $newUser['avatar'];



            $posts[] = $newPost;
        }
        return $posts;
    }   
}