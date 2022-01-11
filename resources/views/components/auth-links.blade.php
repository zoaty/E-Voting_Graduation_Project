<li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAuth" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Authorizations</span>
        </a>
        <div id="collapseAuth" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Authorizations</h6>
            <a class="collapse-item" href="{{route('roles.index')}}">Roles</a>
            <a class="collapse-item" href="{{route('permissions.index')}}">Permissions</a>
            <a class="collapse-item" @if(auth()->user()->userHasRole('Voted')) hidden @endif href="{{route('vote.index')}}">Vote</a>
            
            <a class="collapse-item" href="{{route('create.topic')}}">Create New Voting</a>
          </div>
        </div>
      </li>