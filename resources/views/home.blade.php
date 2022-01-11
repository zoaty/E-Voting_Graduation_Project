<x-home-master>

@section('content')
<div class="row">
        <!-- Announcements -->
        @foreach($posts as $post)
        <div class="card my-5">
          <div>
            <img class="border border-dark mt-3" style="width:1114px;" src="{{ asset('Profile-Images/announcement.jpg') }}" alt="announcement-image">
          </div>
          <div class="card-body">
            <h2 class="card-title">{{ucfirst($post->title)}}</h2>
            <p class="card-text">{{Str::limit($post->body, '50', '...')}}</p>
            <a href="{{route('post', $post->id)}}" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on {{$post->created_at->diffForHumans()}}
          </div>
        </div>
        @endforeach

        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
          </li>
        </ul>
</div>

@endsection

</x-home-master>