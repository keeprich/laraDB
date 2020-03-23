<!-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title> -->

        
        <!-- Styles -->
        <!-- <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body> -->

    <style>

.backG {
    background-image: url("https://images.unsplash.com/photo-1520607162513-77705c0f0d4a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60");
    background-repeat: no-repeat;
    background-size: cover;



}

    .img_bk {
        background-color: red;
        opacity: 0.5;

        height: 50vw;
        width:100%;
    }

    .contain {
        text-align: center;
        padding-top: 50px;
        color: white;
}

.btn {
    border-radius: 25px;

}

 
    </style>

    @extends('includes.navBar')

@section('title', 'Services')

<section class="backG">

@section('header_nav')
    @parent

    <!-- <p>Additional content can go here</p> -->
@endsection


@section('content')
             

<section class="img_bk">
  <div class="contain">
    <h1 class="display-4">Need help with your Dissertation,
Assignments or Essays?</h1>
    <p class="lead display-5">No problem! Anything from a short essay to exam notes, editing or our full dissertation service.</p>

<button type="button" class="home_btm btn btn-primary ">Learn more</button>

  </div>
  </section>
<!-- </div> -->
</section>

<section>
 
</section>



        @endsection
    <!-- </body>
</html> -->
