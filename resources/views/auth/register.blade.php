<x-layout>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <h2 class="card-title text-center">Register</h2>
                    <div class="card-body py-md-4">
                        <form action="{{route('register')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputName1" class="form-label"></label>
                                <input type="text" class="form-control campi @error('name') is-invalid @enderror" id="exampleInputName1" name="name" placeholder="Username">
                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
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
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="form-label"></label>
                                <input type="password" class="form-control campi @error('password_confirmation') is-invalid @enderror" name="password_confirmation" id="exampleInputPassword1" placeholder="confirm-password">
                                @error('password_confirmation')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="d-flex flex-row align-items-center justify-content-center">
                                <button class="btn btn-primary pulsante">Create Account</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</x-layout>