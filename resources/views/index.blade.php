@extends('layouts.app')

@section('content')

    <div>
        <h1 class="welcome">Hi mah looob surprise surprise!!! My gift to you is a website where we can upload stuff <3!</h1>
    </div>

    <div class="image-center">
        <figure class="love">
            <img src="{{ URL::asset('assets/didi.jpeg') }}">
        </figure>

        <figure>
            <img class="heart" src="{{ URL::asset('assets/heart.png') }}">
        </figure>

        <figure class="love-2">
            <img src="{{ URL::asset('assets/bina.jpeg') }}">
        </figure>
    </div>

    <div class="cute-pics">
        <figure class="cute-pic mx-auto" style="background-image: url( {{ asset('assets/hoodie.jpeg') }} ); justify-content: left">
        </figure>

{{--        <figure class="cute-pic" style="background-image: url( {{ asset('assets/hoodie_2.jpeg') }} )"></figure>--}}

{{--        <figure class="cute-pic" style="background-image: url( {{ asset('assets/skate.jpeg') }} )"></figure>--}}

{{--        <figure class="cute-pic" style="background-image: url( {{ asset('assets/skate_goofy.jpeg') }} )"></figure>--}}

    </div>

    <div class="love-message container">
        <h1>My message to you:</h1>
        <br>
        <p>Baby it has already been more than a year by the time of writing this, sorry for the delay of our anniversary gift cause of my stupid little brain that is inside of me.
            But do know that I am also very grateful for you, you filled the hole that was empty for a great portion of my life. For a time I thought I was incapable of
            falling in love but you were suddenly there and here I am madly in love with you <3!!!!</p>
        <br>
        <p>There had been some challenges in this relationship because it pains me alot when we are not able to see each other because of the long distance, but I will never give up on you baby because I know that someday our struggle will pay off and
            we will be able to live together just like how we want it to be. We have our destination but our path is still narrow, but I am willing to walk this path with you and only you baby <3.
            no matter how long this will take :).</p>
        <br>
        <p>You are beautiful my love. I always liked your eyes, they look so kindhearted and that is what made me fall in love with you <3 but It's not just your eyes
            or the hair or the face. It's everything about you my love including you as a person. That is why I confessed to you,
            That is why I always embrace you with my arms, that is why I am obsessed with you,
            that is why I always touch you
            and that is why I ultimately love you.</p>
        <br>
        <h1>Happy anniversary mah loob and may our love continue untill the end of times <3</h1>
    </div>
    <br>



@endsection
