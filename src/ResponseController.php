<?php namespace Zwarthoorn\Blog;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use Zwarthoorn\Blog\Facades\Response;


class ResponseController extends Controller {

	public function del()
	{
		$response = Response::find(Request::get('delResponse'));

		$response->delete();

		return redirect()->back();
	}
	public function hallo()
	{
		# code...
	}

}
