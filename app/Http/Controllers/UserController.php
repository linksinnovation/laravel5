<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use App\Phone;

use App\Post;
use App\Comment;

use App\Role;

class UserController extends Controller
{
    public function getEnv()
    {
        return env('APP_ENV');
    }

    public function getOneone($id = 1)
    {
        echo 'Test One To One <br /><br />';

        $userFindPhone  = User::find($id)->phone;
        $phoneOfUser = Phone::find($id)->user;
        echo '<br />All Relation => '.$phoneOfUser->name.' use mobile : '.$userFindPhone->brand;
        echo '<br /><br /><br /><br />';

        $phoneName  = User::find($id)->phone->brand;
        $userName = Phone::find($id)->user->name;
        echo '<br />Traveling In Relation =>'.$userName.' use mobile : '.$phoneName;

    }

    public function getOnetomany($id = 1)
    {
        echo 'Test One To One <br /><br />';

        /*$comments  = Post::find($id)->comments;

        foreach ($comments as $comment) {
            echo "ID : $comment->id, Post ID : $comment->post_id, Message : $comment->message <br /><br />";
        }*/

        echo '<br /><br /><br />';
        //echo 'Comment ID : '.$id;
        $post = Comment::find($id)->post;
        echo "<br /><br />Comment ID : $id => Owner is Post ID : $post->id, Post Name : $post->title <br /><br />";
    }

    public function getFindallrolebyuserid($id=1)
    {
        echo 'Many To Many (Find All Row By User ID)<br /><br />';

        //$user = App\User::find(1);
        $user = User::find($id);
        echo '<pre>';
        print_r($user);
        exit;

        echo "User : $user->name, User ID $user->id"; 
        echo '<br />';

        echo '<ul>';
        foreach ($user->roles as $role) {
            echo '<li>';
            echo "Role ID : $role->id, Role Name : $role->name";
                /*echo '<pre>';
                print_r($user->roles);*/
            echo '</li>';
        }
        echo '<ul>';
    }

    public function getFindalluserbyroleid($id=1)
    {
        echo 'Many To Many (Find All User By Role ID)<br /><br />';

        $role = Role::find($id)->users;

        echo '<pre>';
        print_r($role); exit;
        echo "Row ID : $role->id, Row Name : $role->name"; 
        echo '<br />';

        echo '<ul>';
        foreach ($role->users as $user) {
            //echo '<pre>';
            //print_r($user);
            echo '<li>';
            echo "User ID : $user->id, User Name : $user->name, User Email : $user->email";
            echo '</li>';
        }
        echo '<ul>';
    }
}
