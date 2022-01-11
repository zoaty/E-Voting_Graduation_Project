<x-admin-master>

  @section('content')
  
    <h1>User Profile For: {{$user->name}}</h1>

    <div class="row">
      <div class="col-sm-6">
        <form method="post" action="{{route('user.profile.update', $user)}}" enctype="multipart/form-data">
          @csrf
          @method('PUT')

          <div class="mb-4">
            <img class="img-profile rounded-circle" src="{{$user->avatar}}" alt="pp">
          </div>

          <div class="form-group @error('avatar') is-invalid @enderror">
            <input type="file" name="avatar">

            @error('avatar')
              <div class="invalid-feedback">{{$message}}</div>
            @enderror
          </div>


            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{$user->name}}">
              
              @error('name')
                <div class="invalid-feedback">{{$message}}</div>
              @enderror
            </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{$user->email}}">
          
            @error('email')
              <div class="invalid-feedback">{{$message}}</div>
            @enderror
          </div>

          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password">
          </div>

          
          <div class="form-group">
            <label for="password-confirmation">Confirm Password</label>
            <input type="password" name="password-confirmation" class="form-control" id="password-confirmation">
          </div>
          <!-- {{$user->id}} {{Request::segment(3)}} FOR CHECKING USER ID-->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>

    
    @if(auth()->user()->userHasRole('Admin'))
      <div class="row">
        <div class="col-sm-12">
          <h1>ROLES</h1>

          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

            <thead>
              <tr>
                <th>Select</th>
                <th>Id</th>
                <th>Name</th>
                <th>Slug</th>
                <th>Detach</th>
                <th>Attach</th>
              </tr>
            </thead>

            <tfoot>
              <tr>
                <th>Select</th>
                <th>Id</th>
                <th>Name</th>
                <th>Slug</th>
                <th>Detach</th>
                <th>Attach</th>
              </tr>
            </tfoot>

            <tbody>@foreach($roles as $role)<tr>
                  <td><input type="checkbox" @foreach($user->roles as $user_role) @if($user_role->slug == $role->slug) checked @endif @endforeach>.</td>
                  <td>{{$role->id}}</td>
                  <td>{{$role->name}}</td>
                  <td>{{$role->slug}}</td>
                  <td>
                    <form method='post' action="{{route('user.role.attach', $user)}}">
                      @csrf
                      @method('PUT')
                      <input type="hidden" name="role" value="{{$role->id}}">
                      <button class="btn btn-primary" @if($user->roles->contains($role)) disabled @endif>Attach</button>
                    </form>
                  </td>
                  <td>
                    <form method='post' action="{{route('user.role.detach', $user)}}">
                      @csrf
                      @method('PUT')
                      <input type="hidden" name="role" value="{{$role->id}}">
                      <button class="btn btn-danger" @if(!$user->roles->contains($role)) disabled @endif>Detach</button>
                    </form></td>
                </tr>
              @endforeach
            </tbody>

          </table>

        </div>
      </div>
    @endif
  @endsection

</x-admin-master>