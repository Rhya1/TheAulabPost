<x-layout>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <h2 class="card-title text-center">Inserisci Articolo</h2>
                    <div class="card-body py-md-4">
                        <form action="{{route('article.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="form-group">
                                <label for="exampleInputTitle1" class="form-label"></label>
                                <input type="text" class="form-control campi @error('title') is-invalid @enderror" id="exampleInputTitle" name="title" placeholder="Titolo">
                                @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputSubtitle1" class="form-label"></label>
                                <input type="text" class="form-control campi @error('subtitle') is-invalid @enderror" id="exampleInputSubtitle" name="subtitle" placeholder="Sottotitolo">
                                @error('subtitle')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputImage1" class="form-label"></label>
                                <input type="file" class="form-control campi @error('image') is-invalid @enderror" id="exampleInputImage" name="image" placeholder="Immagine">
                                @error('image')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputCategory1" class="form-label"></label>
                                <select name="category" id="category" class="form-control  @error('category') is-invalid @enderror">

                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                                @error('Category')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputBody1" class="form-label"></label>
                                <textarea class="form-control campi @error('body') is-invalid @enderror" id="exampleInputBody" name="body" cols="30" rows="7" placeholder="Testo"></textarea>
                                @error('body')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputBody1" class="form-label">Tags</label>
                                <input class="form-control campi " name="tags" id="tags" value="{{old('tags')}}" placeholder="Inserisci i tags separati da una virgola">
                            </div>
                            
                            
                            
                            <div class="d-flex flex-row align-items-center justify-content-center">
                                <button class="btn btn-primary pulsante">Inserisci</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>