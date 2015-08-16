<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Subject;

class SubjectController extends Controller
{

	public function getDashboard()
	{
		$data = Subject::all();
		$title = 'Blogs : List All ';
		return view('subjects.dashboard', compact('data'))
					->with('title', $title);
	}

    public function getCreate()
    {
    	return view('subjects.create');
    }
}
