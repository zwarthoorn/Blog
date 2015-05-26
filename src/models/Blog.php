<?php namespace Zwarthoorn\Blog\Models;

use Illuminate\Database\Eloquent\Model;
use Zwarthoorn\Blog\Facades\Response;


class Blog extends Model {

	public function test()
	{
		dd('test');
	}
	protected $table = 'blogs';
	protected $fillable = ['title', 'blogpost','slug'];


	public function findBlog($slug)
	{
		return Self::where('slug','=',$slug)->first()->toArray();
	}
	public function findBlogWithResponse($slug)
	{
		$blogpost = Self::where('slug','=',$slug)->first()->toArray();
		$response = Response::where('blogs_id','=',$blogpost['id'])->get()->toArray();
		$backarray = ['blogpost'=>$blogpost,'response'=>$response];
		return $backarray;
	}
	public function allBlogs()
	{
		return Self::all()->toArray();
	}
}
