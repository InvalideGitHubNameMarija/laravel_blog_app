@extends('layouts.app')

@section('content')
<br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Kontrolna tabla') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <a href="/posts/create" class="btn btn-primary">Kreiraj post</a>
                    <br><br>
                    <h3>Tvoji blog postovi</h3>

                    @if(count($posts)>0)
                    <table class="table table-striped">
                        <tr>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach($posts as $post)
                        <tr>
                            <td>{{$post->title}}</td>
                            <td><a href="/posts/{{$post->id}}" class="btn btn-primary btn-md">Prikazi</a></td>
                            <td><a href="/posts/{{$post->id}}/edit" class="btn btn-primary btn-md">Izmeni</a></td>
                            <td>
                                {!!Form::open(['action'=>['App\Http\Controllers\PostsController@destroy',$post->id],'method'=>'POST','class'=>'float-right'])!!}
                                {{Form::hidden('_method','DELETE')}}
                                {{Form::submit('Obrisi',['class'=>'btn btn-primary btn-md'])}}
                                {!!Form::close()!!}
                            </td>
                        </tr>
                        @endforeach

                    </table>
                    @else
                    <p>You have no posts.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
