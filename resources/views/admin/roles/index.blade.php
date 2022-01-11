<x-admin-master>

  @section('content')

    <div class="row">
      @if(Session::has('role-deleted'))
        <div class="alert alert-danger">
          <strong>{{session('role-deleted')}}</strong>
        </div>

      @elseif(Session::has('role-updated'))
        <div class="alert alert-success">
          <strong>{{session('role-updated')}}</strong>
        </div>
      @endif
    </div>

    <div class="row">
      <div class="col-sm-3">
        <form method="post" action="{{route('roles.store')}}">
          @csrf
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror">

              <div>
                @error('name')
                <span><strong>{{$message}}</strong></span>
                @enderror
              </div>
            </div>

            <button class="btn btn-primary" type="submit">Create</button>
        </form>
      </div>

      <div class="col-sm-9">
        <div class="card shadow mb-4">

          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Roles</h6>
          </div>

          <div class="card-body">
            <div class="table-responsive">
                <table id="dataTable" class="table table-bordered" width="100%" cellspacing="0">
                  <thead>
                      <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Delete</th>
                      </tr>
                  </thead>

                  <tbody>
                    @foreach($roles as $role)
                      <tr>
                          <td>{{$role->id}}</td>
                          <td><a href="{{route('roles.edit', $role->id)}}">{{$role->name}}</a></td>
                          <td>{{$role->slug}}</td>
                          <td>
                            <form method='post' action="{{route('roles.destroy', $role->id)}}">
                              @csrf
                              @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                          </td>
                      </tr>
                    @endforeach
                  </tbody>

                  <tfoot>
                      <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Delete</th>
                      </tr>
                  </tfoot>
                </table>
            </div>
          </div>

        </div>
      </div>

    </div>
  @endsection

</x-admin-master>