<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Photo;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PhotoController extends Controller
{
    public function getIndex(Request $req)
    {
        //$save = new Photo;
        echo $req->name;
        exit;
    	//$datas = Photo::All();
        //$datas = Photo::where('name', '8UZUiZcoqf')->get();
        /*Photo::chunk(2, function ($datas) {
            foreach ($datas as $data) {
                echo $data->name."<br />";
            }
        });*/

        $data = Photo::findOrFail(100);
        echo $data; exit;

        //echo '<pre>';
           // print_r($datas);

        if (!empty($datas)) {
            foreach ($datas as $data) {
                echo "$data->name || $data->email || $data->password <br />";
            }
        } else {
            echo 'No Record Found';
        }
    }

    public function postIndex()
    {
    	return 'Hello Post Index';
    }
}
