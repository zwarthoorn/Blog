<?php namespace Zwarthoorn\Blog\Models;

use Illuminate\Database\Eloquent\Model;



class Blog extends Model {

	public function test()
	{
		dd('test');
	}
	protected $table = 'blogs';
	protected $fillable = ['title', 'blogpost','slug'];
}
