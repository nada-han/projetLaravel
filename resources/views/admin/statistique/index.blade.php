@extends('layouts.admin')

@section('content')
<div class="row">
  
    @if(session('message'))
      <h6 class="alert alert-success">{{ session('message') }}</h6>
    @endif
    <div class="d-flex">
      <h2>Dashboard</h2>
    </div>
    <div class="row">
      <div class="col-md-3">
        <div class="card card-body bg-primary text-white mb-3">
          <label>Total Salles</label>
          <h1> {{$totalSalles}}</h1>
          <a href="{{url('admin/salle')}}" class="text-white">view</a> 
        </div>
      </div>
      <div class="col-md-3">
        <div class="card card-body bg-success text-white mb-3">
          <label>Total machines</label>
          <h1> {{$totalMachines}}</h1>
          <a href="{{url('admin/machine')}}" class="text-white">view</a> 
        </div>
      </div>
      <hr>
      <div class="col-md-6">
        <canvas id="myChart" width="900" height="400"></canvas>
      </div>
    </div>
  
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>

<script type="text/javascript">
  
  var ctx = document.getElementById("myChart");
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: {!! json_encode($salleCode) !!},
      datasets: [
        { label: 'Nombre de machines par salles',
          data: {!! json_encode($machinesParSalle) !!},
          backgroundColor : 'rgba(54, 162, 235, 0.2)',
          borderColor: 'rgba(54, 162, 235, 1)',
          borderWidth : 1
        }
      ]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero:true,
            stepSize: 1
          }
        }]
      }
    }
  });

</script>
@endsection