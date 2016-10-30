@extends('layouts.app')

@section('content')
    @include('includes.message-block')
    <div class="container">
        <section class="row new-post">
            <div class="col-md-6 col-md-offset-3">
                <h3>Update Your exercise</h3>
                               <form action="{{ route('edit.exercise') }}" method="post">
                    <div class="form-group">
                    <h3>Title</h3>
                        <input class="form-control" name="title" value="{{ $exercises->title }}" id="new-post" rows="1"
                              placeholder="Your Title">
                    </div>
                    <div class="form-group">
                        <h3>body</h3>
                    <textarea class="form-control" name="body" id="new-post" rows="15"
                              placeholder="Your Description">{{ $exercises->body }}</textarea>
                    </div>
                                   <h3>Muscle groups</h3>
                    <div class="form-group">
                    <textarea class="form-control" name="musclegroups" id="new-post" rows="5"
                              placeholder="Muscle Groups used in exercise"> {{ $exercises->musclegroups }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Create Post</button>
                    <input type="hidden" value="{{ Session::token() }}" name="_token">
                                   <input type="hidden" value=" {{ $exercises->id }}" name="exercise_id">


                </form>
            </div>
        </section>
    </div>
    @endsection