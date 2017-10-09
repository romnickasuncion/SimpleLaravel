<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function index() {
    	
    	$users = DB::table('users')->get();

    	return view('sample.newSample',[
    		'users' => $users
    	]);

    }   

    public function store(Request $request)
    {
    	DB::table('users')->insert([
    		'name' => $request->get('name'),
    		'age' => $request->get('age'),
    		'email' => $request->get('email')
    	]);
        
		return redirect('users');

    }

    public function edit($user_id)
    {
		
    	$user = DB::table('users')->whereId($user_id)->first();
    	
    	$users = DB::table('users')->get();


    	return view('sample.newSample',[
    		'users' => $users,
    		'user' => $user
    	]);
        
    }

    public function update(Request $request)
    {
    	DB::table('users')
            ->where('id', $request->user_id)
            ->update([
            	'name' => $request->get('name'),
            	'age' => $request->get('age'),
            	'email' => $request->get('email')
            ]);
        
		return redirect('users');

    }

    public function delete(Request $request)
    {
    	DB::table('users')
            ->where('id', $request->user_id)->delete();
        
		return redirect('users');

    }


}