<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="create" method="POST">
        @csrf
        <input type="text" name="nom" placeholder="nom">
        <select name="genre" >
            <option value="">--Please pick your gender--</option>
            <option value="male">male</option>
            <option value="female">female</option>
        </select>
        <input type="email" name="email" placeholder="email">
        <input type="number" name="age" placeholder="age">
        <input type="submit" value="envoyer">
    </form>

    <section>
        <h1>world</h1>
        @foreach ($eleves as $eleve )
        @if ($eleve->age > 24)
        <p style="color:purple">{{$eleve->nom}}, {{$eleve->age}}</p>
        @elseif($eleve->age == 22 || $eleve->age == 23)
        <p style="color:blue">{{$eleve->nom}}, {{$eleve->age}}</p>
        @else
        <p>{{$eleve->nom}}, {{$eleve->age}}</p>
        @endif

    @endforeach
    </section>
    <section>
        <h1>men</h1>
        @foreach ($males as $male )
        @if ($male->age > 24)
        <p style="color:purple">{{$male->nom}}, {{$male->age}}</p>
        @elseif($male->age == 22 || $male->age == 23)
        <p style="color:blue">{{$male->nom}}, {{$male->age}}</p>
        @else
        <p>{{$male->nom}}, {{$male->age}}</p>
        @endif
        @endforeach
    </section>
    <section>
        <h1>women</h1>
        @foreach ($females as $female )
        @if ($female->age > 24)
        <p style="color:purple">{{$female->nom}}, {{$female->age}}</p>
        @elseif($female->age == 22 || $female->age == 23)
        <p style="color:blue">{{$female->nom}}, {{$female->age}}</p>
        @else
        <p>{{$female->nom}}, {{$female->age}}</p>
        @endif

        @endforeach
    </section>

</body>
</html>
