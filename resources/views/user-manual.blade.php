<x-home-master>
    @section('content')
    <div class="container">
      <h1 class="h3 mb-4 display-2 text-gray-800">User Manual</h1>

        <div class="row">
          <div class="col">
            <img src="{{ asset('Profile-Images/USER MANUAL-1.jpg') }}" alt="user-manual-image">
            <img src="{{ asset('Profile-Images/USER MANUAL-2.jpg') }}" alt="user-manual-image">
            <img src="{{ asset('Profile-Images/USER MANUAL-3.jpg') }}" alt="user-manual-image">

            <div class="embed-responsive embed-responsive-16by9">
              <iframe
                width="560" height="315" src="https://www.youtube.com/embed/P1C3DAHaGxI" title="YouTube video player"
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media;
                gyroscope; picture-in-picture" allowfullscreen>
              </iframe>
            </div>

          </div>
        </div>
    </div>
    @endsection
</x-home-master>