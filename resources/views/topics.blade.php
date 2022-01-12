<x-admin-master>
  @section('content')
    <div class="mt-3">

      <table class="table table-bordered" id="dataTable" style="font-size:30px;" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Vote Name</th>
            <th>Status</th>
            <th>Time Left</th>
          </tr>
        </thead>

        <tfoot>
          <tr>
            <th>Vote Name</th>
            <th>Status</th>
            <th>Time Left</th>
          </tr>
        </tfoot>

        <tbody style="font-size:25px;">
          <tr>
            <td> <a style="text-decoration:none;" href="{{route('vote.index')}}">Vote Name</a> </td>
            <td>Going to show the status of the voting. Ongoing or Finished</td>
            <td>Going to show the time left for the voting</td>
          </tr>
          <tr>
            <td> <a style="text-decoration:none;" href="{{route('vote.index')}}">Vote Name</a> </td>
            <td>Going to show the status of the voting. Ongoing or Finished</td>
            <td>Going to show the time left for the voting</td>
          </tr>
          <tr>
            <td> <a style="text-decoration:none;" href="{{route('vote.index')}}">Vote Name</a> </td>
            <td>Going to show the status of the voting. Ongoing or Finished</td>
            <td>Going to show the time left for the voting</td>
          </tr>
          <tr>
            <td> <a style="text-decoration:none;" href="{{route('vote.index')}}">Vote Name</a> </td>
            <td>Going to show the status of the voting. Ongoing or Finished</td>
            <td>Going to show the time left for the voting</td>
          </tr>
        </tbody>
      </table>
      
    </div>
  @endsection
</x-admin-master>