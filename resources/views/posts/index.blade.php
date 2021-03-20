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
    <h1>Postovi o muzici</h1>

    @if(count($posts)>0)

    @foreach ($posts as $post)
        <div class="card p-3 mt-3 mb-3">

            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
                </div>
                <div class="col-md-8 col-sm-4">
                    <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                    <small>Post napisan  {{$post->created_at}} by {{$post->user->name}}</small>
                </div>
            </div>

          </div>
    @endforeach
</div>
<div>
    
    {{$posts->links('pagination::bootstrap-4')}}
    <br><br><br>

</div>
    @else
        <p>Nisu pronadjeni postovi</p>
    @endif

@endsection