<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<p>Nouveau message</p>

<ul>
    <li>Date : {{ $date_select }} à {{ $hour_select }}</li>
    <li>Email : {{ $email }}</li>
    <li>Annulation : <a href="http://127.0.0.1:8000/reservation/annulation/{{$token}}">Annuler votre rendez-vous</a></li>
</ul>
</body>

</html>
