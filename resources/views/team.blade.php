@extends('layouts.master')
@section('content')
    <!-- team -->
    <style>
        /*--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
--*/
        html, body{
            font-size: 100%;
            font-family: 'Open Sans', sans-serif;
            background:#ffffff;
            margin: 0;
        }
        p,ul li{
            margin:0;
            font-size:14px;
        }
        h1,h2,h3,h4,h5,h6{
            font-family: 'Poppins', sans-serif;
            margin:0;
        }
        ul,label{
            margin:0;
            padding:0;
        }
        body a:hover{
            text-decoration:none;
        }
        /*-- header --*/
        input[type="submit"],input[type="reset"],a.facebook1,a.twitter1,a.google1,a.instagram1,.w3l_categories ul li a,.mail_grid1_left1 ul li a,.agileinfo_tags ul li a,.wthree_blog_left_grid ul li a,.wthree_blog_left_grid h3 a,.agile_team_grid1_pos1,.agileits_breadcrumbs_left ul li a,.w3agile_copy_right p a,ul.w3agile_footer_grid_list li a,ul.agileinfo_social_icons li a,.agileits_service_grid1,.agileits_service_grid1 span,.agileits_service_grid h3,.agileits_service_grid2,.agileits_service_grid2 span,.agileits_service_grid3,.agileits_service_grid3 span{
            transition: .5s ease-in;
            -webkit-transition: .5s ease-in;
            -moz-transition: .5s ease-in;
            -o-transition: .5s ease-in;
            -ms-transition: .5s ease-in;
        }
        /*-- nav --*/
        .top-nav {
            background:#222222;
        }
        .navbar-default {
            background: none;
            border: none;
        }
        .navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus {
            color:#e1d41f;
            background-color: transparent;
        }
        .navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus {
            color:#e1d41f;
        }
        .navbar {
            margin-bottom: 0;
        }
        .navbar-brand {
            height: 70px;
            padding:15px 0;
            font-size: 1.3em;
            line-height: 40px;
        }
        .navbar-default .navbar-brand:hover, .navbar-default .navbar-brand:focus,.navbar-default .navbar-brand {
            color: #fff;
        }
        .navbar-nav > li > a {
            font-size: 14px;
            padding:25px 0;
            text-transform: uppercase;
        }
        .navbar-default .navbar-nav > li > a {
            color: #fff;
        }
        .link-effect-7 {
            -moz-perspective: 900px;
            -webkit-perspective: 900px;
            perspective: 900px;
        }
        .link-effect-7 a {
            text-shadow: none;
            margin: 0 20px;
            -moz-transition: 0.3s;
            -o-transition: 0.3s;
            -webkit-transition: 0.3s;
            transition: 0.3s;
        }
        .link-effect-7 li.active a::before {
            color:#e1d41f;
        }
        .link-effect-7 a::before {
            color: white;
            content: attr(data-hover);
            position: absolute;
            -moz-transition: 0.3s;
            -o-transition: 0.3s;
            -webkit-transition: 0.3s;
            transition: 0.3s;
            -moz-transform-origin: 50% 0 50%;
            -ms-transform-origin: 50% 0 50%;
            -webkit-transform-origin: 50% 0 50%;
            transform-origin: 50% 0 50%;
            -moz-transform-style: preserve-3d;
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
        }
        .link-effect-7 a:hover {
            color: #ff0000;
        }
        .link-effect-7 a:hover::before {
            -moz-transform: translateY(22px) rotateX(-90deg);
            -ms-transform: translateY(22px) rotateX(-90deg);
            -webkit-transform: translateY(22px) rotateX(-90deg);
            transform: translateY(22px) rotateX(-90deg);
            -o-transform: translateY(22px) rotateX(-90deg);
        }
        .navbar-nav {
            float: none;
            margin:0;
        }
        .navbar-right {
            float: none !important;
            margin-right: 0;
            padding: 0;
            text-align:center;
        }
        .navbar-left {
            float: none !important;
        }
        .navbar-nav > li {
            float: none;
            display: inline-block;
        }
        /*-- //nav --*/
        /*-- banner --*/
        .banner{
            background: url(../images/banner.jpg) no-repeat 0px 0px;
            background-size: cover;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            -ms-background-size: cover;
            min-height: 700px;
            border-top:5px solid #bae100;
        }
        .banner1{
            background: url(../images/banner1.jpg) no-repeat 0px 0px;
            background-size: cover;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            -ms-background-size: cover;
            min-height: 300px;
            border-top:5px solid #bae100;
        }
        .w3ls_logo h1 a {
            text-decoration: none;
            font-size: 1.3em;
            color: #212121;
            background: url(../images/img-sp.png) no-repeat 104px 0px;
            padding: 1.55em 0 0;
            display: block;
            width: 25%;
            margin: 0 auto;
        }
        .w3ls_logo {
            padding: 5em 0 9em;
        }
        .w3l_banner_info h3{
            text-align: center;
            color: #fff;
            font-size: 2em;
            line-height: 1.5em;
            padding: .5em;
            background: rgba(46, 46, 46, 0.52);
            letter-spacing: 3px;
            text-transform: capitalize;
            width: 80%;
            margin: 0 auto;
        }
        .w3l_banner_info {
            padding-bottom: 12em;
        }
        /*-- //banner --*/
        /*-- banner-bottom --*/
        .banner-bottom{
            padding:2em 0;
            background:#e1d41f;
        }
        .wthree_banner_bottom_left h2{
            font-size:1.3em;
            color:#212121;
            text-transform:capitalize;
            line-height:1.8em;
        }
        .more {
            margin:1em 0 0;
        }
        .button {
            min-width: 150px;
            max-width: 190px;
            display: block;
            padding: .7em 2em;
            /*-- w3layouts --*/
            border: none;
            background: none;
            color: inherit;
            vertical-align: middle;
            position: relative;
            z-index: 1;
            -webkit-backface-visibility: hidden;
            -moz-osx-font-smoothing: grayscale;
            font-size: 14px;
        }
        .button:focus {
            outline: none;
        }
        .button > span {
            vertical-align: middle;
        }
        .button--size-s {
            border-radius: 25px;
        }
        /* Nina */
        .button--nina {
            padding: 0 2em;
            background:#212121;
            color: #fff;
            overflow: hidden;
            -webkit-transition: background-color 0.3s;
            transition: background-color 0.3s;
            margin: 0 auto;
            text-align: center;
        }
        .button--nina.button--inverted {
            background: #fff;
            color: #7986cb;
        }
        .button--nina > span {
            display: inline-block;
            padding: .7em 0;
            opacity: 0;
            color: #fff;
            -webkit-transform: translate3d(0, -10px, 0);
            transform: translate3d(0, -10px, 0);
            -webkit-transition: -webkit-transform 0.3s, opacity 0.3s;
            transition: transform 0.3s, opacity 0.3s;
            -webkit-transition-timing-function: cubic-bezier(0.75, 0, 0.125, 1);
            transition-timing-function: cubic-bezier(0.75, 0, 0.125, 1);
        }
        .button--nina::before {
            content: attr(data-text);
            position: absolute;
            /*-- agileits --*/
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            padding: .7em 0;
            -webkit-transition: -webkit-transform 0.3s, opacity 0.3s;
            transition: transform 0.3s, opacity 0.3s;
            -webkit-transition-timing-function: cubic-bezier(0.75, 0, 0.125, 1);
            transition-timing-function: cubic-bezier(0.75, 0, 0.125, 1);
        }
        .button--nina:hover {
            background-color:#A2A2A2;
        }
        .button--nina:focus{
            color:#fff;
        }
        .button--nina:hover::before {
            opacity: 0;
            -webkit-transform: translate3d(0, 100%, 0);
            transform: translate3d(0, 100%, 0);
        }
        .button--nina:hover > span {
            opacity: 1;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
        .button--nina:hover > span:nth-child(1) {
            -webkit-transition-delay: 0.045s;
            transition-delay: 0.045s;
        }
        .button--nina:hover > span:nth-child(2) {
            -webkit-transition-delay: 0.09s;
            transition-delay: 0.09s;
        }
        .button--nina:hover > span:nth-child(3) {
            -webkit-transition-delay: 0.135s;
            transition-delay: 0.135s;
        }
        .button--nina:hover > span:nth-child(4) {
            -webkit-transition-delay: 0.18s;
            transition-delay: 0.18s;
        }
        .button--nina:hover > span:nth-child(5) {
            -webkit-transition-delay: 0.225s;
            transition-delay: 0.225s;
        }
        .button--nina:hover > span:nth-child(6) {
            -webkit-transition-delay: 0.27s;
            transition-delay: 0.27s;
            /*-- w3layouts --*/
        }
        .button--nina:hover > span:nth-child(7) {
            -webkit-transition-delay: 0.315s;
            transition-delay: 0.315s;
        }
        .button--nina:hover > span:nth-child(8) {
            -webkit-transition-delay: 0.36s;
            transition-delay: 0.36s;
        }
        .button--nina:hover > span:nth-child(9) {
            -webkit-transition-delay: 0.405s;
            transition-delay: 0.405s;
        }
        .button--nina:hover > span:nth-child(10) {
            -webkit-transition-delay: 0.45s;
            transition-delay: 0.45s;
        }
        /*-- //banner-bottom --*/
        /*-- services --*/
        .services,.features,.about,.typo,.team,.team-bottom,.blog,.mail{
            padding:5em 0;
        }
        .agileits_service_grid1,.agileits_service_grid2,.agileits_service_grid3{
            width: 100px;
            height: 100px;
            border-radius: 50px;
            border: 1px solid #212121;
            margin: 0 auto;
        }
        .agileits_service_grid1 span{
            background:url(../images/img-sp.png) no-repeat -220px 10px;
            display: block;
            width: 90px;
            height: 80px;
            margin: 0 auto;
        }
        .agileits_service_grid:hover .agileits_service_grid1,.agileits_service_grid:hover .agileits_service_grid2,.agileits_service_grid:hover .agileits_service_grid3{
            background:#212121;
        }
        .agileits_service_grid:hover .agileits_service_grid1 span{
            background:url(../images/img-sp.png) no-repeat -220px -67px;
            display: block;
        }
        .agileits_service_grid2 span{
            background:url(../images/img-sp.png) no-repeat -323px 9px;
            display: block;
            width: 90px;
            height: 80px;
            margin: 0 auto;
            /*-- agileits --*/
        }
        .agileits_service_grid:hover .agileits_service_grid2 span{
            background:url(../images/img-sp.png) no-repeat -323px -72px;
            display: block;
        }
        .agileits_service_grid3 span{
            background:url(../images/img-sp.png) no-repeat -425px 9px;
            display: block;
            width: 90px;
            height: 80px;
            margin: 0 auto;
        }
        .agileits_service_grid:hover .agileits_service_grid3 span{
            background:url(../images/img-sp.png) no-repeat -425px -71px;
            display: block;
        }
        .agileits_service_grid h3{
            font-size:1.2em;
            color:#212121;
            text-transform:capitalize;
            line-height:1.5em;
            margin:1.5em 0 1em;
        }
        .agileits_service_grid p{
            color:#999;
            line-height:2em;
        }
        .agileits_service_grid{
            text-align:center;
        }
        .agileits_service_grid:hover h3{
            color:#E1D41F;
        }
        /*-- //services --*/
        /*-- gallery --*/
        .head{
            font-size:2em;
            color:#212121;
            text-align:center;
            padding-bottom:.8em;
            position:relative;
        }
        .head:after{
            content: '';
            background: #212121;
            height: 1px;
            width: 5%;
            position: absolute;
            bottom: 0%;
            left: 47.5%;
        }
        .head span{
            display: block;
            font-size: .8em;
            color: #e1d41f;
            top: 0;
            padding-bottom: .5em;
        }
        .w3_gallery_grids{
            margin:3em 0 0;
        }
        .w3_gallery_grid1 {
            padding:2em 1.5em 0;
        }
        .w3_gallery_grid1 h4{
            text-transform:capitalize;
            font-size:1.2em;
            color:#212121;
            line-height:1.5em;
            margin:0em 0 0.5em;
        }
        .w3_gallery_grid1 p{
            color:#999;
            line-height:2em;
        }
        /*-- jz-box --*/
        #jzBox {
            top: 0;
            left: 0;
            z-index: 10000;
            position: fixed;
            background-color: rgba(30, 30, 30, 0.9);
            margin: 0 !important;
            text-align: center;
            width: 100%;
            height: 100%;
            display: none;
            color: #fff;
        }

        #jzBoxTargetImg {
            margin:6% 0 1% 0;
            max-width: 96%;
            max-height: 73%;
            cursor: pointer;
        }

        #jzBoxCounter {
            margin-bottom: 1%;
            font-size: 12px;
        }

        #jzBox i:hover {
            cursor: pointer;
            color: #2aabd2;
        }

        #jzBoxBottom { max-height: 22%; }

        #jzBoxNextBig, #jzBoxPrevBig {
            cursor: pointer;
            top: 0;
            left: 0;
            width: 35%;
            position: fixed;
            z-index: 10001;
            height: 100%;
        }

        #jzBoxNextBig { left: 65%; }

        .close {
            float: none;
            opacity:1;
            background: url(../images/close.png) no-repeat 0px 0px;
            display: block;
            width: 32px;
            height: 32px;
            margin:1em auto 0;
        }
        .arrow-left{
            background: url(../images/left.png) no-repeat 0px 0px;
            display: inline-block;
            width: 50px;
            height: 50px;
            margin: 0 auto;
        }
        .arrow-right{
            background: url(../images/right.png) no-repeat 0px 0px;
            display: inline-block;
            width: 50px;
            height: 50px;
            margin: 0 auto;
        }
        /*-- //jz-box --*/
        .w3_gallery_grid img:hover{
            opacity:.5;
        }
        .w3_gallery_grid{
            padding:0;
        }
        /*-- //gallery --*/
        /*-- features --*/
        .bs-example{
            margin:3em 0 0;
        }
        .nav-tabs > li > a {
            margin-right: 15px;
            border-radius: 0;
            color: #212121;
            text-transform: uppercase;
        }
        .nav-tabs > li {
            float: none;
            display: inline-block;
        }
        .nav-tabs {
            width: 45%;
            margin: 0 auto;
            border-bottom: 1px solid #e1d41f;
        }
        .nav-tabs > li > a:hover {
            border-color: #e1d41f;
            border-bottom: 1px solid #fff;
        }
        .nav > li > a:hover, .nav > li > a:focus {
            background: none;
        }
        .nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus {
            border: 1px solid #e1d41f;
            border-bottom: 1px solid #ffffff;
        }
        .w3agile_tab_left h4{
            font-size:1.2em;
            color:#212121;
            line-height:1.5em;
            text-transform: capitalize;
        }
        .w3agile_tab_left p{
            color:#999;
            line-height:2em;
            font-style:italic;
            margin:1em 0 2em;
        }
        .w3agile_tab_left ul li{
            margin-bottom: 1.5em;
            color: #212121;
            background: url(../images/img-sp.png) no-repeat 0px -183px;
            padding-left: 2.5em;
            list-style-type: none;
            text-transform: capitalize;
            font-family: 'Poppins', sans-serif;
        }
        .w3agile_tab_left ul li:last-child{
            margin-bottom:0em;
        }
        .w3agile_tabs {
            margin: 3em 0 0;
        }
        .w3agile_tab_right1 {
            margin: 2em 0 0;
        }
        /*-- //features --*/
        /*-- footer --*/
        .footer{
            padding:4em 0;
            background:#212121;
        }
        .agileinfo_footer_grid h3{
            font-size:1.7em;
            color:#fff;
            position:relative;
            margin-bottom:1.5em;
            padding-left: 3em;
        }
        .agileinfo_footer_grid h3:after{
            content: '';
            background: #fff;
            height: 2px;
            width: 16%;
            position: absolute;
            top: 46%;
            left: 0%;
        }
        .agileinfo_footer_grid p{
            color:#999;
            line-height:2em;
        }
        ul.w3agile_footer_grid_list li {
            list-style-type: none;
            color: #999;
            line-height: 1.9em;
            margin-bottom: 1em;
        }
        ul.w3agile_footer_grid_list li:last-child {
            margin-bottom: 0;
        }
        ul.w3agile_footer_grid_list li a{
            color:#E1D41F;
            text-decoration:none;
        }
        ul.w3agile_footer_grid_list li a:hover{
            color:#fff;
        }
        ul.w3agile_footer_grid_list li span {
            display: block;
            margin: 1em 0 0;
            background: url(../images/img-sp.png) no-repeat -8px -251px;
            padding-left: 2.5em;
        }
        .agileinfo_footer_grid form{
            margin:1em 0 0;
        }
        .agileinfo_footer_grid input[type="email"]{
            outline:none;
            padding:10px;
            width:73%;
            background:#fff;
            border:none;
            font-size:14px;
            color:#212121;
        }
        .agileinfo_footer_grid input[type="email"]::-webkit-input-placeholder{
            color:#212121;
        }
        .agileinfo_footer_grid input[type="submit"]{
            outline: none;
            padding: 10px 0;
            width: 25%;
            background: #E1D41F;
            border: none;
            font-size: 14px;
            color: #212121;
            font-weight: 600;
        }
        .agileinfo_footer_grid input[type="submit"]:hover{
            background:#515050;
            color:#fff;
        }
        ul.agileinfo_social_icons li{
            display:block;
            margin-bottom:2em;
        }
        ul.agileinfo_social_icons li:last-child{
            margin-bottom:0;
        }
        ul.agileinfo_social_icons li a{
            color:#999;
            text-transform:uppercase;
            text-decoration:none;
            display:inline-block;
        }
        ul.agileinfo_social_icons li a:hover{
            color:#fff;
        }
        ul.agileinfo_social_icons li a i{
            padding:0 2em;
        }
        ul.agileinfo_social_icons li a span{
            border-radius: 35px;
            margin: -11px 0 0;
            float: left;
        }
        ul.agileinfo_social_icons li a.facebook span{
            background: url(../images/img-sp.png) no-repeat 8px -338px #3b5998;
            width: 40px;
            height: 40px;
        }
        ul.agileinfo_social_icons li a.twitter span{
            background:url(../images/img-sp.png) no-repeat -51px -341px #55acee;
            width: 40px;
            height: 40px;
        }
        ul.agileinfo_social_icons li a.google span{
            background:url(../images/img-sp.png) no-repeat -115px -340px #dd4b39;
            width: 40px;
            height: 40px;
        }
        ul.agileinfo_social_icons li a.instagram span{
            background:url(../images/img-sp.png) no-repeat -169px -339px #833ab4;
            width: 40px;
            height: 40px;
        }
        .w3agile_copy_right{
            padding:1.5em 0;
            background:#363636;
            text-align:center;
        }
        .w3agile_copy_right p{
            color:#fff;
            line-height:1.8em;
        }
        .w3agile_copy_right p a{
            text-decoration:none;
            color:#E1D41F;
        }
        .w3agile_copy_right p a:hover{
            color:#fff;
        }
        /*-- //footer --*/
        /*-- to-top --*/
        #toTop {
            display: none;
            text-decoration: none;
            position: fixed;
            bottom: 20px;
            right: 2%;
            overflow: hidden;
            z-index: 999;
            width: 32px;
            height: 32px;
            border: none;
            text-indent: 100%;
            background: url(../images/arrow.png) no-repeat 0px 0px;
        }
        #toTopHover {
            width: 32px;
            height: 32px;
            display: block;
            overflow: hidden;
            float: right;
            opacity: 0;
            -moz-opacity: 0;
            filter: alpha(opacity=0);
        }
        /*-- //to-top --*/
        .agileits_breadcrumbs{
            padding:1em 0;
            background:#f5f5f5;
        }
        .agileits_breadcrumbs_left{
            float:left;
        }
        .agileits_breadcrumbs_left ul li{
            display:inline-block;
            color:#212121;
            text-transform:uppercase;
        }
        .agileits_breadcrumbs_left ul li i{
            padding:0 2em;
        }
        .agileits_breadcrumbs_left ul li a{
            color:#E1D41F;
            text-decoration:none;
        }
        .agileits_breadcrumbs_left ul li a:hover{
            color:#212121;
        }
        .agileits_breadcrumbs_right{
            float:right;
        }
        .agileits_breadcrumbs_right h2{
            font-size:2em;
            color:#212121;
        }
        /*-- about --*/
        .about_panel{
            margin:0 !important;
        }
        .w3ls_logo_about{
            padding-bottom:0 !important;
        }
        .agileits_breadcrumbs_left ul {
            padding: .3em 0 0;
        }
        .w3_about_grids{
            margin:3em 0 0;
        }
        .w3_about_grid_left h5{
            color:#212121;
            font-size:1.3em;
            text-transform:capitalize;
            line-height:1.5em;
        }
        .w3_about_grid_left p{
            color:#999;
            line-height:2em;
            font-style:italic;
            margin:1em 0;
        }
        .pa_italic i {
            left: -1em;
            font-size: 11px;
        }
        .pa_italic span {
            display: none;
        }
        .collapsed span {
            display: inline-block;
            left: -1em;
            font-size: 11px;
        }
        .collapsed i {
            display: none;
        }
        .panel-heading {
            padding:10px 35px;
        }
        .panel-title {
            font-size: 1em;
            color:#212121;
            text-transform: capitalize;
            font-family: 'Open Sans', sans-serif;
            text-decoration: none;
        }
        .panel-default {
            border-color: #FFF;
            background: #f5f5f5;
        }
        .panel-default > .panel-heading {
            border-color: #FFF;
            color: #212121;
            background-color: #E1D41F;
        }
        .panel-body {
            padding: 1.5em;
            font-size: 14px;
            line-height: 2em;
            color: #999;
        }
        a.pa_italic label {
            cursor: pointer;
            font-weight:500;
        }
        a.pa_italic:focus {
            outline: none;
            text-decoration: none;
        }
        .panel-default > .panel-heading + .panel-collapse > .panel-body {
            border-top-color: transparent;
        }
        /*-- wmuslider --*/
        .wmuSlider {
            position: relative;
            overflow: hidden;
        }
        .wmuSlider .wmuSliderWrapper article img {
            /*--max-width: 100%;
            width: auto;
            height: auto;
            display:block;--*/
        }
        /* Default Skin */
        .wmuSliderPagination {
            z-index: 2;
            position: absolute;
            left: 48%;
            bottom: 1%;
        }
        ul.wmuSliderPagination {
            padding:0;
        }
        .wmuSliderPagination li {
            float: left;
            margin: 0 8px 0 0;
            list-style-type: none;
        }
        .wmuSliderPagination a {
            display: block;
            text-indent: -9999px;
            width: 10px;
            height: 10px;
            background: #CFCFCF;
            border-radius: 50px;
            -webkit-border-radius: 50px;
            -moz-border-radius: 50px;
            -o-border-radius: 50px;
            -ms-border-radius: 50px;
        }
        .wmuSliderPagination a.wmuActive {
            background: #212121;
            box-shadow: 0px 0px 10px #212121;
            -webkit-box-shadow: 0px 0px 10px #212121;
            -moz-box-shadow: 0px 0px 10px #212121;
            -o-box-shadow: 0px 0px 10px #212121;
            -ms-box-shadow: 0px 0px 10px #212121;
        }
        /* Default Skin */
        .wmuGallery .wmuGalleryImage {
            margin-bottom: 10px;
        }
        .banner-wrap{
            padding:0 0 3em;
        }
        /*-- //wmuslider --*/
        .team{
            background:#f5f5f5;
        }
        .agile_team_grid{
            text-align:center;
        }
        .agile_team_grid1{
            position:relative;
        }
        .agile_team_grid1 img{
            margin:0 auto;
        }
        .agile_team_grids {
            margin: 3em 0 0;
        }
        .agile_team_grid1_pos{
            position:absolute;
            top: 44%;
            left: 4%;
        }
        .agile_team_grid1_pos1 ul li{
            display:inline-block;
        }
        .agile_team_grid1_pos1{
            position:absolute;
            top: 44%;
            left: 24%;
            opacity:0;
        }
        .agile_team_grid:hover .agile_team_grid1_pos1{
            opacity:1;
        }
        a.facebook1{
            background: url(../images/img-sp.png) no-repeat 8px -338px #3b5998;
            width: 40px;
            height: 40px;
            display:block;
            border-radius:25px;
        }
        a.facebook1:hover{
            background: url(../images/img-sp.png) no-repeat 8px -338px #212121;
            display:block;
        }
        a.twitter1{
            background:url(../images/img-sp.png) no-repeat -51px -341px #55acee;
            width: 40px;
            height: 40px;
            display:block;
            border-radius:25px;
        }
        a.twitter1:hover{
            background:url(../images/img-sp.png) no-repeat -51px -341px #212121;
            display:block;
        }
        a.google1{
            background:url(../images/img-sp.png) no-repeat -115px -340px #dd4b39;
            width: 40px;
            height: 40px;
            display:block;
            border-radius:25px;
        }
        a.google1:hover{
            background:url(../images/img-sp.png) no-repeat -115px -340px #212121;
            display:block;
        }
        a.instagram1{
            background:url(../images/img-sp.png) no-repeat -169px -339px #833ab4;
            width: 40px;
            height: 40px;
            display:block;
            border-radius:25px;
        }
        a.instagram1:hover{
            background:url(../images/img-sp.png) no-repeat -169px -339px #212121;
            display:block;
        }
        .agile_team_grid h4{
            font-size:1.1em;
            color:#212121;
            margin:1em 0;
        }
        .agile_team_grid h4 span{
            font-size:.8em;
            display:block;
            color:#e1d41f;
            margin:.5em 0 0;
        }
        .agile_team_grid p{
            color:#999;
            line-height:2em;
        }
        p.dolor {
            text-align: center;
            color: #999;
            position: relative;
            padding-bottom: 2em;
            line-height: 2em;
        }
        p.dolor:after {
            width: 5%;
            height: 2px;
            background:#E1D41F;
            position: absolute;
            bottom: 0%;
            left: 48%;
            content: '';
        }
        .team-bottom h3 {
            font-size: 1.5em;
            color: #212121;
            line-height: 1.5em;
            width: 80%;
            text-align: center;
            margin: 0 auto 1em;
        }
        .more1{
            margin:2em 0 0 !important;
        }
        /*-- //about --*/
        /*--Typography--*/
        .well {
            font-weight: 300;
            font-size: 14px;
        }
        .list-group-item {
            font-weight: 300;
            font-size: 14px;
        }
        li.list-group-item1 {
            font-size: 14px;
            font-weight: 300;
        }
        .typo p {
            margin: 0;
            font-size: 14px;
            font-weight: 300;
        }
        .show-grid [class^=col-] {
            background: #fff;
            text-align: center;
            margin-bottom: 10px;
            line-height: 2em;
            border: 10px solid #f0f0f0;
        }
        .show-grid [class*="col-"]:hover {
            background: #e0e0e0;
        }
        .grid_3{
            margin-bottom:2em;
        }
        .xs h3, h3.m_1{
            color:#000;
            font-size:1.7em;
            font-weight:300;
            margin-bottom: 1em;
        }
        .grid_3 p{
            color: #999;
            font-size: 0.85em;
            margin-bottom: 1em;
            font-weight: 300;
        }
        .grid_4{
            background:none;
            margin-top:50px;
        }
        .label {
            font-weight: 300 !important;
            border-radius:4px;
        }
        .grid_5{
            background:none;
            padding:2em 0;
        }
        .grid_5 h3, .grid_5 h2, .grid_5 h1, .grid_5 h4, .grid_5 h5, h3.hdg, h3.bars {
            margin-bottom: 1em;
            color:#212121;
        }
        .table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td {
            border-top: none !important;
        }
        .tab-content > .active {
            display: block;
            visibility: visible;
        }
        .pagination > .active > a, .pagination > .active > span, .pagination > .active > a:hover, .pagination > .active > span:hover, .pagination > .active > a:focus, .pagination > .active > span:focus {
            z-index: 0;
        }
        .badge-primary {
            background-color: #03a9f4;
        }
        .badge-success {
            background-color: #8bc34a;
        }
        .badge-warning {
            background-color: #ffc107;
        }
        .badge-danger {
            background-color: #e51c23;
        }
        .grid_3 p{
            line-height: 2em;
            color: #888;
            font-size: 0.9em;
            margin-bottom: 1em;
            font-weight: 300;
        }
        .bs-docs-example {
            margin: 1em 0;
        }
        section#tables  p {
            margin-top: 1em;
        }
        .tab-container .tab-content {
            border-radius: 0 2px 2px 2px;
            border: 1px solid #e0e0e0;
            padding: 16px;
            background-color: #ffffff;
        }
        .table td, .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
            padding: 15px!important;
        }
        .table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td {
            font-size: 0.9em;
            color: #999;
            border-top: none !important;
        }
        .tab-content > .active {
            display: block;
            visibility: visible;
        }
        .label {
            font-weight: 300 !important;
        }
        .label {
            padding: 4px 6px;
            border: none;
            text-shadow: none;
        }
        .nav-tabs {
            margin-bottom: 3em;
        }
        .alert {
            font-size: 0.85em;
        }
        h1.t-button,h2.t-button,h3.t-button,h4.t-button,h5.t-button {
            line-height:2em;
            margin-top:0.5em;
            margin-bottom: 0.5em;
        }
        li.list-group-item1 {
            line-height: 2.5em;
        }
        .input-group {
            margin-bottom: 20px;
        }
        .in-gp-tl{
            padding:0;
        }
        .in-gp-tb{
            padding-right:0;
        }
        .list-group {
            margin-bottom: 48px;
        }
        ol {
            margin-bottom: 44px;
        }
        h2.typoh2{
            margin: 0 0 10px;
        }
        @media (max-width:768px){
            .grid_5 {
                padding: 0 0 1em;
            }
            .grid_3 {
                margin-bottom: 0em;
            }
            .in-gp-tl {
                padding: 0 1em;
            }
            .in-gp-tb {
                padding-right: 1em;
            }
        }
        @media (max-width:640px){
            h1, .h1, h2, .h2, h3, .h3 {
                margin-top: 0px;
                margin-bottom: 0px;
            }
            .grid_5 h3, .grid_5 h2, .grid_5 h1, .grid_5 h4, .grid_5 h5, h3.hdg, h3.bars {
                margin-bottom: .5em;
            }
            .progress {
                height: 10px;
                margin-bottom: 10px;
            }
            ol.breadcrumb li,.grid_3 p,ul.list-group li,li.list-group-item1 {
                font-size: 14px;
            }
            .breadcrumb {
                margin-bottom: 10px;
            }
            .well {
                font-size: 14px;
                margin-bottom: 10px;
            }
            h2.typoh2 {
                font-size: 1.5em;
            }
            .label {
                font-size: 60%;
            }
            .in-gp-tl {
                padding: 0 1em;
            }
            .in-gp-tb {
                padding-right: 1em;
            }
        }
        @media (max-width:480px){
            .table h1 {
                font-size: 26px;
            }
            .table h2 {
                font-size: 23px;
            }
            .table h3 {
                font-size: 20px;
            }
            .label {
                font-size: 53%;
            }
            .alert,p {
                font-size: 14px;
            }
            .pagination {
                margin: 20px 0 0px;
            }
        }
        @media (max-width: 320px){
            .grid_4 {
                margin-top: 18px;
            }
            h3.title {
                font-size: 1.6em;
            }
            .alert, p,ol.breadcrumb li, .grid_3 p,.well, ul.list-group li, li.list-group-item1,a.list-group-item {
                font-size: 13px;
            }
            .alert {
                padding: 10px;
                margin-bottom: 10px;
            }
            ul.pagination li a {
                font-size: 14px;
                padding: 5px 11px;
            }
            .list-group {
                margin-bottom: 10px;
            }
            .well {
                padding: 10px;
            }
            .nav > li > a {
                font-size: 14px;
            }
            table.table.table-striped,.table-bordered,.bs-docs-example {
                display: none;
            }
        }
        /*--//Typography --*/
        /*-- blog --*/
        #demo,#demo1 {
            height: 435px;
        }
        .wthree_blog_left_grid h3{
            font-size:1.5em;
            color:#212121;
            line-height:1.5em;
            text-transform: capitalize;
        }
        .wthree_blog_left_grid h3 a{
            text-decoration:none;
            color:#212121;
        }
        .wthree_blog_left_grid h3 a:hover{
            color:#999;
        }
        .wthree_blog_left_grid p{
            color:#999;
            line-height:2em;
        }
        .button_single{
            margin:0 !important;
        }
        .wthree_blog_left_grid h4{
            font-size: .9em;
            color: #E1D41F;
            margin: 2em 0 0;
        }
        .wthree_blog_left_grid ul{
            padding:1em 0;
        }
        .wthree_blog_left_grid ul li{
            display:inline-block;
            color:#212121;
        }
        .wthree_blog_left_grid ul li span{
            color: #E1D41F;
            padding-right:1em;
        }
        .wthree_blog_left_grid ul li a{
            text-decoration:none;
            color:#212121;
        }
        .wthree_blog_left_grid ul li a:hover{
            color:#E1D41F;
        }
        .wthree_blog_left_grid ul li i{
            padding:0 1em;
        }
        .wthree_blog_left_grid1{
            margin:3em 0;
        }
        .wthree_blog_left_grid iframe{
            width:100%;
            min-height:350px;
        }
        .w3ls_search input[type="text"]{
            outline:none;
            padding:10px;
            background:#f5f5f5;
            border:1px solid #E1E1E1;
            color:#212121;
            font-size:14px;
            width:80%;
        }
        ::-webkit-input-placeholder{
            color:#212121;
        }
        .w3ls_search input[type="submit"]{
            outline:none;
            padding:10px;
            background:url(../images/img-sp.png) no-repeat 26px -392px #e1d41f;
            border:none;
            width:19%;
        }
        .w3ls_search input[type="submit"]:hover{
            background:url(../images/img-sp.png) no-repeat 26px -392px #999;
        }
        .w3l_categories,.w3l_archives{
            margin:3em 0;
        }
        .w3l_categories h3,.w3l_archives h3,.agileinfo_tags h3,.w3agile_flickr_posts h3,.agileits_reply h3{
            font-size:1.5em;
            color:#212121;
            padding-left:3em;
            margin-bottom: 1.5em;
            position:relative;
        }
        .w3l_categories h3:before,.w3l_archives h3:before,.agileits_reply h3:before,.agileinfo_tags h3:before,.w3agile_flickr_posts h3:before{
            content:'';
            background:#212121;
            height:2px;
            width:14%;
            position:absolute;
            top:50%;
            left:0%;
        }
        .w3l_categories ul li,.w3l_archives ul li{
            margin-bottom: 1.5em;
            background: url(../images/img-sp.png) no-repeat 0px -183px;
            padding-left: 2.5em;
            list-style-type: none;
            text-transform: capitalize;
            font-family: 'Poppins', sans-serif;
            color: #999;
        }
        .w3l_categories ul li a{
            color: #999;
            text-decoration:none;
            line-height: 1.8em;
        }
        .w3l_categories ul li a:hover{
            color: #212121;
        }
        .agileinfo_tags ul li{
            display:inline-block;
            margin:5px;
        }
        .agileinfo_tags ul li a{
            padding: .3em 1em;
            display: block;
            border: 1px solid #DBDBDB;
            color: #212121;
            border-radius: 20px;
            text-decoration:none;
        }
        .agileinfo_tags ul li a:hover{
            background:#e1d41f;
            border:1px solid #e1d41f;
        }
        .w3agile_flickr_post_left{
            float:left;
            width:30%;
            margin:.33%;
        }
        .w3_paging{
            margin:3em 0 0 !important;
        }
        .w3_paging > li > a, .w3_paging > li > span,.w3_paging > li > a:hover, .w3_paging > li > span:hover, .w3_paging > li > a:focus, .w3_paging > li > span:focus {
            color: #212121;
        }
        .w3_paging > .active > a{
            background-color: #e1d41f;
            border-color: #e1d41f;
            color:#212121;
        }
        .w3agile_flickr_post_left a img:hover{
            opacity:.5;
        }
        .agileits_breadcrumbs_left ul li i{
            padding:0 1em;
        }
        /*-- //blog --*/
        /*-- single --*/
        .wthree_blog_left_grid p i {
            display: block;
            margin: 1em 0;
            color: #212121;
        }
        .agileits_share{
            margin:2em 0 4em;
        }
        .agileits_share ul li {
            display: inline-block;
            margin-right: 1em;
        }
        .agileits_reply input[type="text"], .agileits_reply input[type="email"], .agileits_reply textarea {
            outline: none;
            padding: 10px 20px;
            font-size: 14px;
            color: #212121;
            background: #f5f5f5;
            width: 100%;
            border: 1px solid #E6E6E6;
            border-radius:25px;
        }
        .agileits_reply input[type="email"]{
            margin:1em 0;
        }
        .agileits_reply textarea {
            min-height: 200px;
            margin: 1em 0em;
            resize:none;
        }
        .agileits_reply input[type="submit"]{
            outline: none;
            padding: 10px 0;
            font-size: 14px;
            color: #212121;
            background: #E1D41F;
            font-weight: bold;
            width: 45%;
            border: none;
            text-transform: uppercase;
            border-radius:25px;
        }
        .agileits_reply input[type="submit"]:hover{
            background:#212121;
            color:#fff;
        }
        .agileits_reply h3:before {
            width: 10% !important;
        }
        /*-- //single --*/
        /*-- mail --*/
        .w3_map iframe {
            width: 100%;
            min-height: 400px;
        }
        .agile_mail_grids {
            margin: 3em 0;
        }
        .agile_mail_grid{
            width: 75%;
            margin: 0 auto;
        }
        .agile_mail_grid_left input[type="text"], .agile_mail_grid_left input[type="email"], .agile_mail_grid textarea {
            outline: none;
            border: 1px solid #E4E4E4;
            background: #f5f5f5;
            padding: 10px 20px;
            width: 100%;
            font-size: 14px;
            color: #212121;
            border-radius: 25px;
        }
        .agile_mail_grid textarea {
            margin: 0 1em;
            min-height: 250px;
            width: 96.5% !important;
            resize:none;
        }
        .agile_mail_grid input[type="submit"] {
            outline: none;
            border: none;
            background: #E1D41F;
            padding: 10px 0;
            width: 35%;
            font-size: 1em;
            color: #212121;
            margin: 1em 0 0 16em;
            text-align: center;
            border-radius: 25px;
        }
        .agile_mail_grid input[type="submit"]:hover{
            background:#212121;
            color:#fff;
        }
        .agile_mail_grid_left input[type="text"]:nth-child(2) {
            margin: 2em 0;
        }
        .mail_grid1_left1{
            padding: 2em;
            border: 1px solid #E4E4E4;
            background: #f5f5f5;
            text-align: center;
        }
        .mail_grid1_left1 span {
            font-size: 1.5em;
            color: #E1D41F;
            padding: .5em;
            border: 1px solid;
            border-radius: 30px;
        }
        .mail_grid1_left1 h4 {
            font-size:1.3em;
            color: #212121;
            margin: 1em 0 .5em;
        }
        .mail_grid1_left1 p {
            color: #999;
            line-height: 2em;
            margin-bottom: 2em;
        }
        .mail_grid1_left1 ul li {
            list-style-type: none;
            margin-bottom: 1em;
            color: #999;
        }
        .mail_grid1_left1 ul li:last-child {
            margin-bottom: 0;
        }
        .mail_grid1_left1 ul li a {
            color:#212121;
            text-decoration: none;
        }
        .mail_grid1_left1 ul li a:hover {
            color:#999;
        }
        /*-- //mail --*/
        /*-----start-responsive-design------*/
        @media (max-width:1366px){
            .w3_gallery_grid1 h4 {
                font-size: 1.17em;
            }
        }
        @media (max-width:1280px){
            .w3_gallery_grid1 {
                padding: 2em 1em 0;
            }
        }
        @media (max-width:1080px){
            .w3ls_logo h1 a {
                width: 30%;
            }
            .w3l_banner_info {
                padding-bottom: 11em;
            }
            .w3ls_logo {
                padding: 3em 0 8em;
            }
            .banner {
                min-height: 630px;
            }
            .agileits_service_grid h3 {
                font-size: 1.1em;
            }
            .w3_gallery_grid1 {
                padding: 1.5em .8em 0;
            }
            .w3_gallery_grid1 h4 {
                font-size: 1em;
            }
            .nav-tabs {
                width: 55%;
            }
            .agileinfo_footer_grid h3 {
                padding-left: 2em;
            }
            .banner1 {
                min-height: 230px;
            }
            .agile_team_grid1_pos {
                left: -7%;
            }
            .agile_team_grid1_pos1 {
                left: 16%;
            }
            .team-bottom h3 {
                font-size: 1.3em;
                width: 90%;
            }
            .w3ls_search input[type="submit"] {
                background: url(../images/img-sp.png) no-repeat 18px -392px #e1d41f;
                width: 18%;
            }
            .w3ls_search input[type="submit"]:hover {
                background: url(../images/img-sp.png) no-repeat 18px -392px #999;
            }
            .agile_mail_grid {
                width: 85%;
            }
            .mail_grid1_left1 {
                padding: 1.8em;
            }
            #demo,#demo1 {
                height: 360px;
            }
        }
        @media (max-width: 1024px){
            .w3_gallery_grid1 {
                padding: 1.5em .5em 0;
            }
            .agileinfo_footer_grid h3 {
                font-size: 1.5em;
            }
            .services, .features, .about, .typo, .team, .team-bottom, .blog, .mail {
                padding: 4em 0;
            }
            .footer {
                padding: 3em 0;
            }
            .w3_map iframe {
                min-height: 350px;
            }
        }
        @media (max-width: 991px){
            .w3ls_logo h1 a {
                width: 36%;
                background: url(../images/img-sp.png) no-repeat 92px 0px;
                padding: 1.7em 0 0;
                font-size: 1.2em;
            }
            .w3l_banner_info h3 {
                font-size: 1.8em;
                width: 90%;
            }
            .wthree_banner_bottom_left h2 {
                text-align: center;
            }
            .agileits_service_grid {
                float: left;
                width: 33.33%;
            }
            .w3_gallery_grid {
                float: left;
                width: 33.33%;
            }
            .w3_gallery_grid:nth-child(4) {
                margin-bottom: 4em;
            }
            .w3_gallery_grid1 h4 {
                font-size: 1.2em;
            }
            .w3_gallery_grid1 {
                padding: 1.5em 1.5em 0;
            }
            .nav-tabs {
                width: 70%;
            }
            .w3agile_tab_right img {
                margin: 0 auto;
            }
            .w3agile_tab_right2{
                margin: 0 0 2em;
            }
            .agileinfo_footer_grid h3:after {
                width: 10%;
            }
            .agileinfo_footer_grid h3 {
                padding-left: 3.5em;
            }
            .agileinfo_footer_grid:nth-child(2) {
                margin: 3em 0;
            }
            .wmuSlider .wmuSliderWrapper article img {
                margin: 0 auto;
            }
            .w3_about_grid_right {
                margin: 3em 0 0;
            }
            .agile_team_grid {
                float: left;
                width: 50%;
            }
            .agile_team_grid1_pos {
                left: 15%;
            }
            .agile_team_grid1_pos1 {
                left: 29%;
            }
            .agile_team_grid:nth-child(2) {
                margin-bottom: 2em;
            }
            .team-bottom h3 {
                width: 100%;
            }
            #demo,#demo1 {
                height: 400px;
            }
            .wthree_blog_right {
                margin: 3em 0 0;
            }
            .w3ls_search input[type="submit"] {
                background: url(../images/img-sp.png) no-repeat 47px -392px #e1d41f;
            }
            .w3ls_search input[type="submit"]:hover {
                background: url(../images/img-sp.png) no-repeat 47px -392px #999;
            }
            .w3l_categories h3:before, .w3l_archives h3:before, .agileits_reply h3:before, .agileinfo_tags h3:before, .w3agile_flickr_posts h3:before {
                width: 9%;
            }
            .agileits_share {
                margin: 2em 0 3em;
            }
            .agileits_reply h3:before {
                width: 9% !important;
            }
            .agile_mail_grid textarea {
                width: 95.5% !important;
            }
            .agile_mail_grid input[type="submit"] {
                margin: 1em 0 0 12.5em;
            }
            .agile_mail_grid1_left {
                width: 50%;
                margin: 0 auto;
            }
            .agile_mail_grid1_left:nth-child(2) {
                margin: 2em auto;
            }
        }
        @media (max-width: 800px){
            .w3l_banner_info h3 {
                font-size: 1.6em;
            }
            .w3ls_logo h1 a {
                width: 30%;
                background: url(../images/img-sp.png) no-repeat 80px 0px;
                background-size: 180%;
                font-size: 1em;
            }
            .w3ls_logo {
                padding: 3em 0 6em;
            }
            .banner {
                min-height: 555px;
            }
            .wthree_banner_bottom_left h2 {
                font-size: 1.2em;
            }
            .w3agile_tab_right img {
                width: 70%;
            }
            .agileits_breadcrumbs_right h2 {
                font-size: 1.7em;
            }
            .banner1 {
                min-height: 200px;
            }
            #demo, #demo1 {
                height: 430px;
            }
            .w3_map iframe {
                min-height: 300px;
            }
        }
        @media (max-width: 767px){
            .navbar-toggle {
                float: none;
                margin: .5em 0;
            }
            .navbar-default .navbar-toggle .icon-bar {
                background-color: #fff;
            }
            .navbar-default .navbar-toggle {
                border-color: #fff;
            }
            .navbar-left {
                text-align: center;
            }
            .navbar-default .navbar-toggle:hover, .navbar-default .navbar-toggle:focus {
                background-color: transparent;
            }
            .navbar-default .navbar-collapse, .navbar-default .navbar-form {
                border: none;
            }
            .navbar-collapse {
                box-shadow: none;
            }
            .navbar-nav > li {
                display: block;
            }
            .navbar-nav > li > a {
                padding: 11px 0;
                overflow: hidden;
            }
            .navbar-nav {
                background: #393939;
                padding: 1em 0;
            }
        }
        @media (max-width: 736px){
            .w3ls_logo h1 a {
                width: 32%;
            }
            .w3ls_logo {
                padding: 3em 0 4em;
            }
            .banner {
                min-height: 500px;
            }
            .w3l_banner_info {
                padding-bottom: 10em;
            }
            .nav-tabs {
                width: 75%;
            }
        }
        @media (max-width: 667px){
            .w3ls_logo h1 a {
                width: 35%;
            }
            .w3l_banner_info h3 {
                letter-spacing: 2px;
            }
            .w3l_banner_info {
                padding-bottom: 8em;
            }
            .banner {
                min-height: 470px;
            }
            .button {
                max-width: 170px;
            }
            .button--nina::before {
                padding: .5em 0;
            }
            .button--nina > span {
                padding: .5em 0;
            }
            .agileits_service_grid {
                float: none;
                width: 75%;
                margin: 0 auto;
            }
            .agileits_service_grid:nth-child(2) {
                margin: 2em auto;
            }
            .head {
                font-size: 1.8em;
            }
            .w3_gallery_grid1 h4 {
                font-size: 1.1em;
            }
            .nav-tabs {
                width: 80%;
            }
            .agileinfo_footer_grid h3 {
                padding-left: 3em;
            }
        }
        @media (max-width: 640px){
            .nav-tabs {
                width: 85%;
            }
            .w3ls_logo h1 a {
                width: 37%;
            }
            .w3l_banner_info h3 {
                letter-spacing: 1px;
            }
            .services, .features, .about, .typo, .team, .team-bottom, .blog, .mail {
                padding: 3em 0;
            }
            .w3_gallery_grid1 {
                padding: 1.5em 1.3em 0;
            }
            .w3_gallery_grid:nth-child(4) {
                margin-bottom: 3em;
            }
            .w3_about_grids,.w3_about_grid_right {
                margin: 2em 0 0;
            }
            .agile_team_grid1_pos {
                left: 6%;
            }
            .agile_team_grid1_pos1 {
                left: 24%;
            }
            .team-bottom h3 {
                font-size: 1.2em;
                line-height: 1.8em;
            }
            #demo, #demo1 {
                height: 390px;
            }
            .wthree_blog_left_grid h3 {
                font-size: 1.3em;
            }
            .agileits_reply h3:before {
                width: 11% !important;
            }
            .w3ls_search input[type="submit"] {
                background: url(../images/img-sp.png) no-repeat 38px -392px #e1d41f;
            }
            .w3ls_search input[type="submit"]:hover {
                background: url(../images/img-sp.png) no-repeat 38px -392px #999;
            }
            .agile_mail_grid textarea {
                width: 94.5% !important;
            }
            .agile_mail_grid1_left {
                width: 65%;
            }
            .mail_grid1_left1 h4 {
                font-size: 1.2em;
            }
            .agile_mail_grid input[type="submit"] {
                margin: 1em 0 0 9.5em;
                width: 40%;
            }
        }
        @media (max-width: 600px){
            .w3ls_logo h1 a {
                width: 36%;
                font-size: .9em;
                background: url(../images/img-sp.png) no-repeat 71px 0px;
                background-size: 181%;
            }
            .w3_gallery_grid1 h4 {
                font-size: 1em;
            }
            .nav-tabs {
                width: 90%;
            }
            .bs-example {
                margin: 2em 0 0;
            }
            .w3agile_tab_right img {
                width: 80%;
            }
            .agileinfo_footer_grid h3 {
                padding-left: 2.5em;
            }
        }
        @media (max-width: 568px){
            .w3ls_logo h1 a {
                width: 38%;
            }
            .w3ls_logo {
                padding: 2em 0 3em;
            }
            .w3l_banner_info h3 {
                width: 100%;
            }
            .banner {
                min-height: 420px;
            }
            .agileits_service_grid {
                width: 90%;
            }
            .w3_gallery_grid1 {
                padding: 1.5em 1em 0;
            }
            .w3_gallery_grids {
                margin: 2em 0 0;
            }
            .nav-tabs {
                width: 93%;
            }
        }
        @media (max-width: 480px){
            .w3ls_logo h1 a {
                width: 45%;
            }
            .navbar-nav > li > a {
                font-size: 13px;
            }
            .w3l_banner_info h3 {
                font-size: 1.4em;
            }
            .banner {
                min-height: 400px;
            }
            .w3l_banner_info {
                padding-bottom: 7em;
            }
            .wthree_banner_bottom_left h2 {
                font-size: 1.1em;
            }
            .banner-bottom {
                padding: 1.5em 0;
            }
            .agileits_service_grid1, .agileits_service_grid2, .agileits_service_grid3 {
                width: 75px;
                height: 75px;
            }
            .agileits_service_grid1 span {
                background: url(../images/img-sp.png) no-repeat -229px -1px;
                width: 75px;
                height: 75px;
            }
            .agileits_service_grid:hover .agileits_service_grid1 span {
                background: url(../images/img-sp.png) no-repeat -229px -78px;
                display: block;
            }
            .agileits_service_grid2 span {
                background: url(../images/img-sp.png) no-repeat -332px -3px;
                width: 75px;
                height: 75px;
            }
            .agileits_service_grid:hover .agileits_service_grid2 span {
                background: url(../images/img-sp.png) no-repeat -332px -84px;
                display: block;
            }
            .agileits_service_grid3 span {
                background: url(../images/img-sp.png) no-repeat -432px -2px;
                width: 75px;
                height: 75px;
            }
            .agileits_service_grid:hover .agileits_service_grid3 span {
                background: url(../images/img-sp.png) no-repeat -432px -82px;
                display: block;
            }
            .agileits_service_grid {
                width: 100%;
            }
            .head {
                padding-bottom: .6em;
                font-size: 1.7em;
            }
            .w3_gallery_grid {
                width: 50%;
            }
            .w3_gallery_grid:nth-child(3),.w3_gallery_grid:nth-child(5) {
                margin-bottom: 2em;
            }
            .w3_gallery_grid:nth-child(4) {
                margin-bottom: 0;
            }
            .w3_gallery_grid1 h4 {
                font-size: 1.1em;
            }
            .nav-tabs {
                width: 100%;
            }
            .nav-tabs > li > a {
                margin-right: 2px;
            }
            .w3agile_tab_right img {
                width: 90%;
            }
            .agileinfo_footer_grid h3 {
                padding-left: 2em;
            }
            .footer {
                padding: 2em 0;
            }
            .banner1 {
                min-height: 160px;
            }
            .agileits_breadcrumbs_right h2 {
                font-size: 1.4em;
            }
            .services, .features, .about, .typo, .team, .team-bottom, .blog, .mail {
                padding: 2em 0;
            }
            .w3_about_grid_left h5 {
                font-size: 1.2em;
            }
            .agile_team_grid {
                float: none;
                width: 68%;
                margin: 0 auto;
            }
            .agile_team_grids {
                margin: 2em 0 0;
            }
            .agile_team_grid:nth-child(2) {
                margin: 2em auto;
            }
            .agile_team_grid:nth-child(3) {
                margin-bottom: 2em;
            }
            p.dolor {
                padding-bottom: 1.5em;
            }
            .more1 {
                margin: 1.5em 0 0 !important;
            }
            .wthree_blog_left_grid iframe {
                width: 100%;
                min-height: 230px;
            }
            .wthree_blog_left,.wthree_blog_right {
                padding: 0;
            }
            .w3ls_search input[type="submit"] {
                background: url(../images/img-sp.png) no-repeat 24px -392px #e1d41f;
            }
            .w3ls_search input[type="submit"]:hover {
                background: url(../images/img-sp.png) no-repeat 24px -392px #999;
            }
            .wthree_blog_left_grid h3 {
                font-size: 1.2em;
            }
            .w3l_categories h3, .w3l_archives h3, .agileinfo_tags h3, .w3agile_flickr_posts h3, .agileits_reply h3 {
                font-size: 1.4em;
                padding-left: 2em;
            }
            .w3_paging {
                margin: 2em 0 0 !important;
            }
            .agileinfo_footer_grid h3 {
                margin-bottom: 1em;
            }
            .agileits_share {
                margin: 1em 0 2em;
            }
            .agileits_reply h3:before {
                width: 9% !important;
            }
            .agileits_breadcrumbs_left ul,.agile_mail_grid_left {
                padding: 0;
            }
            .w3_map iframe {
                min-height: 250px;
            }
            .agile_mail_grids {
                margin: 2em 0;
            }
            .agile_mail_grid {
                width: 100%;
            }
            .agile_mail_grid_left input[type="text"]:nth-child(2) {
                margin: 1em 0;
            }
            .agile_mail_grid textarea {
                width: 100% !important;
                margin: 0;
            }
            .agile_mail_grid1_left {
                width: 80%;
            }
            .agile_mail_grid input[type="submit"] {
                margin: 1em 0 0 7em;
                width: 50%;
            }
        }
        @media (max-width: 414px){
            .w3ls_logo h1 a {
                width: 48%;
                font-size: .8em;
                background: url(../images/img-sp.png) no-repeat 58px 0px;
                background-size: 200%;
                padding: 1.8em 0 0;
            }
            .w3l_banner_info h3 {
                font-size: 1.2em;
                letter-spacing: 0px;
            }
            .banner {
                min-height: 365px;
            }
            .wthree_banner_bottom_left h2 {
                font-size: 1em;
            }
            .agileits_service_grid h3 {
                margin: 1.5em 0 0.5em;
            }
            .nav-tabs > li > a {
                padding:7px 10px;
                margin-right: 5px;
            }
            .nav-tabs > li {
                font-size: 12px;
            }
            .w3agile_tab_left,.w3_about_grid_left {
                padding: 0;
            }
            .w3agile_tabs {
                margin: 0;
            }
            .nav-tabs {
                margin-bottom: 2em;
            }
            .w3agile_tab_left h4 {
                font-size: 1.1em;
            }
            .w3agile_tab_right img {
                width: 100%;
            }
            .banner1 {
                min-height: 150px;
            }
            .w3_about_grid_left h5 {
                font-size: 1.1em;
            }
            .wmuSliderPagination {
                bottom: 3%;
            }
            .agile_team_grid1_pos {
                left: -3%;
            }
            .agile_team_grid1_pos1 {
                left: 18%;
            }
            .wthree_blog_left_grid ul li {
                margin-bottom: .5em;
            }
            .wthree_blog_left_grid ul {
                padding: 1em 0 .5em;
            }
            .wthree_blog_left_grid h3 {
                font-size: 1.1em;
            }
            .w3ls_search input[type="submit"] {
                background: url(../images/img-sp.png) no-repeat 16px -392px #e1d41f;
                padding: 10px 0 11px;
            }
            .w3ls_search input[type="submit"]:hover {
                background: url(../images/img-sp.png) no-repeat 16px -392px #999;
            }
            .agile_mail_grid textarea {
                min-height: 200px;
            }
            .agile_mail_grid1_left {
                width: 100%;
            }
            .agile_mail_grid input[type="submit"] {
                margin: 1em 0 0 5.5em;
            }
        }
        @media (max-width: 384px){
            .w3ls_logo h1 a {
                width: 52%;
            }
            .w3l_banner_info h3 {
                font-size: 1.1em;
            }
            .wthree_banner_bottom_left h2 {
                font-size: .9em;
            }
            .w3_gallery_grid1 h4 {
                font-size: 1em;
            }
            .nav-tabs > li > a {
                padding:7px 9px;
                margin-right: 0px;
            }
            .w3agile_tab_left h4 {
                font-size: 1em;
            }
            .agileinfo_footer_grid h3 {
                font-size: 1.4em;
            }
            .agile_team_grid1_pos {
                left: -9%;
                top: 43%;
            }
            .agile_team_grid1_pos1 {
                left: 14%;
                top: 43%;
            }
            .team-bottom h3 {
                font-size: 1.1em;
            }
            p.dolor:after {
                width: 15%;
                left: 42%;
            }
            .wthree_blog_left_grid iframe {
                min-height: 190px;
            }
        }
        @media (max-width: 375px){
            .w3ls_logo h1 a {
                width: 53%;
            }
            .w3_gallery_grid1 {
                padding: 1.5em .8em 0;
            }
            .nav-tabs > li {
                font-size: 12px;
            }
            .nav-tabs > li > a {
                padding: 7px 8px;
            }
            .agileinfo_footer_grid:nth-child(2) {
                margin: 2em 0;
            }
            .navbar-nav > li > a {
                padding: 9px 0;
            }
            .panel-title {
                font-size: 15px;
            }
            .wmuSliderPagination {
                left: 46%;
            }
            .wthree_blog_left_grid h3 {
                font-size: 1em;
            }
            .w3l_categories h3, .w3l_archives h3, .agileinfo_tags h3, .w3agile_flickr_posts h3, .agileits_reply h3 {
                font-size: 1.3em;
            }
            .w3l_categories h3:before, .w3l_archives h3:before, .agileits_reply h3:before, .agileinfo_tags h3:before, .w3agile_flickr_posts h3:before {
                width: 11%;
            }
            .w3l_categories, .w3l_archives {
                margin: 2em 0;
            }
            .w3_map iframe {
                min-height: 200px;
            }
            .agile_mail_grid input[type="submit"] {
                margin: 1em 0 0 5em;
            }
        }
        @media (max-width: 320px){
            .w3ls_logo h1 a {
                width: 56%;
                font-size: .7em;
                padding: 1.9em 0 0;
            }
            .w3l_banner_info h3 {
                font-size: .9em;
                line-height:1.8em;
            }
            .banner {
                min-height: 315px;
            }
            .w3ls_logo {
                padding: 1em 0 2em;
            }
            .banner-bottom {
                padding: 1em 0;
            }
            .agileits_service_grid h3 {
                font-size: 1em;
            }
            p, ul li,.agileinfo_footer_grid input[type="email"],.agile_mail_grid_left input[type="text"], .agile_mail_grid_left input[type="email"], .agile_mail_grid textarea,.agileits_reply input[type="text"], .agileits_reply input[type="email"], .agileits_reply textarea {
                font-size: 13px;
            }
            .agileits_reply input[type="submit"] {
                width: 100%;
            }
            .agileits_service_grid,.agileinfo_footer_grid,.w3_about_grid_right {
                padding: 0;
            }
            .head {
                padding-bottom: .5em;
                font-size: 1.5em;
            }
            .head:after {
                width: 15%;
                left: 42.5%;
            }
            .w3_gallery_grid1 h4 {
                font-size: .9em;
            }
            .w3_gallery_grid1 {
                padding: 1.5em .7em 0;
            }
            .nav-tabs > li > a {
                padding: 5px 3px;
                margin-right: 0px;
                font-size: 11px;
            }
            .agileinfo_footer_grid h3 {
                font-size: 1.3em;
            }
            .agileinfo_footer_grid h3:after {
                width: 12%;
            }
            .banner1 {
                min-height: 115px;
            }
            .agileits_breadcrumbs_right h2 {
                font-size: 1.2em;
            }
            .w3_about_grid_left h5 {
                font-size: 1em;
            }
            .panel-heading {
                padding: 10px 18px;
            }
            .panel-body {
                padding: 1em;
                font-size: 13px;
            }
            .agile_team_grid {
                width: 80%;
            }
            .team-bottom h3 {
                font-size: 1em;
            }
            .wthree_blog_left_grid iframe {
                min-height: 163px;
            }
            .wthree_blog_left_grid h4 {
                margin: 1em 0 0;
            }
            .wthree_blog_left_grid1 {
                margin: 2em 0;
            }
            .wthree_blog_right {
                margin: 2em 0 0;
            }
            .w3ls_search input[type="submit"] {
                background: url(../images/img-sp.png) no-repeat 9px -392px #e1d41f;
            }
            .w3ls_search input[type="submit"]:hover {
                background: url(../images/img-sp.png) no-repeat 9px -392px #999;
            }
            .agileits_breadcrumbs_left ul li i {
                padding: 0 0.5em;
            }
            .agileits_breadcrumbs_left ul li {
                font-size: 12px;
            }
            .agile_mail_grid input[type="submit"] {
                margin: 1em 0 0 0em;
                font-size: 14px;
                width: 100%;
            }
            .mail_grid1_left1 h4 {
                font-size: 1.1em;
            }
            .mail_grid1_left1 p {
                margin-bottom: 1em;
            }
            .mail_grid1_left1 {
                padding:1.5em 1.1em;
            }
        }
        @media (max-width: 240px){
            .w3ls_logo h1 a {
                width: 80%;
            }
        }
    </style>

    <div class="team">
        <div class="container">
            <h3 class="head">Meet Our Team</h3>
            <div class="agile_team_grids">
                <div class="col-md-3 agile_team_grid">
                    <div class="agile_team_grid1">
                        <img src="images/ashish.jpg" alt=" " class="img-responsive img-circle" />
                        <div class="agile_team_grid1_pos">
                            <a href="http://www.facebook.com/ashishpatel0720" class="facebook1"></a>
                        </div>
                        <div class="agile_team_grid1_pos1">
                            <ul>
                                <li><a href="http://www.twitter.com/ashishpatel0720" class="twitter1"></a></li>
                                <li><a href="http://www.google.com/ashishpatel0720" class="google1"></a></li>
                            </ul>
                        </div>
                    </div>
                    <h4>Ashish Patel <span>Computer Engineer</span></h4>
                    <p>Morbi placerat molestie felis. Integer facilisis velit leo.</p>
                </div>
                <div class="col-md-3 agile_team_grid">
                    <div class="agile_team_grid1">
                        <img src="images/3.png" alt=" " class="img-responsive" />
                        <div class="agile_team_grid1_pos">
                            <a href="#" class="twitter1"></a>
                        </div>
                        <div class="agile_team_grid1_pos1">
                            <ul>
                                <li><a href="#" class="facebook1"></a></li>
                                <li><a href="#" class="instagram1"></a></li>
                            </ul>
                        </div>
                    </div>
                    <h4>Mark Doe <span>Farmer</span></h4>
                    <p>Morbi placerat molestie felis. Integer facilisis velit leo.</p>
                </div>
                <div class="col-md-3 agile_team_grid">
                    <div class="agile_team_grid1">
                        <img src="images/2.png" alt=" " class="img-responsive" />
                        <div class="agile_team_grid1_pos">
                            <a href="#" class="google1"></a>
                        </div>
                        <div class="agile_team_grid1_pos1">
                            <ul>
                                <li><a href="#" class="instagram1"></a></li>
                                <li><a href="#" class="twitter1"></a></li>
                            </ul>
                        </div>
                    </div>
                    <h4>John Crisp <span>Farmer</span></h4>
                    <p>Morbi placerat molestie felis. Integer facilisis velit leo.</p>
                </div>
                <div class="col-md-3 agile_team_grid">
                    <div class="agile_team_grid1">
                        <img src="images/4.png" alt=" " class="img-responsive" />
                        <div class="agile_team_grid1_pos">
                            <a href="#" class="instagram1"></a>
                        </div>
                        <div class="agile_team_grid1_pos1">
                            <ul>
                                <li><a href="#" class="facebook1"></a></li>
                                <li><a href="#" class="twitter1"></a></li>
                            </ul>
                        </div>
                    </div>
                    <h4>Michael Carl <span>Farmer</span></h4>
                    <p>Morbi placerat molestie felis. Integer facilisis velit leo.</p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            /*
             var defaults = {
             containerID: 'toTop', // fading element id
             containerHoverID: 'toTopHover', // fading element hover id
             scrollSpeed: 1200,
             easingType: 'linear'
             };
             */

            $().UItoTop({ easingType: 'easeOutQuart' });

        });
    </script>
    <!-- //team -->
    @endsection