<?php namespace Zwarthoorn\Blog;


use App\Http\Controllers\Controller;
use Zwarthoorn\Admincore\ModuleCheck as module;
use Illuminate\Support\Facades\Request;
use Zwarthoorn\Blog\Facades\Blog;
use Zwarthoorn\Blog\Facades\Response;


class BlogController extends Controller {

	private $modules;
	private $blog;
	public function __construct()
	{
		$this->modules = new module();
		
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
		$navbar = ['dashboard'=>'','blog'=>'active','blogcreate'=>''];
		


		return view('Blog::index',['navbar'=>$this->modules->checkAll(),'active'=>$navbar,'blogs'=>Blog::all()->toArray()]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$navbar = ['dashboard'=>'','blog'=>'','blogcreate'=>'active'];
		return view('Blog::create',['navbar'=>$this->modules->checkAll(),'active'=>$navbar]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		
		Blog::create([
			'title'=> Request::get('title'),
			'blogpost'=>Request::get('blogpost'),
			'slug'=>Request::get('slug')
			]);
		return redirect('admin/blog');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$navbar = ['dashboard'=>'','blog'=>'active','blogcreate'=>''];
		$sender = Blog::where('slug','=',$id)->first()->toArray();
		
		$respons = Response::where('blogs_id','=',$sender['id'])->get()->toArray();
		
		return view('Blog::show',['navbar'=>$this->modules->checkAll(),'active'=>$navbar,'post'=>$sender,'respons'=>$respons]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		dd('yes');
	}

}
