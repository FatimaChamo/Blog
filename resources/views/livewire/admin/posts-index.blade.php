<div class="card">
    {{$posts->count()}}

    <div class="card-header">
        <input wire:model="search" type="text" class="form-control" placeholder="Ingrese el nombre de un post">
    </div>
    
    @if ($posts->count())
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>STATUS</th>
                    <td colspan="2"></td>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>
                            {{$post->name}}
                        </td>
                        
                        <td>
                                    

                            {{-- {{$post->status== 1?"Inactivo":"Activo"}} --}}
                              @if ($post->status == '1')
                                <small class="badge badge-danger" {{$post->status}} >Borrador</small> 
                            @else
                                 <small class="badge badge-success" {{$post->status}} >Publicado</small>
                            @endif  
                        </td>
                        <td width="10px">
                            <a href="{{route('admin.posts.edit', $post)}}" class="btn btn-primary btn-sm">Editar</a>
                        </td>
                        <td width="10px">
                            <form action="{{route('admin.posts.destroy', $post)}}" method="post">  
                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger btn-sm" type="submit">
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>

        </table>
    </div>
    <div class="card-footer">
        {{$posts->links()}}
    </div>
    @else
        <div class="card-body">
            <strong>No hay registro</strong>
        </div>
    
    @endif
    
</div>
