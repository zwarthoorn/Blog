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
		$sender = Blog::findBlog($id);
		
		$respons = Response::where('blogs_id','=',$sender['id'])->get()->toArray();
		$all = Blog::findBlogWithResponse($id);

		
		return view('Blog::show',['navbar'=>$this->modules->checkAll(),'active'=>$navbar,'post'=>$all['blogpost'],'respons'=>$all['response']]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Blog::find($id)->toArray();

		$navbar = ['dashboard'=>'','blog'=>'active','blogcreate'=>''];


		return view('Blog::edit',['navbar'=>$this->modules->checkAll(),'active'=>$navbar,'post'=>$post]);

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$update = Blog::find($id);
		$update->title = Request::get('title');
		$update->blogpost = Request::get('blogpost');
		$update->save();
		return redirect('/admin/blog');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$blog = Blog::find($id)->delete();
		return redirect()->back();
	}

}
