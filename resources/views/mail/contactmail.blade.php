<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email di conferma</title>
</head>
<body>
    

<h1>Ciao {{$username}}</h1>
    <p>Grazie per averci contattato</p>
    <p>Questi sono i tuoi Dati</p>
    <ul>
        <li>email:{{$usermail}}</li>
        <li>il tuo messaggio : {{$usermessage}}</li>
    </ul>




</body>
</html>