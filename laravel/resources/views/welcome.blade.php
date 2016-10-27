@extends('layouts.app')

@section('content')

        <!-- Page Content -->
<div class="container">

    <!-- Heading Row -->
    <div class="row">
        <div class="col-md-8">
            <img class="img-responsive img-rounded" src="http://placehold.it/900x350" alt="">
        </div>
        <div class="col-md-4">
            <h1>Exercisy</h1>
            <p>This is a template that is great for small businesses. It doesn't have too much fancy flare to it,
                but it makes a great use of the standard Bootstrap core components. Feel free to use this template
                for any project you want!</p>

        </div>

    </div>

    <hr>
    <div class="row">
        <div class="col-lg-12">
            <div class="well text-center">
                Share your exercises with everybody!
            </div>
        </div>

    </div>
    <!-- Content Row -->
    <div class="row"> @foreach($exercises as $ShowExercise)
        <div class="col-md-4">

                <h2>{{ $ShowExercise->title }}</h2>
                <p>The muscle group for this exercise is {{ $ShowExercise->musclegroups }}</p>
                <p>The user who posted the exercise {{ $ShowExercise->user->name }}</p>

        </div>
        @endforeach
    </div>
</div>

@endsection
