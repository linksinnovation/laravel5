<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\ModelNotFoundException;

use DB;
use Hash;
use Input;
use Redirect;
use Route;
use Session;
Use App\User;
//Use Crypt;

class BlogController extends Controller
{
    private $company;

    public function __construct()
    {
        $this->company = 'Links Innovataion Co., Ltd';
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = User::all();
        return view('users.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $results = ['xxxx' => '111', 'yyy' =>'222'];

        $result = [
                    'company' => 'Links Innovation',
                    'action' => 'Create',
                    'results' => $results
        ];
        return view('users.create', $result);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        Session::flash('success', 'Add successed.');
        return Redirect::route('blog.index');
       // echo 'SUCCESS';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('users.show', compact('user')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id=0)
    {
        $data = User::find($id);
        return view('users.edit', compact('data'))
                ->with('company', 'links innovation');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //$encrypt =  Crypt::encrypt('password');
        //echo $encrypt.'<br />';
        //echo Crypt::decrypt($encrypt).'<br />';exit;

        //return 'XXX';
        //return Redirect::to('blog/'.$request->id.'/edit');
        //Redirect::route('blog')->withInput('error', 'Invalid');
        //return redirect()->back()->withInput();
        //return Redirect::route('blog.edit', $id);
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        echo 'Udate SUccess';
        //exit;

        return redirect()->back()->withInput();
        //return Redirect::route('blog.edit', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    public function test($id = 0, $name= 'John Do')
    {
        return 'Hello Test :'.$id.' || Name : '.$name;
    }

    public function delete($id = 0)
    {
        $data = Photo::find($id);
        $data->delete();

        return redirect::route('blog')->with('sucess', 'You Delete ID : '.$id.' Success');
    }
}
