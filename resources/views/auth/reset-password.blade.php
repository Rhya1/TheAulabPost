<x-layout>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <h2 class="card-title text-center">Resetta password</h2>
                    <div class="card-body py-md-4">
                        <form action="{{route('password.update')}}" method="POST">
                            @csrf
                            <input type="hidden" name="token" value="{{$request->route('token')}}">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label"></label>
                                <input type="email" class="form-control campi @error('email') is-invalid @enderror" id="exampleInputEmail" name="email" placeholder="Email" value="{{$request->email}}">
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
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="form-label"></label>
                                <input type="password" class="form-control campi @error('password_confirmation') is-invalid @enderror" name="password_confirmation" id="exampleInputPassword1" placeholder="confirm-password" value="update">
                                @error('password_confirmation')
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