@extends('layouts.master')

@section('title')
    My bitches
@endsection


@section('content')
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

            <h3>Sign up</h3>
            <form method="post" action="{{ route('signup') }}">
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
