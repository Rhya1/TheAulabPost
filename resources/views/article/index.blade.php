<x-layout>
    
    <div class="container-fluid mt-5 p-5 text-center">
        <div class="row justify-content-center">
            <h1>Tutti gli articoli</h1>
        </div>
    </div>
    <div class="container col-4">
        <div class="row">
            @foreach ($articles as $article)
            <div class="card text-center border-0">
                <div class="card-body shadow-lg">
                    <div class="card-card-avatar mb-4">
                        <div class="card-avatar avatar-border two">
                            <img class="card-img-top" src="{{Storage::url($article->image)}}" alt="img" width="200" height="400">
                        </div>
                    </div>
                    <div class="mb-5">
                        <h5 class="card-title mb-1">{{$article->title}}</h5>
                        <div class="text-muted">{{$article->subtitle}}</div>
                        @if($article->category)
                        <p class="small text-muted fst-italic text-capitalize">{{$article->category->name}}</p>
                        @else
                        <p class="small text-muted fst-italic text-capitalize">Nessuna Categoria</p>
                        @endif
                    </div>
                    <p class="small text-muted fst-italic text-capitalize">Tempo di lettura :{{$article->readDuration()}}</p>
                    <div class="text-muted">
                        Redatto il {{$article->created_at->format('d/m/y')}} da {{$article->user->name}}
                    </div>
                    <a href="{{route('article.show', compact('article'))}}" class="btn btn-primary mt-3">Leggi</a>            
                </div>
                
                @endforeach
            </div>
        </div>
        
    </x-layout>