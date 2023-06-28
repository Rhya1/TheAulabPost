<x-layout>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <h2 class="card-title text-center">Login</h2>
                    <div class="card-body py-md-4">
                        <form action="{{route('login')}}" method="POST">
                            @csrf
                            
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label"></label>
                                <input type="email" class="form-control campi @error('email') is-invalid @enderror" id="exampleInputEmail" name="email" placeholder="Email">
                                @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="form-label"></label>
                                <input type="password" class="form-control campi @error('password') is-invalid @enderror" name="password" id="exampleInputPassword1" placeholder="Password">
                                @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Ricordati di me</label>
                                <input type="checkbox" name="remember">
                            </div>
                            
                            <div class="d-flex flex-row align-items-center justify-content-center">
                                <button class="btn btn-primary pulsante">Enter</button>
                            </div>
                            @if(Route::has('password.request'))
                            <a class="btn btn-link" href="{{route('password.request')}}">
                                {{ __('Password dimenticata?')}}
                            </a>
                            @endif
                            <div class="d-flex justify-content-start">
                                <a class="btn btn-link" href="{{ url('auth/google') }}">Accedi con Google</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</x-layout>