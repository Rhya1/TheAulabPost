<x-layout>
    
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <h2 class="card-title text-center">{{$article->title}}</h2>
                    <div class="card-body py-md-4">
                        <div class="form-group">
                            <img src="{{Storage::url($article->image)}}" alt="img" style="width:100%">
                            <h5 class="card-title">{{$article->subtitle}}</h5>
                        </div>
                        <div class="form-group mt-4">
                            <p class="card-text">{{$article->body}}</p>
                        </div>
                        <div class="d-flex flex-row align-items-center justify-content-center mt-3">
                            <a href="{{route('article.index')}}" class="btn btn-primary pulsante">Torna indietro</a>
                        </div>
                        <div class="d-flex flex-row align-items-center justify-content-center mt-3">
                               @if (Auth::user() && Auth::user()->is_revisor)
                               <hr>
                               <a href="{{route('revisor.acceptArticle', compact('article'))}}" class="btn btn-success">Accetta articolo</a>
                               <a href="{{route('revisor.rejectArticle', compact('article'))}}" class="btn btn-danger">Rifiuta articolo</a>
                            @endif
                        </div>
                     

                    </div>
                </div>
            </div>
        </div>
    </div>
    
</x-layout>