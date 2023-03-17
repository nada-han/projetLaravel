@extends('layouts.admin')

@section('content')
<div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Editer machine
                            <a href="{{ url('admin/machine') }}" class="btn btn-danger btn-sm text-white float-end">Retour</a>
                        </h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/machine/'.$machine->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>reference :</label>
                                <input type="text" name="reference" value="{{ $machine->reference }}" class="form-control" />
                                @error('reference')<small class="text-danger">{{$message}}</small>@enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>marque :</label>
                                <input type="text" name="marque" value="{{ $machine->marque }}" class="form-control" />
                                @error('marque')<small class="text-danger">{{$message}}</small>@enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>DateAchat :</label>
                                <input type="date" name="dateAchat" value="{{ $machine->dateAchat}}" class="form-control" />
                                @error('dateAchat')<small class="text-danger">{{$message}}</small>@enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>prix :</label>
                                <input type="text" name="prix" value="{{ $machine->prix }}" class="form-control" />
                                @error('prix')<small class="text-danger">{{$message}}</small>@enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>salleid :</label>
                                <input type="text" name="salleid" value="{{ $machine->salleid }}" class="form-control" />
                                @error('salleid')<small class="text-danger">{{$message}}</small>@enderror
                            </div>
                            
                        
                            </div>
                            <div class="col-md-12 mb-3">
                                <button type="submit" class="btn btn-primary float-end">Modifier</button>
                            </div>
                    </div>
                        </form>

                    </div>

                </div>
            </div>
</div>
@endsection