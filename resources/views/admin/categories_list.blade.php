@extends('admin.master')
@section('content')
    
<div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Fixed Header Table</h3>

        <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <a href="{{route('categories.create')}}">add</a>
            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

            <div class="input-group-append">
              <button type="submit" class="btn btn-default">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0" style="height: 300px;">
          <div class="col-md-12">

            @if(session()->has('message'))
              <div class="alert alert-success">
               {{ session()->get('message') }}
              </div>
          
            @endif
    
          </div>
          <table class="table table-head-fixed text-nowrap">
          <thead>
            <tr>
              <th>ID</th>
              <th>Category Name</th>
              <th>Category Status</th>
              <th>Created at</th>
              <th>Last Update</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
                @foreach ($cats as $cat)
                    <tr>
                        <td>{{$cat->id}}</td>
                        <td>{{$cat->name}}</td>
                        <td>{{$cat->is_active}}</td>
                        <td>{{$cat->created_at}}</td>
                        <td>{{$cat->updated_at}}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-secondary">edit</button>
                                <button type="button" class="btn btn-secondary">Delete</button>
                            </div>
                        </td>
                    </tr> 
                @endforeach            
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
@endsection