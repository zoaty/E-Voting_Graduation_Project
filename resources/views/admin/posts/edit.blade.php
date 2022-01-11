<x-admin-master>
  @section('content')

<h1>Edit a post</h1>

<form method="post" action="{{route('post.update', $post->id)}}" enctype="multipart/form-data">
  @csrf
  @method('PATCH')
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" name="title" class="form-control" id="title" value="{{ucfirst($post->title)}}" aria-describedby="" placeholder="Enter Title">
    </div>

    <div class="form-group">

      <div>
        <img height="200px" src="{{$post->post_image}}" alt="">
      </div>

      <label for="file">File</label>
      <input type="file" name="post_image" class="form-control-file" id="post_image" aria-describedby="" placeholder="Enter Title">
    </div>

    <div class="form-group">
      <textarea class="form-control" name="body" id="body" cols="30" rows="10">{{$post->body}}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>


  @endsection
</x-admin-master>