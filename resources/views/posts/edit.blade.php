<style>
    .container-md {
    background-color:white;
    background-repeat: repeat-y;
    background-position: center, left;
    
    margin:42px;
    background-size: 100%
}

</style>

@extends('layouts.app')

@section('content')
<div class="container-md">
    <br>    

<h1>Edituj POST</h1>
    {!! Form::open(["action" => ["App\Http\Controllers\PostsController@update",$post->id], "method" => "POST", "class" => "form",'enctype'=>'multipart/form-data']) !!}

    <div class="form-group">
        {{Form::label('title','Naslov')}}
        {{Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'Title'])}}
    </div>

    <div class="form-group">
        {{Form::label('body','Tekst')}}
        {{Form::textarea('body',$post->body,['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Body Text'])}}
    </div>
    <div class="form-group">
        {{Form::file('cover_image')}}
    </div>

    <div class="form-group">
        {{Form::label('rate','Ocena')}}
        {{Form::text('rate',$post->rate,['class'=>'form-control','placeholder'=>'Unesite vrednost od 1 do 10.'])}}
    </div>

    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Izmeni',['class'=>'btn btn-primary'])}}

    {!! Form::close() !!}

<br><br><br>
@endsection
</div>