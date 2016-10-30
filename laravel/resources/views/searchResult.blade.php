@extends('layouts.app')

@section('content')
    @include('includes.message-block')
    <div class="container">
        @foreach($exercises as $exercise)
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">

                            <h3>{{ $exercise->title }}</h3>
                            <p>{{ $exercise->body }}</p>

                            <p>{{ $exercise->musclegroups }}</p>
                            <div class="panel-footer">
                                The exercise is posted by {{ $exercise->user->name }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        @endforeach
    </div>
@endsection