<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Subject;
use Validator;
use Input;
use Session;
use Redirect;

class SubjectsController extends Controller
{
	public function getIndex()
    {
    	$data = Subject::all();
    	return view('subjects.dashboard', compact('data'));
    }

    public function getCreate()
    {
    	return view('subjects.create');
    }

    public function postStore(Request $request)
    {
    	$rules = array(
    			'title' =>'required|min:5',
    			'type' =>'required'
    		);

    	$valid = Validator::make(Input::all(), $rules);

    	if ( !$valid->fails() )
    	{
    		$data = new Subject;
			$data->title       = $request->title;
			$data->type        = $request->type;
			$data->vote        = $request->vote;
			$data->description = $request->description;
			$data->save();

			Session::flash('success',  'You add Subject success.');
			
			return Redirect::to('subject');
    	} else {
    		return Redirect::to('subject/create')
    						->withErrors($valid);
    	}
    }

    public function getEdit($id=0)
    {
    	$data = Subject::find($id);

    	return view('subjects.edit', compact('data'));
    }

    public function valid()
    {
    	$rules = array(
    			'title' =>'required|min:5',
    			'type' =>'required'
    		);

    	return Validator::make(Input::all(), $rules);
    }

    public function putUpdate(Request $request, $id=0)
    {
  
    	$valid = $this->valid();

    	if ( !$valid->fails() )
    	{
	    	$data = Subject::find($id);
	    	$data->title       = $request->title;
			$data->type        = $request->type;
			$data->vote        = $request->vote;
			$data->description = $request->description;
			$data->save();

			Session::flash('success',  'You Update Subject ['.$data->title.'] Sucess.');
		
			return Redirect::to('subject');
		} else {
			return Redirect::to('subject/edit/'.$id)
					->withErrors($valid);
		}

    }

    public function getDelete($id=0) 
    {
    	$data = Subject::find($id);

    	if (count($data) >0 ) {
    		$data->delete();
    		Session::flash('success', 'Yout Delete ['.$data->title.'] success.');
    	} else {
    		Session::flash('errors', 'Yout record not found.');
    	}

    	return Redirect::to('subject');
    }
}
