@extends('layouts.app')   

@section('content')
    <div class="jumbotron text-center"  style="background-color:white; background-size: 100%; margin-top:30px">
        <h1 class="display-4">Dobrodošli na sajt music lovers-a!</h1>
        <br><br>
        <p class="lead" >Na našem sajtu možete pročitati o različitim zanimljivostima muzičara, pločama, kasetama, novim albumima...</p>
        <p class="lead">Ukoliko želite da podelite vaš članak sa posetiocima, potrebno je da se registrujete/ulogujete.</p>
       <br>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Registruj se</a></a></p>
    </div>
 @endsection

