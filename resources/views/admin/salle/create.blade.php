@extends('layouts.admin')

@section('content')
<div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Ajouter Salle
                            <a href="{{ url('admin/salle/create') }}" class="btn btn-primary btn-sm text-white float-end">Retour</a>
                        </h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/salle') }}" method="POST">
                            @csrf
                            <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>Code :</label>
                                <input type="text" name="code" class="form-control" />
                                @error('code')<small>{{$message}}</small>@enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Libelle :</label>
                                <input type="text" name="libelle" class="form-control" />
                            </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <button type="submit" class="btn btn-primary float-end">Enregistrer</button>
                            </div>
                    </div>
                        </form>

                    </div>

                </div>
            </div>
</div>
@endsection