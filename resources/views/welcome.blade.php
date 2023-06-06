<x-layout>

<div class="container-fluid p-5 text-center">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <h1 class="display-1">The Aulab Post</h1>
        </div>
    </div>
</div>

<div>
    @if (session('message'))
    <div class="alert alert-success text-center" role="alert">{{session('message')}}</div>
    @endif
</div>
    
</x-layout>