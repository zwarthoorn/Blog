@extends('Admincore::admin.master')

@section('content')

 <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Make new Blog Post</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method='post' action='/admin/blog'>
                  <div class="box-body">
                    <div class="form-group">
                      <label for="title">Enter Title</label>
                      <input type="text" class="form-control" name='title' id="title" placeholder="Enter Title">
                      <input type='hidden' name='slug' id='slug'>
                    </div>
                    <div class="form-group">
                         <textarea class="textarea" placeholder="please place your blogpost" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name='blogpost'></textarea>
                    </div>
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" value='publish' class="btn btn-primary">Post blog</button>
                  </div>
              </form>
              {!! Form::open(['url'=>'/admin/blog', 'method'=>'get']) !!}
             <button class="btn btn-primary">back</button>
             {!! Form::close() !!}
              <script>
              var title = document.getElementById('title');
              var slug = document.getElementById('slug');

              title.onkeydown = function () {
                if(title.value.length < 5){
                  slug.value = title.value;
                }
              }
            </script>
   	</section>

@stop