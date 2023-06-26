<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome Tag</th>
        <th scope="col">Articoli collegati</th>
        <th scope="col">Aggiorna</th>
        <th scope="col">Elimina</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($metaInfos as $metaInfo)
             <tr>
        <th scope="row">{{$metaInfo->id}}</th>
        <td>{{$metaInfo->name}}</td>
        <td>{{count($metaInfo->articles)}}</td>

         @if($metaType =='tags')     
        <td>
            <form action="{{route('admin.editTag', ['tag'=>$metaInfo])}}" method="POST">
              @csrf
              @method('PUT')
                <input class="form-control me-2" name="name" type="text" placeholder="Nuovo Tag">
                <button class="btn btn-primary" type="submit">Aggiorna</button>
            </form>
        </td>

        <td>
            <form action="{{route('admin.deleteTag', ['tag'=>$metaInfo])}}" method="POST">
              @csrf
              @method('DELETE')
                <button class="btn btn-danger" type="submit">Elimina</button>
            </form>
        </td>

        @else

<td>
            <form action="{{route('admin.editCategory',['category'=>$metaInfo])}}" method="POST">
              @csrf
              @method('PUT')
                <input class="form-control me-2" name="name" type="text" placeholder="Nuova Categoria">
                <button class="btn btn-primary" type="submit">Aggiorna Categoria</button>
            </form>
        </td>

        <td>
            <form action="{{route('admin.deleteCategory',['category'=>$metaInfo])}}" method="POST">
              @csrf
              @method('DELETE')
                <button class="btn btn-danger" type="submit">Elimina Categoria</button>
            </form>
        </td>

        @endif
      </tr>
        @endforeach
     
    </tbody>
  </table>