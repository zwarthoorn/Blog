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
                {!! Form::open(['url'=>'/admin/blog/'.$post['id'],'method'=>'put']) !!}
                  <div class="box-body">
                    <div class="form-group">
                      <label for="title">Enter Title</label>
                      <input type="text" class="form-control" name='title' id="title" value="{{$post['title']}}">
                    </div>
                    <div class="form-group">
                         <textarea class="textarea"  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name='blogpost'>{{$post['blogpost']}}</textarea>
                    </div>
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" value='publish' class="btn btn-primary">edit Blog</button>
                  </div>
              </form>
               {!! Form::open(['url'=>'/admin/blog', 'method'=>'get']) !!}
             <button class="btn btn-primary">back</button>
             {!! Form::close() !!}
   	</section>

@stop