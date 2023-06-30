<x-layout>

<h1 class="mt-5">Dashboard Writer</h1>

<div>
    @if (session('status'))
    <div class="alert alert-success text-center" role="alert">{{session('status')}}</div>
    @endif
</div>

<h4 class="mt-3">Articoli accettati</h4>
<x-writer-articles-table :articles="$acceptedArticles"/>

<h4 class="mt-3">Articoli rifiutati</h4>
<x-writer-articles-table :articles="$rejectedArticles"/>

<h4 class="mt-3">Articoli sospesi</h4>
<x-writer-articles-table :articles="$pendingArticles"/>

</x-layout>