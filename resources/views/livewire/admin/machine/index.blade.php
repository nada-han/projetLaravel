
<div>
    <div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">suppression des machines</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form wire:submit.prevent="destroyMachine">
                    <div class="modal-body">
                        <h6>Etes vous sur de supprimer cette machine?</h6>
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
                        <h3>Machine
                            <a href="{{ url('admin/machine/create') }}" class="btn btn-primary btn-sm float-end">Ajouter machine</a>
                        </h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Reference</th>
                                    <th>Marque</th>
                                    <th>DateAchat</th>
                                    <th>Prix</th>
                                    <th>Salleid</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($machines as $machine)

                                
                                <tr>
                                    <td>{{$machine->id}}</td>
                                    <td>{{$machine->reference}}</td>
                                    <td>{{$machine->marque}}</td>
                                    <td>{{$machine->dateAchat}}</td>
                                    <td>{{$machine->prix}}</td>
                                    <td>{{$machine->salleid}}</td>
                                    <td>
                                        <a href="{{url('admin/machine/'.$machine->id.'/edit')}}" class="btn btn-success">Modifier</a>
                                        <a href="" wire:click="deleteMachine({{$machine->id}})" data-bs-toggle="modal" data-bs-target="#deleteModal" class="btn btn-danger">Supprimer</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                        <div>
                          {{ $machines->links() }}
                        </div>

                    </div>

                </div>
            </div>
</div>
