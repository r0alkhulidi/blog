@extends('admin.master')
@section('content')
    
    <div class="col-12">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Quick Example</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="{{route('articales.store')}}" >
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="cat_name">Articale Title </label>
                  <input type="text" class="form-control" name="art_title" id="art_title" >
                </div>
                <div class="form-group">
                  <label for="cat_parent">Category</label>
                  <select class="form-control" name="cat_id" id="cat_id">
                      @foreach ($all_cats as $category)
                        <option value="{{$category->id}}" >{{$category->name}}</option> 
                      @endforeach
                  </select>
                </div>
                <div class="form-group">
                    <label>Artical Content</label>
                    <textarea class="form-control" name="art_content" id="art_content" rows="3" placeholder="artical content....."></textarea>
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