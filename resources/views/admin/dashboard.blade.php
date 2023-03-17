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
    </div>
  
</div>
@endsection
