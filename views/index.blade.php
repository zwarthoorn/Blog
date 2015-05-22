@extends('Admincore::admin.master')

@section('content')
 <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Hover Data Table</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Blogpost</th>
                        <th>Show Post</th>
                        <th>Edit Post</th>
                        <th>Delete Post</th>
                      </tr>
                    </thead>
                    <tbody>
                    	@foreach($blogs as $value)
                      <tr>
                      	
                        <td>{{$value['title']}}</td>
                        <td>
                          <button type="submit" value='publish' class="btn btn-primary"> <a href="/admin/blog/{{$value['slug']}}" style="text-decoration: none; color: white">Show</a> </button>
                        </td>
                        <td>{{$value['id']}}</td>
                        <td>{!!Form::open(['url'=>'/admin/blog/'.$value['id'],'method' => 'delete'])!!}
                            <button type="submit" value='publish' class="btn btn-primary"> delete </button>
                            {!!Form::close()!!}
                        </td>
                        
                      </tr>
                     @endforeach
                    </tbody>
                    <tfoot>
                      <tr>
						            <th>Blogpost</th>
                        <th>Show Post</th>
                        <th>Edit Post</th>
                        <th>Delete Post</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

           
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->

@stop