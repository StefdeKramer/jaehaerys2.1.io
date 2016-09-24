@extends('layouts.master')

@section('title')
    My bitches
@endsection

@section('Image')
    <div class="row">
        <div class="col-md-2">
            <h2>Sportsy</h2>
            <p>Welcome, This application makes selling/rating sports products easy and simple. To participate you simply
                have to make an account and posts some products of yourself.</p>
        </div>

    </div>
@endsection


@section('contentSignup')
    <div class="row">
        <div class="col-md-6">

            <h3>Sign up</h3>
            <form action="{{ route('signup') }}" method="post">
                <div class="form-group">
                    <label for="email">Your E-Mail</label>
                    <input class="form-control" type="text" name="email" id="email">
                </div>
                <div class="form-group">
                    <label for="first-name">Your First Name</label>
                    <input class="form-control" type="text" name="first_name" id="first_name">
                </div>
                <div class="form-group">
                    <label for="password">Your Password</label>
                    <input class="form-control" type="password" name="email" id="email">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <input type="hidden" name="_token" value="{{ Session::token()}}">
                {{--Bescherming voor session secure te houden--}}

            </form>
        </div>
        <div class="col-md-6">

            <h3>Sign in</h3>
            <form action="#" method="post">
                <div class="form-group">
                    <label for="email">Your E-Mail</label>
                    <input class="form-control" type="text" name="email" id="email">
                </div>
                <div class="form-group">
                    <label for="password">Your Password</label>
                    <input class="form-control" type="password" name="email" id="email">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>

@endsection

{{--
Door dubbel {{}} te gebruiken kan je de form en router vertellen dat het bijelkaar hoort
--}}
