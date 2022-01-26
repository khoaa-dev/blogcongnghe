@extends('admin.template-default')

@section('content')
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="status">
            @if (session('status'))
              <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif
          </div>
          <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">
                Form add post
              </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
                </div>
                <div class="form-group">
                  <label>Category</label>
                  <select id="category" name="category" class="form-control">
                    @foreach ($categories as $category)
                      <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Sub Category</label>
                  <select id="subCategory" name="subCategory" class="form-control">
                    
                  </select>
                </div>
                <div class="form-group">
                  <label for="content">Content</label>
                  <textarea id="content" name="content" cols="30" rows="10"> 
                    
                  </textarea>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
              
            </div>
            <div class="card-footer">
              <a href="">Khoa dep trai</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('js')
  <script>
    $(function () {
    // Summernote
    $('#content').summernote()
  }) 
  </script> 
  <script>
    $(document).ready(function() {
      $('#category').on('change', function(e) {
        e.preventDefault();
        var categoryId = $('#category option').filter(':selected').val();
        var _token = $('input[name=_token]').val();
        $.ajax({
          url: '{{ route('getSubCategory') }}',
          method: 'POST',
          data: {
            categoryId: categoryId,
            _token: _token
          },
          dataType: "JSON",
          success: function(data) {
              $('#subCategory').html(data);
          }
        });
      });
    });
  </script> 
@endsection