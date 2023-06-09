<x-layout>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    @if(session('status'))
                    <div class="alert alert-success mt-5" role="alert">
                        {{session('status')}}
                    </div>
                    @endif

                    <h2 class="card-title text-center mt-5">Ti abbiamo inviato una e-mail di verifica, controlla nel tuo indirizzo di posta.</h2>
                    <div class="card-body py-md-4">
                        <form action="{{route('verification.send')}}" method="POST">
                            @csrf
                            
                            <div class="d-flex flex-row align-items-center justify-content-center">
                                <input type="submit" class="btn btn-primary pulsante" value="Reinvia e-mail">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</x-layout>