<style>
    .container-md {
    background-color:white;
    background-repeat: repeat-y;
    background-position: center, left;
    
    margin:42px;
    background-size: 100%
}
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}

</style>
@extends('layouts.app')

@section('content')
<br>
    <a href="/posts" class="btn btn-light" style="width:130px;height:45px;font-size:20px; text-align:center;">Povratak</a>

    <div class="container-md">
    
        <br>
    <h1>{{$post->title}}</h1>
    <img class="center" src="/storage/cover_images/{{$post->cover_image}}" >
    <br><br>

    <div>

        {!!$post->body!!}

    </div>
    <div>
        <p>Ocena: {{$post->rate}}</p>
    </div>
    <hr>
    <small>Post je objavljen {{$post->created_at}} by {{$post->user->name}}</small>

    <hr>

    @if(!Auth::guest())
        @if(Auth::user()->id==$post->user_id)
        <a href="/posts/{{$post->id}}/edit" class="btn btn-primary btn-lg">Izmeni</a>

        {!!Form::open(['action'=>['App\Http\Controllers\PostsController@destroy',$post->id],'method'=>'POST','class'=>'float-right'])!!}
            {{Form::hidden('_method','DELETE')}}
            {{Form::submit('Obrisi',['class'=>'tn btn-primary btn-lg'])}}
        {!!Form::close()!!}
         @endif
   @endif
<br><br><br>
@endsection
</div>