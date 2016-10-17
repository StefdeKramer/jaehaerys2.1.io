@extends('layouts.app')

@section('content')
    @include('includes.message-block')
      <div class="container">
        @foreach($exercise as $ShowExercise)
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3>{{ $ShowExercise->title }}</h3></div>

                        <div class="panel-body">

                            <p>{{ $ShowExercise->body }}</p>
                            <br />
                            <p>{{ $ShowExercise->musclegroups }}</p>
                            <div class="panel-footer">
                                The exercise is posted by {{ $ShowExercise->user->name }}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
