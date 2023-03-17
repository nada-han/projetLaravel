@extends('layouts.admin')

@section('content')
<div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Ajouter Machine
                            <a href="{{ url('admin/machine/create') }}" class="btn btn-primary btn-sm text-white float-end">Retour</a>
                        </h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/machine') }}" method="POST">
                            @csrf
                            <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>Reference :</label>
                                <input type="text" name="reference" class="form-control" />
                            </div>
                            @error('reference') <small class="text-danger">{{$message}}</small> @enderror
                            <div class="col-md-6 mb-3">
                                <label>Marque :</label>
                                <input type="text" name="marque" class="form-control" />
                            </div>
                            @error('marque') <small class="text-danger">{{$message}}</small> @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Date de l'achat :</label>
                                <input type="date" name="dateAchat" class="form-control" />
                            </div>
                            @error('date') <small class="text-danger">{{$message}}</small> @enderror
                            
                            <div class="col-md-6 mb-3">
                                <label>Prix :</label>
                                <input type="text" name="prix" class="form-control" />
                            </div>
                            @error('prix') <small class="text-danger">{{$message}}</small> @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Salle id :</label>
                                <input type="text" name="salleid" class="form-control" />
                            </div>
                            @error('prix') <small class="text-danger">{{$message}}</small> @enderror
                            
                            <div class="col-md-12 mb-3">
                                <button type="submit" class="btn btn-primary float-end">Enregistrer</button>
                            </div>
                            </div>
                            </div>
                          </div>
                        </form>

                    </div>

                </div>
            </div>
</div>
@endsection