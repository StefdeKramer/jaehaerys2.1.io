@extends('layouts.app')

@section('content')
    @include('includes.message-block')
    <div class="container">
        <section class="row new-post">
            <div class="col-md-6 col-md-offset-3">
                <h3>Update Your exercise</h3>
                               <form action="{{ route('edit.exercise') }}" method="post">
                    <div class="form-group">
                    <textarea class="form-control" name="title" id="new-post" rows="1"
                              placeholder="Your Title"></textarea>
                    </div>
                    <div class="form-group">
                    <textarea class="form-control" name="body" id="new-post" rows="10"
                              placeholder="Your Description"></textarea>
                    </div>
                    <div class="form-group">
                    <textarea class="form-control" name="musclegroups" id="new-post" rows="5"
                              placeholder="Muscle Groups used in exercise"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Create Post</button>
                    <input type="hidden" value="{{ Session::token() }}" name="_token">

                </form>
            </div>
        </section>
    </div>
    @endsection