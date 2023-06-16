<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Richiesta</title>
</head>
<body>
    
<body>
    <div>
        <div>
            <h1>Abbiamo ricevuto una richiesta</h1>
            <p><small>Ruolo richiesto {{$info['role']}}</small>
            <p><small>Ricevuta da {{$info['email']}}</small>

            </p>
        </div>
        <div>
            <h4>Messaggio :</h4>
            <p><small>{{$info['msg']}}</small>
        </div>
    </div>
</body>
</html>