@extends('layouts.master')
{{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">--}}

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>
    body{
        font-family: 'Quicksand', sans-serif;
    }
    .team{
        padding:75px 0;
    }
    h6.description{
        font-weight: bold;
        letter-spacing: 2px;
        color: #999;
        border-bottom: 1px solid rgba(0, 0, 0,0.1);
        padding-bottom: 5px;
    }
    .profile{
        margin-top: 25px;
    }
    .profile h1{
        font-weight: normal;
        font-size: 20px;
        margin:10px 0 0 0;
    }
    .profile h2{
        font-size: 14px;
        font-weight: lighter;
        margin-top: 5px;
    }
    .profile .img-box{
        opacity: 1;
        display: block;
        position: relative;
    }
    .profile .img-box:after{
        content:"";
        opacity: 0;
        background-color: rgba(0, 0, 0, 0.75);
        position: absolute;
        right: 0;
        left: 0;
        top: 0;
        bottom: 0;
    }
    .img-box ul{
        position: absolute;
        z-index: 2;
        bottom: 50px;
        text-align: center;
        width: 100%;
        padding-left: 0px;
        height: 0px;
        margin:0px;
        opacity: 0;
    }
    .profile .img-box:after, .img-box ul, .img-box ul li{
        -webkit-transition: all 0.5s ease-in-out 0s;
        -moz-transition: all 0.5s ease-in-out 0s;
        transition: all 0.5s ease-in-out 0s;
    }
    .img-box ul i{
        font-size: 20px;
        letter-spacing: 10px;
    }
    .img-box ul li{
        width: 30px;
        height: 30px;
        text-align: center;
        border: 1px solid #88C425;
        margin: 2px;
        padding: 5px;
        display: inline-block;
    }
    .img-box a{
        color:#fff;
    }
    .img-box:hover:after{
        opacity: 1;
    }
    .img-box:hover ul{
        opacity: 1;
    }
    .img-box ul a{
        -webkit-transition: all 0.3s ease-in-out 0s;
        -moz-transition: all 0.3s ease-in-out 0s;
        transition: all 0.3s ease-in-out 0s;
    }
    .img-box a:hover li{
        border-color: #fff;
        color: #956295;
    }
    a{
        color:#956295;
    }
    a:hover{
        text-decoration:none;
        color:#956295;
    }
    i.red{
        color:#BC0213;
    }
</style>


@section('content')
    <h1 class="description"style="margin-bottom: -3em;" id="heading">OUR TEAM</h1>
    <section class="team" >

        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="col-lg-12">
                        <div class="row pt-md">

                            {{--manish pandey sir--}}
                            {{--<div class="col-md-12  profile">--}}

                                {{--<div class="panel panel-info">--}}

                                    {{--<div class="panel-body">--}}
                                        {{--<div class="img-box col-md-3 ">--}}
                                            {{--<img src="/images/si.png" class="img-responsive img-rounded">--}}
                                            {{--<ul class="text-center">--}}
                                                {{--<a href="#">--}}
                                                    {{--<li><i class="fa fa-facebook"></i></li>--}}
                                                {{--</a>--}}
                                                {{--<a href="#">--}}
                                                    {{--<li><i class="fa fa-twitter"></i></li>--}}
                                                {{--</a>--}}
                                                {{--<a href="#">--}}
                                                    {{--<li><i class="fa fa-linkedin"></i></li>--}}
                                                {{--</a>--}}
                                                {{--<a href="#">--}}
                                                    {{--<li><i class="fa fa-github"></i></li>--}}
                                                {{--</a>--}}

                                            {{--</ul>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-8"><h1>Prof. Manish Pandey &nbsp;&nbsp;<span class="label label-info" style="font-size:0.6em">Project Coordinator</span> </h1>--}}
                                            {{--<h2>Professor at Computer Science Department at <a href="http://manit.ac.in">MANIT</a></h2>--}}
                                            {{--<ul class="list-inline" style="font-size: 1.5em;">--}}
                                                {{--<li><a href="#"><i class="fa fa-facebook-square"></i></a></li>--}}
                                                {{--<li><a href="#"><i class="fa fa-twitter-square"></i></a></li>--}}
                                                {{--<li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>--}}
                                                {{--<li><a href="#"><i class="fa fa-github-square"></i></a></li>--}}

                                            {{--</ul>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}

                                {{--</div>--}}
                            {{--</div>--}}

                            {{--ashish--}}
                            <div class="col-md-12  profile">

                                <div class="panel panel-info">

                                   <div class="panel-body">
                                       <div class="img-box col-xs-3 ">
                                           <img src="/images/ashish.jpg" class="img-responsive img-rounded">
                                           <ul class="text-center">
                                               <a href="http://facebook.com/ashishpatel0720">
                                                   <li><i class="fa fa-facebook"></i></li>
                                               </a>
                                               <a href="http://twitter.com/ashishpatel0720">
                                                   <li><i class="fa fa-twitter"></i></li>
                                               </a>
                                               <a href="http://linkedin.com/ashishpatel0720">
                                                   <li><i class="fa fa-linkedin"></i></li>
                                               </a>
                                               <a href="http://github.com/ashishpatel0720">
                                                   <li><i class="fa fa-github"></i></li>
                                               </a>

                                           </ul>
                                       </div>

                                       <div class="col-md-8"><h1>Ashish Patel&nbsp;&nbsp;<span class="label label-primary" style="font-size:0.6em">Developer</span> </h1>
                                           <h2>Developer/Computer Science Student at <a href="http://manit.ac.in">MANIT</a></h2>
                                           <ul class="list-inline" style="font-size: 1.5em;">
                                                   <li><a target='_blank' href="http://facebook.com/ashishpatel0720"><i class="fa fa-facebook-square"></i></a></li>
                                                   <li><a target='_blank' href="http://twitter.com/ashishpatel0720"><i class="fa fa-twitter-square"></i></a></li>
                                                   <li><a target='_blank' href="http://linkedin.com/ashishpatel0720"><i class="fa fa-linkedin-square"></i></a></li>
                                                   <li><a target='_blank' href="http://github.com/ashishpatel0720"><i class="fa fa-github-square"></i></a></li>
                                           </ul>
                                           <p>for more visit , portfolio website&nbsp;&nbsp;<a href="http://ashish.live"><i
                                                           class="glyphicon glyphicon-globe" style="font-size:1.3em;"></i></a></p>

                                       </div>
                                   </div>

                            </div></div>


                            {{--anurag --}}
                            <div class="col-md-12  profile">

                                <div class="panel panel-info">

                                    <div class="panel-body">
                                        <div class="img-box col-xs-3 ">
                                            <img src="/images/anurag.jpg" class="img-responsive img-rounded">
                                            <ul class="text-center">
                                                <a href="#">
                                                    <li><i class="fa fa-facebook"></i></li>
                                                </a>
                                                <a href="#">
                                                    <li><i class="fa fa-twitter"></i></li>
                                                </a>
                                                <a href="#">
                                                    <li><i class="fa fa-linkedin"></i></li>
                                                </a>
                                                <a href="#">
                                                    <li><i class="fa fa-github"></i></li>
                                                </a>

                                            </ul>
                                        </div>

                                        <div class="col-md-8"><h1>Anurag Gupta&nbsp;&nbsp;<span class="label label-warning" style="font-size:0.6em">Developer</span></h1>
                                            <h2>Developer/Computer Science Student at <a href="http://manit.ac.in">MANIT</a></h2>
                                            <ul class="list-inline" style="font-size: 1.5em;">
                                                <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                                                <li><a href="#"><i class="fa fa-github-square"></i></a></li>

                                            </ul>
                                        </div>
                                    </div>

                                </div></div>


                            {{--rana--}}
                            <div class="col-md-12  profile">

                                <div class="panel panel-info">

                                    <div class="panel-body">
                                        <div class="img-box col-xs-3 ">
                                            <img src="/images/rana.jpg" class="img-responsive img-rounded">
                                            <ul class="text-center">
                                                <a href="#">
                                                    <li><i class="fa fa-facebook"></i></li>
                                                </a>
                                                <a href="#">
                                                    <li><i class="fa fa-twitter"></i></li>
                                                </a>
                                                <a href="#">
                                                    <li><i class="fa fa-linkedin"></i></li>
                                                </a>
                                                <a href="#">
                                                    <li><i class="fa fa-github"></i></li>
                                                </a>

                                            </ul>
                                        </div>

                                        <div class="col-md-8"><h1>Nitesh Rana&nbsp;&nbsp;<span class="label label-danger" style="font-size:0.6em">Developer</span></h1>
                                            <h2>Developer/Computer Science Student at <a href="http://manit.ac.in">MANIT</a></h2>
                                            <ul class="list-inline" style="font-size: 1.5em;">
                                                <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                                                <li><a href="#"><i class="fa fa-github-square"></i></a></li>

                                            </ul>
                                        </div>
                                    </div>

                                </div></div>


                            {{--meena --}}
                            <div class="col-md-12  profile">

                                <div class="panel panel-info">

                                    <div class="panel-body">
                                        <div class="img-box col-xs-3 ">
                                            <img src="/images/vivek.jpg" class="img-responsive img-rounded">
                                            <ul class="text-center">
                                                <a href="#">
                                                    <li><i class="fa fa-facebook"></i></li>
                                                </a>
                                                <a href="#">
                                                    <li><i class="fa fa-twitter"></i></li>
                                                </a>
                                                <a href="#">
                                                    <li><i class="fa fa-linkedin"></i></li>
                                                </a>
                                                <a href="#">
                                                    <li><i class="fa fa-github"></i></li>
                                                </a>

                                            </ul>
                                        </div>

                                        <div class="col-md-8"><h1>Vivek Meena&nbsp;&nbsp;<span class="label label-primary" style="font-size:0.6em">Developer</span></h1>
                                            <h2>Developer/Computer Science Student at <a href="http://manit.ac.in">MANIT</a></h2>
                                            <ul class="list-inline" style="font-size: 1.5em;">
                                                <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                                                <li><a href="#"><i class="fa fa-github-square"></i></a></li>

                                            </ul>
                                        </div>
                                    </div>

                                </div></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection
