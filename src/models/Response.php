<?php namespace Zwarthoorn\Blog\Models;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Response extends Model {

	public function test()
	{
		dd('test');
	}
	protected $table = 'responses';
	protected $fillable = ['name', 'response','blogs_id'];

	public function getSingleResponse($id)
	{
		return Self::find($id)->toArray();
	}


	/*
	* setting the response in the database 
	* @return bool
	* beta notice 
	* check for auth not in yet will be addet whith permission module.
	*/

	public function setResponse($name,$response,$blogsid)
	{

		if (Auth::check()) {
			# code...
		}else{
			Self::create([
			'name'=>$name,
			'response'=>$response,
			'blogs_id'=>$blogsid
			])
		}
	
	}

}
