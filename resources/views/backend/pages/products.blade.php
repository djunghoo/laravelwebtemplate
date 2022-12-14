@extends('backend.layouts.main_template')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>ProductsList</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">ProductsList</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">

<div class="card">
    <div class="card-header">
      <h3 class="card-title">Bordered Table</h3>
    </div>
    <!-- /.card-header -->
    
    <div class="card-body">
    <!-- /.card-body -->
    <div class="card-footer clearfix">
        <ul class="pagination pagination-sm m-0 float-right">
          {{$products->links('pagination::bootstrap-4');}}
        </ul>
      </div>
    </div>
  
      <table class="table table-bordered table-striped table-hover">
        <thead>
          <tr>
            <th style="width: 10px">#</th>
            <th class="col-1">Photo</th>
            <th>Productname</th>
            <th>Price</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($products as $data)
            <tr>
                <td style="width: 10px">{{$data->id}}</td>
                <td><img src="{{$data->image}}" class="img-fluid" ></td>
                <td>{{$data->name}}</td>
                <td>{{number_format($data->price,2)}}</td>
                <td>{{$data->description}}</td>
              </tr> 
            @endforeach
<tfoot>
  <tr>
    <th style="width: 10px">#</th>
    <th class="col-1">Photo</th>
    <th>Productname</th>
    <th>Price</th>
    <th>Description</th>
  </tr>

</tfoot>
        </tbody>
      </table>
    </div>

    <!-- /.card-body -->
    <div class="card-footer clearfix">
      <ul class="pagination pagination-sm m-0 float-right">
        {{$products->links('pagination::bootstrap-4');}}
      </ul>
    </div>
  </div>

        </div>
    </div>
</div>
</section>
  @endsection