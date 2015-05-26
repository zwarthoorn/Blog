<?php namespace Zwarthoorn\Blog\Models;

use Illuminate\Database\Eloquent\Model;

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

}
