<x-admin-master>

  @section('content')
  <div class="row">
    <div class="col-sm-6">
      <h1>Edit Permission {{$permission->name}}</h1>

      <form method="post" action="{{route('permissions.update', $permission->id)}}">
        @csrf
        @method('PUT')

        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" name="name" id="name" value="{{$permission->name}}">
        </div>

        <button class="btn btn-primary">Update</button>
      </form>
    </div>
  </div>

  @endsection

</x-admin-master>