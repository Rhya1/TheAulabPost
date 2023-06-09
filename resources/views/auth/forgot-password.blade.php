<x-layout>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <h2 class="card-title text-center">Resetta password</h2>

                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{session('status')}}
                    </div>
                    @endif
                    <div class="card-body py-md-4">
                        <form action="{{route('password.request')}}" method="POST">
                            @csrf
                            
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label"></label>
                                <input type="email" class="form-control campi @error('email') is-invalid @enderror" id="exampleInputEmail" name="email" placeholder="Email">
                                @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="d-flex flex-row align-items-center justify-content-center">
                                <button class="btn btn-primary pulsante">Reset</button>
                            </div>
                            @if(Route::has('password.request'))
                            <a class="btn btn-link" href="{{route('password.request')}}">
                                {{ __('Password dimenticata?')}}
                            </a>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</x-layout>