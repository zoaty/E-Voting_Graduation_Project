<x-admin-master>
    @section('content')

      <h1>All Announcements</h1>

      @if(Session::has('message'))
      <div class="alert alert-danger">{{Session::get('message')}}</div>

      @elseif(session('post-created-message'))
      <div class="alert alert-success">{{Session::get('post-created-message')}}</div>
      @elseif(session('post-updated-message'))
      <div class="alert alert-success">{{Session::get('post-updated-message')}}</div>
      @endif

      <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Announcements</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Title</th>
                      <th>Owner</th>
                      <th>Image</th>
                      <th>Created at</th>
                      <th>Updated at</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  
                  <tfoot>
                    <tr>
                      <th>Id</th>
                      <th>Title</th>
                      <th>Owner</th>
                      <th>Image</th>
                      <th>Created at</th>
                      <th>Updated at</th>
                      <th>Delete</th>
                    </tr>
                  </tfoot>
                  
                  <tbody>
                  @foreach($posts as $post)
                    <tr>
                      <td>{{$post->id}}</td>
                      <td><a href="{{route('post.edit', $post->id)}}">{{ucfirst($post->title)}}</a></td>
                      <td>{{$post->user->name}}</td>
                      <td><img height="40px" src="{{$post->post_image}}" alt=""></td>
                      <td>{{$post->created_at->diffForHumans()}}</td>
                      <td>{{$post->updated_at->diffForHumans()}}</td>
                      <td>
                        @can('view', $post)
                        <form method="post" action="{{route('post.destroy', $post->id)}}">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger">DELETE</button>
                        </form>
                        @endcan
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                
                </table>
              </div>
            </div>
          </div>

        <div class="d-flex">
          <div class="mx-auto">
            {{$posts->links()}}
          </div>
        </div>
    @endsection

    @section('scripts')
    <!-- Page level plugins -->
  <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

  <!-- Page level custom scripts -->
  
    @endsection
</x-admin-master>