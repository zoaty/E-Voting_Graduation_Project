<x-admin-master>
  @section('content')
    <h1>Votes</h1>

    <!-- <div class="col">
      @foreach($datas as $data)
        <div class="d-inline-flex">
          <h1 class="mr-3">{{$data->candidate_name}}</h1>
        </div>
      @endforeach
    </div>

  <div class="d-flex flex-column">
    <h3 class="border border-dark mt-3 mb-3">Votes for Candidate One is <strong>{{$candidateOne}}</strong></h3>

    <h3 class="border border-dark mt-3 mb-3">Votes for Candidate Two is <strong>{{$candidateTwo}}</strong></h3>

    <h3 class="border border-dark mt-3 mb-3">Votes for Candidate Three is <strong>{{$candidateThree}}</strong></h3>

    <h3 class="border border-dark mt-3 mb-3">Votes for Candidate Four is <strong>{{$candidateFour}}</strong></h3>

    <h3 class="border border-dark mt-3 mb-3">Votes for Candidate Dogancan is <strong>{{$candidateFive}}</strong></h3>
  </div> -->
  <div class="container">
        <h2 style="text-align: center;">Voting Results</h2>
        <div class="panel panel-primary">
            <div class="panel-heading">Voting Results</div>
            <div class="panel-body">
                <div id="pie-chart"></div>
            </div>
        </div>
    </div>

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script>
        $(function() {
            Highcharts.chart('pie-chart', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie'
                },
                title: {
                    text: 'Votes for each candidate'
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                accessibility: {
                    point: {
                        valueSuffix: '%'
                    }
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                        }
                    }
                },
                series: [{
                    data: <?= $value ?>
                }]
            });
        });
    </script>

    <div class="col">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Candidate Name</th>
            <th>Voted For</th>
            <th>Date</th>
          </tr>
        </thead>

        <tfoot>
          <tr>
            <th>Candidate Name</th>
            <th>Voted For</th>
            <th>Date</th>
          </tr>
        </tfoot>

        <tbody>

        @foreach($datas as $data)
          <tr>
            <td>{{$data->voted_candidate}}</td>
            <td>{{$data->voted_for}}</td>
            <td>{{$data->created_at}}</td>
          </tr>
        @endforeach
        
        </tbody>
      </table>
    </div>
  @endsection
</x-admin-master>