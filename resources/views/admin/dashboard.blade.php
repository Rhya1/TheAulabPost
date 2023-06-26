<x-layout>

<h1 class="mt-5 mb-5">Dashboard Admin</h1>

@if (session('status'))
<div class="alert alert-success" role="alert">
    {{session('status')}}
</div>
@endif

<x-requests-table :roleRequests="$revisorRequests" role="revisor"/>
<x-requests-table :roleRequests="$writerRequests" role="writer"/>

<h3 class="mt-5 mb-5">I nostri Tags</h3>
<x-metainfo-table :metaInfos="$tags" metaType="tags"/>

<h3 class="mt-5 mb-5">Le nostre Categorie</h3>
<x-metainfo-table :metaInfos="$categories" metaType="categories"/>

<h3 class="mt-5 mb-5">Crea nuova Categoria</h3>

<form action="{{route('admin.createCategory')}}" method="POST">
    @csrf
    <input type="text" name="name" class="form-control" placeholder="Inserisci la nuova categoria">
    <button type="submit" class="btn btn-primary pulsante">Crea</button>
</form>


</x-layout>