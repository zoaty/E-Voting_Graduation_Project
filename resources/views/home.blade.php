<x-home-master>

@section('content')
<div class="row">
<div class="col-4 mt-5">
        <img src="{{ asset('Profile-Images/1.jpeg') }}" alt="homepage-design">
      </div>

      <div class="col mt-5 text-center" style="font-size:30px; font-weight:650;">
        <p>Welcome to Cyprus E-Voting Website.</p>
        <p>This website serves as an online voting system where you can cast your vote safely.</p>
      </div>
    </div>

    <div class="row mt-3 border">
      <div class="col mt-5 text-center" style="font-size:30px; font-weight:650;">
        <p>Easy to vote.</p>
        <p>Just login and cast your vote!</p>
      </div>

      <div class="col-4 mt-5">
          <img src="{{ asset('Profile-Images/2.jpeg') }}" alt="homepage-design">
      </div>
    </div>

    <div class="row mt-3 border">
      <div class="col-4 mt-5">
        <img src="{{ asset('Profile-Images/3.jpeg') }}" alt="homepage-design">
      </div>

      <div class="col mt-5 text-center" style="font-size:30px; font-weight:650;">
        <p>Safe.</p>
        <p>Lots of security precautions to secure your vote.</p>
      </div>
    </div>
    
    <div class="row mt-3 border">
      <div class="col mt-5 text-center" style="font-size:30px; font-weight:650;">
        <p>Simple to use.</p>
        <p>We tried to design a simple website for everyone to use.</p>
        <p>If you have issues, you can have a look at the user manual!</p>
      </div>

      <div class="col-4 mt-5">
          <img src="{{ asset('Profile-Images/4.jpeg') }}" alt="homepage-design">
      </div>

    </div>
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