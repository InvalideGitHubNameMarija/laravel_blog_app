<style>
body{
    background-color: #00539cff;
}

#lista {
    background: #3399ff;
    padding: 4px;
    text-align: center;
    width: 50%;
    margin:auto;
    margin-bottom: 100px;
    font-size: 14px;
    }
.w3-container{
    background: white;
    margin-top: 20px;
    text-align: center;
}
.lead{
    width: 70%;
    margin: auto;
    font-size: 14px;
}

h1{
 
  margin-top: 150px;
 
  font-weight: bold;
 
  }
</style>



@extends('layouts.app')   

@section('content')

        <div class="w3-container">
            <br>
        <h1>{{$title}}</h1>
    
        <p class="lead">Postoji mnogo faktora koji utiču na naše zdravlje i sveukupno stanje organizma, a jedan od saveznika je i muzika. 
            Sprovedena su različita istraživanja o tome kako ona poboljšava naše raspoloženje i makar malo olakšava pojedine boljke.
        Neke prednosti slušanja muzike date su u tabeli ispod:</p>
        <br>
    
        <ul id="lista" class="list-group-flush">
            <li class="list-group-item">Promena raspoloženja</li>
            <li class="list-group-item">Osećaj zajedništva</li>
            <li class="list-group-item">Protiv nesanice</li>
            <li class="list-group-item">Smanjuje stres</li>
            <li class="list-group-item">Pomaže procesuiranje emocija</li>
        </ul>
        <br>
    </div>

@endsection
