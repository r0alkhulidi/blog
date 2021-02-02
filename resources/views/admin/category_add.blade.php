@extends('admin.master')
@section('content')
    
    <div class="col-12">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Quick Example</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="{{route('categories.store')}}" >
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="cat_name">Category Name</label>
                  <input type="text" class="form-control" name="cat_name" id="cat_name" >
                </div>
                <div class="form-group">
                  <label for="cat_parent">Parent</label>
                  <select class="form-control" name="cat_parent" id="cat_parent">
                      <option value=0>Main category</option>
                      @foreach ($all_cats as $category)
                        <option value="{{$category->id}}" >{{$category->name}}</option> 
                      @endforeach
                  </select>
                </div>
                <div class="form-check">
                  <input type="checkbox" name="is_active" class="form-check-input" >
                  <label class="form-check-label" for="exampleCheck1">is active</label>
                </div>
               
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
    <!-- /.card -->
    </div>
@endsection