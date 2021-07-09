<div>
    <div class="card">
        
        <div class="card-header">
            <input wire:model="search" class="form-control" placeholder="Buscar">
        </div>

        

        @if ($users->count())
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>USUARIO</th>
                            <th>EMAIL</th>  
                            <th>Fecha Inicio</th> 
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>  
                                <td>{{ $user->created_at}}</td> 
                               
                                <td with="10px">
                                    <a href=" {{route('admin.users.edit' ,$user)}} " class="btn btn-primary"> Editar</a>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="card-footer">
                {{$users->links()}}
            </div>

        @else
            <div class="card-body">
                <strong>No hay Registro</strong>
            </div>
        @endif
    </div>
</div>
