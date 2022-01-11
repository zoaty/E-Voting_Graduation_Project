<x-admin-master>

  @section('content')

    <h1>Users</h1>

    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Avatar</th>
          <th>Register Date</th>
          <th>Profile Update Date</th>
        </tr>
      </thead>

      <tfoot>
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Avatar</th>
          <th>Register Date</th>
          <th>Profile Update Date</th>
        </tr>
      </tfoot>

      <tbody>

      @foreach($users as $user)
        <tr>
          <td>{{$user->id}}</td>
          <td><a href="#">{{$user->name}}</a></td>
          <td>{{$user->avatar}}</td>
          <td>{{$user->created_at->diffForHumans()}}</td>
          <td>{{$user->updated_at->diffForHumans()}}</td>
        </tr>
      @endforeach
      
      </tbody>
    </table>

  @endsection


  @section('scripts')

    <!-- Page level plugins -->
  <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
  <script>src="{{asset('js/demo/datatables-demo.js')}}"</script>
  
  @endsection

</x-admin-master>