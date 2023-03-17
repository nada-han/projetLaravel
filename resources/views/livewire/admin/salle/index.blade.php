<div>
    <div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">suppression des salles</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form wire:submit.prevent="destroySalle">
                    <div class="modal-body">
                        <h6>Etes vous sur de supprimer cette salle?</h6>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Oui.Supprimer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

<div class="row">
            <div class="col-md-12">
                @if (session('message'))
                   <div class="alert alert-success">{{session('message')}}</div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h3>Salle
                            <a href="{{ url('admin/salle/create') }}" class="btn btn-primary btn-sm float-end">Ajouter salle</a>
                        </h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Code</th>
                                    <th>Libelle</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($salles as $salle)

                                
                                <tr>
                                    <td>{{$salle->id}}</td>
                                    <td>{{$salle->code}}</td>
                                    <td>{{$salle->libelle}}</td>
                                    <td>
                                        <a href="{{url('admin/salle/'.$salle->id.'/edit')}}" class="btn btn-success">Modifier</a>
                                        <a href="" wire:click="deleteSalle({{$salle->id}})" data-bs-toggle="modal" data-bs-target="#deleteModal" class="btn btn-danger">Supprimer</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                        <div>
                          {{ $salles->links() }}
                        </div>

                    </div>

                </div>
            </div>
</div>
