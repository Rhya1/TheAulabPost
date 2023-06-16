<x-layout>

    <h1 class="mt-5 mb-5">Dashboard Revisor</h1>

    @if (session('status'))
<div class="alert alert-success" role="alert">
    {{session('status')}}
</div>
@endif

    <h3>Articoli da revisionare</h3>
    <x-articles-table :articles="$pendingArticles"/>
    <hr>
    <h3>Articoli accettati</h3>
    <x-articles-table :articles="$acceptedArticles"/>
    <hr>
    <h3>Articoli rifiutati</h3>
    <x-articles-table :articles="$rejectedArticles"/>

</x-layout>