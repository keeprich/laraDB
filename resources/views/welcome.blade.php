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
    background-image: url("https://images.unsplash.com/photo-1516534775068-ba3e7458af70?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80");
    background-repeat: no-repeat;
    /* background-size: cover; */
    background-size: 100% 556px;


     



}

    .img_bk {
        background-color: red;
        opacity: 0.5;

        height: 500px;
        width:100%;
    }

    .conta{
        text-align: center;
        padding-top: 50px;
        color: white;
}

.btn {
    border-radius: 25px;

}


/*  */
.sec_section {
    background-image:url("https://images.unsplash.com/photo-1515549832467-8783363e19b6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60");
    background-repeat: no-repeat;
    background-size: cover;
}

.cont {
  position: relative;
  width: 50%;
  opacity: 1;

}

.ima {
  display: block;
  width: 450px;
  height: auto;
}

.over1{
    opacity: 1;

  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 450px;
  opacity: 0.4;
  transition: .5s ease;
  background-color: #008CBA;
}

/* .cont:hover .overlay {
  opacity: 1;
} */

.text1 {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
/*  */
 
/*  */
.work_h {
    color: #49eb34;
}
/*  */

/*  */
.lil_img {
    background-image:url("https://images.unsplash.com/photo-1543196614-e046c7d3d82e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60");
    background-repeat: no-repeat;
    background-size: cover;
    height: 400px;
}

.lil_text {
    color:white;
    padding-top:150px;
    padding-left:150px;
    padding-right:150px;

    text-align: center;
}
/*  */

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
  <div class="container conta">
    <h1 class="display-4">Need help with your Dissertation,
Assignments or Essays?</h1>
    <p class="lead display-5">No problem! Anything from a short essay to exam notes, editing or our full dissertation service.</p>

<button type="button" class="home_btm btn btn-primary ">Learn more</button>

  </div>
  </section>
<!-- </div> -->
<section class="sec_section">
<div class="container">
  <div class="row">
    <div class="col">
    <!--  -->
    <div class="cont">
  <img src="https://images.unsplash.com/photo-1427751840561-9852520f8ce8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60" alt="Avatar" class="ima">
  <div class="over1">
    <div class="text1">
    <p>Hello world</p>
    <h1>Please call me</h1>
    </div>
  </div>
</div>
    <!--  -->
    </div>
    <div class="col">
    <!--  -->
    <div class="cont">
  <img src="https://images.unsplash.com/photo-1427751840561-9852520f8ce8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60" alt="Avatar" class="ima">
  <div class="over1">
    <div class="text1">
    <p>Hello world</p>
    <h1>Please call me</h1>
    </div>
  </div>
</div>
    <!--  -->
    </div>
    <div class="w-100"></div>
    <div class="col">
    <!--  -->
    <div class="cont">
  <img src="https://images.unsplash.com/photo-1427751840561-9852520f8ce8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60" alt="Avatar" class="ima">
  <div class="over1">
    <div class="text1">
    <p>Hello world</p>
    <h1>Please call me</h1>
    </div>
  </div>
</div>
    <!--  -->
    </div>
    <div class="col">
    <!--  -->
    <div class="cont">
  <img src="https://images.unsplash.com/photo-1427751840561-9852520f8ce8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60" alt="Avatar" class="ima">
  <div class="over1">
    <div class="text1">
    <p>Hello world</p>
    <h1>Please call me</h1>
    </div>
  </div>
</div>
    <!--  -->
    </div>
  </div>
</div> 


<!--  -->
<br><br><br>
<div class="container">
<h1>Premium Essay and Dissertation Writing Service</h1>
<p>Earning a degree is one of the most challenging feats you will undertake in your life. So, can you imagine easily passing your degree with the grades you want?</p>
<p>Well, now you can sail through your course and gain a First class degree or 2:1 grade with a little help from Ivory Research.
Our Dissertation and Essay Writing Services will help you achieve success at university, so you can feel confident of walking into the career you always wanted.</p>


</div>
<!--  -->

<div class="container">
<h1 class="text-center">How does it work?</h1>
<div>
<h2 class="work_h">1. Pick the service you need.</h2>
<p>We have a variety of different services available to help you. Whether you need custom-writing or editing, we will make sure we fulfil your requirements.</p>

</div>

<div>
<h2 class="work_h">2. Pick the service you need.</h2>
<p>We have a variety of different services available to help you. Whether you need custom-writing or editing, we will make sure we fulfil your requirements.</p>

</div>

<div>
<h2 class="work_h">3. Pick the service you need.</h2>
<p>We have a variety of different services available to help you. Whether you need custom-writing or editing, we will make sure we fulfil your requirements.</p>

</div>

<div>
<h2 class="work_h">4. Pick the service you need.</h2>
<p>We have a variety of different services available to help you. Whether you need custom-writing or editing, we will make sure we fulfil your requirements.</p>

</div>

<div>
<h2 class="work_h">5. Pick the service you need.</h2>
<p>We have a variety of different services available to help you. Whether you need custom-writing or editing, we will make sure we fulfil your requirements.</p>

</div>
</div>
<br><br>

<!--  -->
<div class="lil_img">
<h2 class="lil_text">With Ivory Research, it has never been easier to get the 
grades you’ve always wanted. Our world-class 
academics are ready to help.</h2>
</div>
<!--  -->

<br><br><br>
</section>



        @endsection
    <!-- </body>
</html> -->
