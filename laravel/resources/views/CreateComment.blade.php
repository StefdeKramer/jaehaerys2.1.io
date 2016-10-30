@extends('layouts.app')
@section('content')
    <div class="container">



        <section class="row new-post">
            <div class="col-md-6 col-md-offset-3">
                <h3>Create Exercise</h3>
                <form action="{{ route('create.comment') }}" method="post">
                    <div class="form-group">
                    <textarea class="form-control" name="title" id="new-post" rows="1"
                              placeholder="Your Title"></textarea>
                    </div>
                    <div class="form-group">
                    <textarea class="form-control" name="body" id="new-post" rows="10"
                              placeholder="Your Comment"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Create Post</button>
                    <input type="hidden" value="{{ Session::token() }}" name="_token">
                    <input type="hidden" value=" {{ $exercises->id }}" name="exercise_id">
                </form>
            </div>
        </section>
    </div>
    @endsection