<x-layout>
    
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <h2 class="card-title text-center"></h2>
                    <div class="card-body py-md-4">
                        <form action="{{route('careers.submit')}}" method="POST">
                            @csrf
                            
                            <div class="form-group text-center">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control campi" name="email" value="{{Auth::user()->email}}" readonly required>
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="form-label"></label>
                                <select class="form-select" name="role" aria-label="Default select example" required>
                                    <option selected>Seleziona il tuo ruolo</option>
                                    <option value="writer">Writer</option>
                                    <option value="revisor">Revisor</option>
                                </select>
                            </div>
                            
                            <div class="form-group mt-5 text-center">
                                <label for="msg" class="form-label">Presentati</label>
                                <div class="form-floating">
                                    <textarea class="form-control" name="msg" maxlength="150" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px" required></textarea>
                                    <label for="floatingTextarea">Massimo 150 caratteri</label>
                                </div>
                            </div>

                            <div class="d-flex flex-row align-items-center justify-content-center">
                                <button class="btn btn-primary pulsante mt-5">Enter</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</x-layout>