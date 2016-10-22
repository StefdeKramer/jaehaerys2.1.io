@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($exercises as $ShowExercise)
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3>{{ $ShowExercise->title }}</h3>

                        </div>

                        <div class="panel-body">

                            <p>{{ $ShowExercise->body }}</p>
                            <br />
                            <p>{{ $ShowExercise->musclegroups }}</p>
                            <div class="panel-footer">
                                The exercise is posted by {{ $ShowExercise->user->name }}
                            </div>

                            <div class ="interaction">
                                <a href="{{ route('exercise.delete', ['$exercise_id' => $ShowExercise->id]) }}">Delete</a>
                                <a href="#">Edit</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>


@endsection