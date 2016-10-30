@extends('layouts.app')

@section('content')
    @foreach($comments as $comment)
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>{{ $comment->title }}</h2>
                        <p> {{ $comment->body }}</p>


                        <div class="panel-footer">
                            <p> {{ $comment->exercise->title }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endforeach

@endsection