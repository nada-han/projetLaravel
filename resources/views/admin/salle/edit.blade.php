@extends('layouts.admin')

@section('content')
<div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Editer Salle
                            <a href="{{ url('admin/salle') }}" class="btn btn-danger btn-sm text-white float-end">Retour</a>
                        </h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/salle/'.$salle->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>Code :</label>
                                <input type="text" name="code" value="{{ $salle->code }}" class="form-control" />
                                @error('code')<small class="text-danger">{{$message}}</small>@enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Libelle :</label>
                                <input type="text" name="libelle" value="{{ $salle->libelle }}" class="form-control" />
                                @error('libelle')<small class="text-danger">{{$message}}</small>@enderror
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