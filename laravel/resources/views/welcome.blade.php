@extends('layouts.master')

@section('title')
    My bitches
@endsection


@section('content')
    @include('includes.message-block')
    <div class="text-left">

        <h2>Sportsy</h2>
        <p>Welcome, This application makes selling/rating sports products easy and simple. To participate you simply
            have to make an account and posts some products of yourself. Lorem ipsum Lorem ipsum dolor sit amet,
            consectetur adipiscing elit. Cras ultrices ut ante eget tempus. Cras accumsan finibus lectus, id ornare nibh
            auctor a. Fusce iaculis elit diam, id ullamcorper mi blandit eu. Quisque quis lacus id sapien elementum
            porta sed eu erat. Integer condimentum ipsum tincidunt magna faucibus sodales. Nullam in vestibulum massa.
            Nunc non urna in lorem interdum sollicitudin. Maecenas ultrices leo sed magna accumsan egestas. Suspendisse
            potenti. Curabitur augue nulla, pharetra ac tincidunt ac, fringilla id urna. Donec quis quam id lectus
            scelerisque egestas non in turpis. Proin eu tellus ornare, pretium sapien at, viverra neque. Morbi pharetra
            nibh nec mauris bibendum hendrerit. Fusce convallis tortor imperdiet pretium scelerisqu </p>
    </div>

    <div class="text-left">

        <h2>filler</h2>
        <img src="images/voetbal.jpg">
        <p> Dit is een geimproviseerde tekst opvulling. Deze is gemaakt door mij stef en mij alleen. Ik ben de
            enige die hier heeft getypt en ik ratel wat door zodat ik wat meer tekst heb staan. Ik houd niet van
            lorum ipsum maar van ipsum lorem</p>
    </div>
    <div class="text-left">
        <h2>filler</h2>
        <p> Dit is een geimproviseerde tekst opvulling. Deze is gemaakt door mij stef en mij alleen. Ik ben de
            enige die hier heeft getypt en ik ratel wat door zodat ik wat meer tekst heb staan. Ik houd niet van
            lorum ipsum maar van ipsum lorem</p>


    </div>
    <div class="text-left">

        <h2>filler</h2>
        <p> Dit is een geimproviseerde tekst opvulling. Deze is gemaakt door mij stef en mij alleen. Ik ben de
            enige die hier heeft getypt en ik ratel wat door zodat ik wat meer tekst heb staan. Ik houd niet van
            lorum ipsum maar van ipsum lorem</p>
    </div>
    <div class="text-left">

        <h2>filler</h2>
        <p> Dit is een geimproviseerde tekst opvulling. Deze is gemaakt door mij stef en mij alleen. Ik ben de
            enige die hier heeft getypt en ik ratel wat door zodat ik wat meer tekst heb staan. Ik houd niet van
            lorum ipsum maar van ipsum lorem</p>
    </div>


    <div class="row">
        <div class="col-md-6">
            <h3>Sign Up</h3>
            <form action="{{ route('signup') }}" method="post">
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    <label for="email">Your E-Mail</label>
                    <input class="form-control" type="text" name="email" id="email" value="{{ Request::old('email') }}">
                </div>
                <div class="form-group {{ $errors->has('first_name') ? 'has-error' : '' }}">
                    <label for="first_name">Your First Name</label>
                    <input class="form-control" type="text" name="first_name" id="first_name"
                           value="{{ Request::old('first_name') }}">
                </div>
                <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                    <label for="password">Your Password</label>
                    <input class="form-control" type="password" name="password" id="password"
                           value="{{ Request::old('password') }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>

        <div class="col-md-6">
            <h3>Sign In</h3>
            <form action="{{ route('signin') }}" method="post">
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    <label for="email">Your E-Mail</label>
                    <input class="form-control" type="text" name="email" id="email" value="{{ Request::old('email') }}">
                </div>
                <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                    <label for="password">Your Password</label>
                    <input class="form-control" type="password" name="password" id="password"
                           value="{{ Request::old('password') }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
    </div>
@endsection
{{--
Door dubbel {{}} te gebruiken kan je de form en router vertellen dat het bijelkaar hoort
--}}
