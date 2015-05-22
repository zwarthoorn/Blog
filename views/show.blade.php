@extends('Admincore::admin.master')

@section('content')

 <section class="content" style='text-align: center;'>
          <div class="row">
            <!-- left column -->
            <div class="col">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Show Blog Post</h3>
                </div><!-- /.box-header -->
             <div class=' box-secondery'>
               <h3>{{$post['title']}}</h3>
             </div>
             <div style='text-align: center;'>
              <h4>Blog post</h4>
               <p>{!!$post['blogpost']!!}</p>
             </div>
               <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Response</h3>
                </div><!-- /.box-header -->
              @foreach ($respons as $response)
                             <div class=' box-secondery'>
               <h3>{{$response['name']}}</h3>
             </div>
             <div style='text-align: center;'>
              <h4>Blog post</h4>
               <p>{!!$response['response']!!}</p>
             </div>
              <div style='text-align: center;'>
                <form method='post' action="/response/delete">
              <button type="submit" value='publish' class="btn btn-primary">delete</button>
              <input type='hidden' name='delResponse' value="{{$response['id']}}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </form>

             </div>
              @endforeach

   	</section>

@stop