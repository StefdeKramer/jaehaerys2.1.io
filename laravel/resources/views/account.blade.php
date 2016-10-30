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
                            <br/>
                            <p>{{ $ShowExercise->musclegroups }}</p>


                            @if (($ShowExercise->active) === 1)
                                <input type="hidden" name="_method" value="PUT">
                                <a type="button" class="btn btn-default active" href="{{ route('SetNonActive', ['$exercise_id' => $ShowExercise->id]) }}"> Set to Non Active</a>

                            @else
                                <a type="button" class="btn btn-default" href="{{ route('SetActive', ['$exercise_id' => $ShowExercise->id]) }}" >Set to Active</a>
                            @endif


                            <div class="panel-footer">
                                The exercise is posted by {{ $ShowExercise->user->name }}

                            </div>

                            <div class="interaction">
                                <a href="{{ route('exercise.delete', ['$exercise_id' => $ShowExercise->id]) }}">Delete</a>
                                <a href="{{ route('edit', ['$exercise_id' => $ShowExercise->id]) }}">Edit</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>


@endsection