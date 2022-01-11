<x-admin-master>

  @section('content')
  <div class="row">
    <div class="col-sm-6">
      <h1>Edit Role {{$role->name}}</h1>

      <form method="post" action="{{route('roles.update', $role->id)}}">
        @csrf
        @method('PUT')

        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" name="name" id="name" value="{{$role->name}}">
        </div>

        <button class="btn btn-primary">Update</button>
      </form>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4">

          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Permissions</h6>
          </div>

          <div class="card-body">
            <div class="table-responsive">
                <table id="dataTable" class="table table-bordered" width="100%" cellspacing="0">
                  <thead>
                      <tr>
                        <th>Select</th>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Attach</th>
                        <th>Detach</th>
                      </tr>
                  </thead>

                  <tbody>
                    @foreach($permissions as $permission)
                      <tr>
                        <td><input type="checkbox"
                                                  @foreach($role->permissions as $role_permission)

                                                    @if($role_permission->slug == $permission->slug)
                                                      checked
                                                    @endif

                                                  @endforeach
                        ></td>
                        <td>{{$permission->id}}</td>
                        <td>{{$permission->name}}</td>
                        <td>{{$permission->slug}}</td>
                        <td>
                          <form method='post' action="{{route('role.permission.attach', $role)}}">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="permission" value="{{$permission->id}}">
                            <button class="btn btn-primary" @if($role->permissions->contains($permission)) disabled @endif>Attach</button>
                          </form>
                        </td>
                        <td>
                          <form method='post' action="{{route('role.permission.detach', $role)}}">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="permission" value="{{$permission->id}}">
                            <button class="btn btn-danger" @if(!$role->permissions->contains($permission)) disabled @endif>Detach</button>
                          </form>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>

                  <tfoot>
                      <tr>
                        <th>Select</th>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Attach</th>
                        <th>Detach</th>
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