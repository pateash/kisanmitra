@extends('layouts.master')

@section('content')
<style>
    /*--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
--*/
    html, body{
        margin:0;
        background:	#fff;
        font-family: 'Open Sans', sans-serif;
    }
    h4, h5, h6,
    h1, h2, h3 {
        margin: 0;
        font-family: 'Montserrat', sans-serif;
    }
    p{
        margin:0;
    }
    ul,label{
        margin:0;
        padding:0;
    }
    input[type="button"],input[type="submit"]{
        transition:0.5s all;
        -webkit-transition:0.5s all;
        -moz-transition:0.5s all;
        -o-transition:0.5s all;
        -ms-transition:0.5s all;
    }
    body a{
        transition: 0.5s all;
        -webkit-transition: 0.5s all;
        -o-transition: 0.5s all;
        -moz-transition: 0.5s all;
        -ms-transition: 0.5s all;
        text-decoration:none;

    }
    body a:hover{
        text-decoration:none;
    }
    /*-- to-top --*/
    #toTop {
        display: none;
        text-decoration: none;
        position: fixed;
        bottom: 28px;
        right: 1%;
        overflow: hidden;
        z-index: 999;
        width: 32px;
        height: 32px;
        border: none;
        text-indent: 100%;
        background: url("../images/arr.png") no-repeat 0px 0px;
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
    .banner{
        background:url(../images/ban6.jpg) no-repeat 0px 0px;
        background-size:cover;
        -webkit-background-size: cover;
        -o-background-size: cover;
        -ms-background-size: cover;
        -moz-background-size: cover;
        min-height: 730px;
    }
    /*-- header --*/
    .navbar-default {
        background: none;
        border: none;
    }
    .navbar-collapse{
        padding:0;
    }
    .navbar-nav {
        float: right;
        margin-top: 12px;
    }
    .navbar-nav > li > a {
        padding: 0px 12px 12px;
    }
    .navbar-brand{
        padding:0;
        line-height: normal;
        height: inherit;
    }
    .navbar {
        min-height: inherit;
        margin-bottom: 0;
    }
    a.navbar-brand {
        font-size: 34px;
        color: #fff !important;
        letter-spacing: 2px;
    }
    a.navbar-brand span {
        color: #CB9D2D;
        background: #fff;
        padding: 0px 9px;
    }
    .header {
        padding: 10px 0;
    }
    .navbar-default .navbar-nav > li > a {
        font-size: 16px;
        color: #fff;
        margin: 0px;
        font-weight:600;
    }
    .navbar-default .navbar-nav > li > a.active {
        color: #CB9D2D;
    }
    .navbar-nav > li {
        margin: 0 12px;
    }
    a.navbar-brand i {
        font-style: normal;
        margin: 0 4px;
    }
    /* Overline From Left */
    .hvr-overline-from-left {
        display: inline-block;
        vertical-align: middle;
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
        box-shadow: 0 0 1px rgba(0, 0, 0, 0);
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        -moz-osx-font-smoothing: grayscale;
        position: relative;
        overflow: hidden;
    }
    .hvr-overline-from-left:before {
        content: "";
        position: absolute;
        z-index: -1;
        left: 0;
        right: 100%;
        bottom: 0;
        background: #CB9D2D;
        height: 3px;
        -webkit-transition-property: right;
        transition-property: right;
        -webkit-transition-duration: 0.3s;
        transition-duration: 0.3s;
        -webkit-transition-timing-function: ease-out;
        transition-timing-function: ease-out;
    }
    .hvr-overline-from-left:hover:before,.hvr-overline-from-left:focus:before,.hvr-overline-from-left:active:before {
        right: 0;
        color:#fff;
    }
    .navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus {
        color: #CB9D2D;
    }
    .navbar-brand {
        border: 1px solid #fff;
    }
    /*-- //header --*/

    /*-- Slider Part starts Here --*/
    #slider3,#slider4  {
        box-shadow: none;
        -moz-box-shadow: none;
        -webkit-box-shadow: none;
        margin: 0 auto;
    }
    .rslides_tabs {
        list-style: none;
        padding: 0;
        background: rgba(0,0,0,.25);
        box-shadow: 0 0 1px rgba(255,255,255,.3), inset 0 0 5px rgba(0,0,0,1.0);
        -moz-box-shadow: 0 0 1px rgba(255,255,255,.3), inset 0 0 5px rgba(0,0,0,1.0);
        -webkit-box-shadow: 0 0 1px rgba(255,255,255,.3), inset 0 0 5px rgba(0,0,0,1.0);
        font-size: 18px;
        list-style: none;
        margin: 0 auto 50px;
        max-width: 540px;
        padding: 10px 0;
        text-align: center;
        width: 100%;
    }
    .rslides_tabs li {
        display: inline;
        margin-right: 1px;
    }
    .rslides_tabs a {
        width: auto;
        line-height: 20px;
        padding: 9px 20px;
        height: auto;
        background: transparent;
        display: inline;
    }
    .rslides_tabs li:first-child {
        margin-left: 0;
    }
    .rslides_tabs .rslides_here a {
        background: rgba(255,255,255,.1);
        color: #fff;
        font-weight: bold;
    }
    .events {
        list-style: none;
    }
    .callbacks_container {
        position: relative;
        width: 100%;
    }
    .callbacks {
        position: relative;
        list-style: none;
        overflow: hidden;
        width: 100%;
        padding: 0;
        margin: 0;
    }
    .callbacks li {
        position: absolute;
        width: 100%;
        left: 0;
        top: 0;
    }
    .callbacks img {
        position: relative;
        z-index: 1;
        height: auto;
        border: 0;
    }
    .callbacks .caption {
        display: block;
        position: absolute;
        z-index: 2;
        font-size: 20px;
        text-shadow: none;
        color: #fff;
        left: 0;
        right: 0;
        padding: 10px 20px;
        margin: 0;
        max-width: none;
        top: 10%;
        text-align: center;
    }
    #slider3-pager a,#slider4-pager a  {
        display: inline-block;
    }
    #slider3-pager span,#slider4-pager span{
        width:100px;
        height:15px;
        background:#fff;
        display:inline-block;
        border-radius:30em;
        opacity:0.6;
    }
    #slider3-pager .rslides_here a ,#slider4-pager .rslides_here a {
        background: #FFF;
        border-radius:30em;
        opacity:1;
    }
    #slider3-pager a ,#slider4-pager a {
        padding: 0;
    }
    #slider3-pager li, #slider4-pager li{
        display:inline-block;
    }
    .rslides {
        position: relative;
        list-style: none;
        overflow: hidden;
        width: 100%;
        padding: 0;
        margin: 0;
    }
    .rslides li {
        -webkit-backface-visibility: hidden;
        position: absolute;
        display: none;
        width: 100%;
        left: 0;
        top: 0;
    }
    .rslides li{
        position: relative;
        display: block;
    }

    .callbacks_tabs{
        list-style: none;
        position: absolute;
        top: 120%;
        z-index: 999;
        left: 47%;
        padding: 0;
        margin: 0;
    }
    ul.callbacks_tabs.callbacks2_tabs {
        top: 73%;
        left:46%;
    }
    .slider-top{
        text-align: center;
        padding:10em 0;
    }
    .slider-top h1{
        font-weight:700;
        font-size:48px;
        color:#010101;
    }
    .slider-top p{
        font-weight:400;
        font-size:20px;
        padding:1em 7em;
        color:#010101;
    }
    .slider-top ul.social-slide{
        display:inline-flex;
        margin: 0px;
        padding: 0px;
    }

    .callbacks_tabs li{
        margin-left: 5px;
        display: inline-block;
    }
    .callbacks_tabs a{
        visibility: hidden;
    }
    .callbacks_tabs a:after {
        content: "\f111";
        font-size: 0;
        font-family: FontAwesome;
        visibility: visible;
        display: block;
        width: 30px;
        height: 5px;
        transform: rotate(315deg);
        display: inline-block;
        background: #fff;
    }
    .callbacks_here a:after{
        background: #000;
    }

    /*-- Slider part Ends Here --*/
    /*-- banner --*/
    .banner-text {
        margin-top: 12em;
    }
    .header-nav {
        padding: 0;
        margin-top: 50px;
    }
    .banner-text h4 {
        color: #fff;
        font-size: 60px;
        text-transform: uppercase;
        text-align: center;
        line-height:1.5em;
    }
    .banner-text p {
        color: #fff;
        font-size: 20px;
        text-transform: capitalize;
        text-align: center;
        line-height:1.8em;
        font-style:italic;
        margin: 15px 0 145px;
        letter-spacing:2px;
    }
    /*-- //banner --*/
    /*-- banner-bottom --*/


    /*-- //banner-bottom --*/
    /*-- footer --*/
    .footer{
        background:#4C4848;
        padding:60px 0;
    }
    .footer-left h2{
        color: #fff;
        font-size: 22px;
        margin-bottom: 20px;
    }
    .footer-left p {
        color: #ccc;
        font-size: 14px;
        line-height: 2.2em;
    }

    .call:nth-child(2) {
        margin: 2em 0;
    }
    .contact-grdl {
        padding: 0 !important;
        width: 30%;
    }
    .contact-grdl span {
        color: #fff;
        font-size: 2em;
        background: #6F6F6F;
        padding: 20px 20px;
        border-radius: 100%;
    }
    .contact-grdr {
        width: 70%;
        padding: 0;
        margin-top: 12px;
    }
    .contact-grdr ul li {
        list-style-type: none;
        color: #dadada;
        font-size: 14px;
        margin: 0 0 1em;
    }
    .contact-grdr ul li a {
        color: #CB9D2D;
        text-decoration: none;
        display: block;
        margin: 0.6em 0 0;
    }
    .contact-grdr ul li a:hover{
        color: #dadada;
    }
    .footer-middle input[type="text"], .footer-middle textarea {
        outline: none;
        border: 1px solid #E9E9E9;
        width: 100%;
        background: none;
        color: #999;
        font-size: 14px;
        padding: 12px 10px;
        margin-bottom: 30px;
        border-top:1px solid #4C4848;
        border-left:1px solid #4C4848;
        border-right: 1px solid #4C4848;
    }
    .footer-middle input[type="text"]:hover, .footer-middle textarea:hover {
        border: 1px solid #CB9D2D;
    }
    .footer-middle input[type="submit"] {
        outline: none;
        border: none;
        width: 100%;
        background: #000;
        color: #fff;
        font-size: 18px;
        padding: 12px 0px;
        text-transform: uppercase;
        transition: .5s all;
        -webkit-transition: .5s all;
        -moz-transition: .5s all;
        -o-transition: .5s all;
        -ms-transition: .5s all;
    }
    .footer-bot ul li:hover {
        opacity:0.7;
    }
    .footer-middle input[type="submit"]:hover {
        background: #CB9D2D;
        color: #fff;
    }
    .footer-middle textarea {
        min-height: 123px;
        resize: none;
    }
    .footer h3 {
        font-size: 45px;
        color: #fff;
        text-align: center;
        margin-bottom: 55px;
        text-transform:uppercase;
    }
    /*-- //footer --*/
    /*-- footer-bottom --*/
    .footer-bot{
        text-align:center;
        margin-top:55px;
    }
    .footer-bot ul li{
        list-style-type: none;
        display: inline-block;
        margin: 0px 17px;
        transform: rotate(45deg);
    }
    .footer-bot ul li a{
        width: 50px;
        height: 46px;
        display: inline-block;
    }
    .footer-bot ul li.fb1{
        background: #3b5998;
    }
    .footer-bot ul li.fb2{
        background: #bd081c;
    }
    .footer-bot ul li.fb3{
        background: #ea4c89;
    }
    .footer-bot ul li.fb4{
        background: #55acee;
    }
    .footer-bot ul li.fb1 a {
        background: url(../images/social2.png) no-repeat -3px 0px ;
        transform: rotate(-45deg);
    }
    .footer-bot ul li.fb2 a {
        background:url(../images/social2.png) no-repeat -3px -59px;
        transform: rotate(-45deg);
    }
    .footer-bot ul li.fb3 a {
        background: url(../images/social2.png) no-repeat -1px -104px;
        transform: rotate(-45deg);
        background-size: 100%;
    }
    .footer-bot ul li.fb4 a {
        background: url(../images/social2.png) no-repeat 0px -162px;
        transform: rotate(-45deg);
        background-size: 100%;
    }
    /*-- //footer-bottom --*/
    /*-- where --*/
    .where-right {
        padding: 47px 0;
    }
    .where-right h3{
        font-size: 45px;
        color:#CB9D2D;
        margin-bottom:55px;
        text-align:center;
    }
    .hi-icon-effect-4 .hi-icon:after {
        top: 0px;
        left: -4px;
        transform: rotate(45deg);
        border: 4px dashed #a0a0a0;
    }
    .hi-icon-effect-4 .hi-icon.icon1 {
        width: 72px;
        height: 72px;
        box-shadow:none;
        background: url(../images/icon1.png) no-repeat center;
    }
    .hi-icon-effect-4 .hi-icon.icon2 {
        width: 72px;
        height: 72px;
        box-shadow:none;
        background: url(../images/icon2.png) no-repeat center;
    }
    .hi-icon-effect-4 .hi-icon.icon3 {
        width: 72px;
        height: 72px;
        box-shadow:none;
        background: url(../images/icon3.png) no-repeat center;
    }
    .hi-icon-effect-4 .hi-icon.icon4 {
        width: 72px;
        height: 72px;
        box-shadow:none;
        background: url(../images/icon4.png) no-repeat center;
    }
    .hi-icon-effect-4 .hi-icon.icon5 {
        width: 72px;
        height: 72px;
        box-shadow:none;
        background: url(../images/icon5.png) no-repeat center;
    }
    .hi-icon-wrap {
        padding: 0;
    }
    .hi-icon,.hi-icon:after {
        border-radius: 0%;
    }
    .abt-icon {
        display: inline-block;
        width: 19%;
    }
    .seed-grid h4 {
        margin-top: 25px;
        font-size: 24px;
        color: #CB9D2D;
        text-transform: capitalize;
    }
    .where{
        background:#CB9D2D;
    }
    .where-left{
        background:url(../images/pic6.jpg) no-repeat center;
        background-size:cover;
        -webkit-background-size: cover;
        -o-background-size: cover;
        -ms-background-size: cover;
        -moz-background-size: cover;
        min-height:505px;
    }
    /*-- //where --*/
    .welcome{
        padding:90px 0;
    }
    .welcome h3{
        font-size: 40px;
        color:#CB9D2D;
        margin-bottom:35px;
        text-align:center;
        text-transform:uppercase;
    }
    .wel-right{
        float:right;
        width:55%;
    }
    .wel-left {
        width: 43%;
        background: #f8f8f8;
        padding: 42px 42px;
        position: absolute;
        left: 7%;
        top: 19%;
        z-index: 1;
    }
    .welcome p {
        font-size: 24px;
        line-height: 1.8em;
        text-align: center;
        font-style: italic;
        color: #464646;
    }

    .welcome-info ul li{
        list-style-type:none;
        display:block;
        line-height:2.5em;
        font-size:14px;
    }
    .welcome-info ul li a{
        color:#464646;
        text-decoration:none;
    }
    .welcome-info ul li a:hover{
        color:#CB9D2D;
    }

    .welcome-info ul li a span{
        color:#CB9D2D;
        margin-right:20px;
    }
    .wel-grid .icon {
        width: 54px;
        height: 54px;
        border-radius: 0;
        background: #CB9D2D;
        margin: 0 auto;
        text-align: center;
        position: relative;
        transform: rotate(45deg);
    }
    .wel-grid .glyphicon-grain {
        z-index: 9999;
        top: 12px;
        left: 0px;
        font-size: 36px;
        color: #fff;
        transform: rotate(316deg);
    }
    .wel-grid .icon img {
        padding: 23px 0 0 0;
        position: relative;
        z-index: 100;
        transition: all 0.3s ease 0s;
    }
    .wel-grid .icon:before {
        content: '';
        width: 100%;
        height: 100%;
        border-radius: 0%;
        background:#020202;
        position: absolute;
        top: 0;
        left: 0;
        z-index: 10;
        -webkit-transform: scale(0);
        -moz-transform: scale(0);
        -ms-transform: scale(0);
        -o-transform: scale(0);
        transform: scale(0);
        transition: all 0.3s ease 0s;
    }
    .wel-grid:hover .icon img {
        -webkit-transform: scale(0.9);
        -moz-transform: scale(0.9);
        -ms-transform: scale(0.9);
        -o-transform: scale(0.9);
        transform: scale(0.9);
    }
    .wel-grid:hover .icon:before {
        -webkit-transform: scale(1);
        -moz-transform: scale(1);
        -ms-transform: scale(1);
        -o-transform: scale(1);
        transform: scale(1);
    }
    .content-item {
        background: url(../images/pic8.jpg) no-repeat 0px 0px;
        height: 410px;
        margin: 0px auto;
        overflow: hidden;
        position: relative;
        width: 100%;
    }
    .content-item .overlay {
        border-bottom: 100px solid #000;
        border-left: 100px solid transparent;
        bottom: 0;
        height: 0;
        opacity: .4;
        position: absolute;
        right: 0;
        text-indent: -9999px;
        -moz-transition: all 0.5s ease-out;
        -o-transition: all 0.5s ease-out;
        -webkit-transition: all 0.5s ease-out;
        transition: all 0.5s ease-out;
        width: 0;
    }
    .content-item:hover .overlay {
        border-bottom: 830px solid #000;
        border-left: 830px solid transparent;
        -moz-transition: all 0.5s ease-out;
        -o-transition: all 0.5s ease-out;
        -webkit-transition: all 0.5s ease-out;
        transition: all 0.5s ease-out;
    }
    .content-item .corner-overlay-content {
        bottom: 15px;
        color: #fff;
        position: absolute;
        right: 15px;
        -moz-transition: all 0.5s ease-out;
        -o-transition: all 0.5s ease-out;
        -webkit-transition: all 0.5s ease-out;
        transition: all 0.5s ease-out;
        font-size:15px;
        text-transform:uppercase;
    }
    .content-item:hover .corner-overlay-content {
        opacity: 0;
        -moz-transition: all 0.5s ease-out;
        -o-transition: all 0.5s ease-out;
        -webkit-transition: all 0.5s ease-out;
        transition: all 0.5s ease-out;
    }
    .content-item .overlay-content {
        bottom: 0;
        color: #333;
        left: 0;
        opacity: 0;
        padding: 65px 40px 65px 55px;
        position: absolute;
        right: 0;
        top: 0;
        -moz-transition: all 0.3s ease-out;
        -o-transition: all 0.3s ease-out;
        -webkit-transition: all 0.3s ease-out;
        transition: all 0.3s ease-out;
    }
    .content-item .overlay-content h4 {
        border-bottom: 1px solid #333;
        color: #fff;
        font-size: 24px;
        text-align: right;
        padding: 0 0 28px 0;
    }
    .content-item:hover .overlay-content {
        opacity: 1;
        -moz-transition: all 0.3s ease-out;
        -o-transition: all 0.3s ease-out;
        -webkit-transition: all 0.3s ease-out;
        transition: all 0.3s ease-out;
        -moz-transition-delay: 0.3s;
        -o-transition-delay: 0.3s;
        -webkit-transition-delay: 0.3s;
        transition-delay: 0.3s;
    }
    .seed-grid {
        margin-top: 45px;
    }
    .overlay-content p {
        color: #CACACA;
        font-size: 14px;
        line-height: 2em;
        margin-top: 30px;
        text-align: right;
    }
    .welcome-info ul {
        margin-top: 30px;
    }
    /*-- specials --*/
    .specials{
        padding:90px 0 0 0;
    }
    .specials h3{
        font-size: 40px;
        color: #CB9D2D;
        margin-bottom: 35px;
        text-align: center;
    }
    .special-left img{
        width:100%;
    }
    .special-left,.special-right,.special-left img {
        min-height: 341px;
        padding:0;
    }
    .special-right {
        background: #f7f7f7;
        padding: 51px 62px 0 62px;
    }
    .special-right h4{
        line-height: 1.5em;
        font-size: 24px;
        color: #000;
    }
    .special-right p {
        margin: 20px 0 0px 0;
        font-size: 14px;
        color: #464646;
        line-height: 2.2em;
    }
    .l-grids figure {
        position: relative;
        float: left;
        overflow: hidden;
        text-align: center;
        width:100%;
    }
    .l-grids figure img {
        position: relative;
        display: block;
    }
    .l-grids figure figcaption {
        padding: 2em;
        color: #fff;
        font-size: 1.25em;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
    }
    .l-grids figure figcaption{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
    figure.effect-bubba {
        background-color:#676767;
        margin:0;
    }
    figure.effect-bubba:hover img {
        opacity: 0.6;
    }

    figure.effect-bubba figcaption::before,
    figure.effect-bubba figcaption::after {
        position: absolute;
        top: 30px;
        right: 30px;
        bottom: 30px;
        left: 30px;
        content: '';
        opacity: 0;
        -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
        transition: opacity 0.35s, transform 0.35s;
    }

    figure.effect-bubba figcaption::before {
        border-top: 1px solid #fff;
        border-bottom: 1px solid #fff;
        -webkit-transform: scale(0,1);
        transform: scale(0,1);
    }

    figure.effect-bubba figcaption::after {
        border-right: 1px solid #fff;
        border-left: 1px solid #fff;
        -webkit-transform: scale(1,0);
        transform: scale(1,0);
    }
    figure.effect-bubba h4 {
        padding-top: 6%;
        -webkit-transition: -webkit-transform 0.35s;
        transition: transform 0.35s;
        -webkit-transform: translate3d(0,-20px,0);
        transform: translate3d(0,-20px,0);
        opacity:0;
        padding-bottom: 0;
    }
    figure.effect-bubba p {
        padding: 0px 1em;
        opacity: 0;
        -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
        transition: opacity 0.35s, transform 0.35s;
        -webkit-transform: translate3d(0,20px,0);
        transform: translate3d(0,20px,0);
    }
    figure.effect-bubba:hover figcaption::before,
    figure.effect-bubba:hover figcaption::after {
        opacity: 1;
        -webkit-transform: scale(1);
        transform: scale(1);
    }
    figure.effect-bubba:hover h4,
    figure.effect-bubba:hover p {
        opacity: 1;
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0);
    }
    .special-left h4,.spl-bot-right h4 {
        font-size: 30px;
        color: #FFF;
    }
    .special-left p,.spl-bot-right p{
        margin: 50px auto 0;
        font-size: 14px;
        color: #fff;
        line-height: 2em;
        width: 75%;
    }
    .sp-wid {
        width: 80%;
    }
    .l-wid {
        width: 80%;
        float: right;
        text-align: right;
    }
    p.sp-para {
        font-size: 14px;
        line-height: 2.2em;
        text-align: center;
        color: #464646;
        width: 50%;
        margin: 0 auto;
    }
    .special-grids{
        margin-top:55px;
    }
    .spl-bot {
        width: 55%;
        margin: 0 auto;
    }
    .spl-bot-right {
        padding: 0;
    }
    .spl-bot-left{
        background:#f7f7f7;
        padding: 58px 65px;
    }
    .spl-bot-left h4 {
        line-height: 1.5em;
        font-size: 24px;
        color: #000;
    }
    .spl-bot-left p {
        color:#464646;
        font-size:14px;
        line-height:2.2em;
        margin-top:25px;
    }
    .spl-bot-right h4 {
        margin-top:30px;
    }
    /*-- //specials --*/
    /*-- foo-top --*/
    .foo-top{
        padding:90px 0;
    }
    .foo-top h3 {
        font-size: 40px;
        color: #CB9D2D;
        margin-bottom: 35px;
        text-align: center;
        text-transform:uppercase;
    }
    .events-left img {
        width: 100%;
    }
    .events-right{
        margin-top:50px;
    }
    .services-bottom-grd-left{
        float:left;
        width:12.5%;
    }
    .services-bottom-grd-right{
        float:right;
        width:81%;
    }
    .services-bottom-grd-left img{
        width:100%;
    }
    .time-service p {
        color: #000;
        font-size: 22px;
    }
    .services-bottom-grd-right h4 {
        line-height: 1.5em;
        font-size: 24px;
        color: #000;
    }
    .services-bottom-grd-right p{
        margin: 13px 0 0px 0;
        font-size: 14px;
        color: #464646;
        line-height: 2.2em;
    }
    .events-right-gds:nth-child(2) {
        margin: 30px 0 0;
    }
    .time-service p {
        text-align: center;
        color: #fff;
        background: #CB9D2D;
        padding: 19px 0;
        width: 100%;
        margin: 0 auto;
        border-radius: 50%;
    }
    /*-- //foo-top --*/
    /*-- copy-right --*/
    p.copy-right {
        text-align: center;
        margin-top: 55px;
        font-size: 14px;
        color: #ccc;
    }
    p.copy-right a{
        text-decoration:none;
        color: #CB9D2D;
    }
    p.copy-right a:hover{
        color: #ccc;
    }
    /*-- //copy-right --*/
    /*--trypography--*/
    .page-head {
        min-height: 150px !important;
    }
    h3.tittle{
        font-size: 40px;
        color: #CB9D2D;
        margin-bottom: 55px;
        text-align: center;
        text-transform: uppercase;
    }
    .typrography{
        padding:90px 0;
    }
    .grid_4{
        background:#fff;
        padding:0em 0em 0em 0em;
    }
    .grid_5{
        background:#fff;
        padding:1em 0 2em 0;
    }

    .table td, .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
        padding: 15px!important;
    }
    .table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td {
        font-size: 0.8em;
        color: #999;
    }
    .table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td {
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
    h4.typ1{
        margin-bottom:15px;
    }
    h5.typ1{
        margin-bottom:15px;
    }
    .progress {
        height: 8px;
        box-shadow: none;
    }
    .progress {
        overflow: hidden;
        height: 20px;
        margin-bottom: 20px;
        background-color: #eeeeee;
        border-radius: 2px;
        -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
        box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
    }
    .progress-bar {
        float: left;
        width: 0%;
        height: 100%;
        font-size: 12px;
        line-height: 20px;
        color: #ffffff;
        text-align: center;
        background-color: #03a9f4;
        -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);
        box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);
        -webkit-transition: width 0.6s ease;
        -o-transition: width 0.6s ease;
        transition: width 0.6s ease;
    }
    .progress-bar {
        box-shadow: none;
    }
    .progress-bar-primary {
        background-color: #03a9f4;
    }
    .progress-bar-info {
        background-color: #00bcd4;
    }
    .progress-bar-success {
        background-color: #8bc34a;
    }
    .progress-bar-warning {
        background-color: #ffc107;
    }
    .progress-bar-danger {
        background-color: #e51c23;
    }
    .progress-bar-inverse {
        background-color: #757575;
    }
    .pagination > .active > a, .pagination > .active > span, .pagination > .active > a:hover, .pagination > .active > span:hover, .pagination > .active > a:focus, .pagination > .active > span:focus {
        background-color:#5bb2fc !important;
        border-color:#5bb2fc !important;
    }
    .grid_3 p,.page-header p {
        color: #888;
        font-size: 14px;
        line-height:2em;
        margin-bottom: 1em;
    }
    .bs-docs-example {
        margin: 1em 0;
    }
    section#tables  p {
        margin-top: 1em;
    }
    .breadcrumb li{
        font-size:0.85em;
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
    .tab-container .tab-content {
        border-radius: 0 2px 2px 2px;
        border: 1px solid #e0e0e0;
        padding: 16px;
        background-color: #ffffff;
    }
    .nav-tabs {
        margin-bottom: 1em;
    }
    .alert {
        font-size: 0.85em;
    }
    h1.t-button,h2.t-button,h3.t-button,h4.t-button,h5.t-button {
        line-height:1.8em;
        margin-top:0.5em;
        margin-bottom: 0.5em;
    }
    h3.bars {
        margin-bottom: 0.8em;
    }
    li.list-group-item1 {
        line-height: 2.5em;
    }
    ol {
        margin-bottom: 44px;
    }
    .list-group {
        margin-bottom: 48px;
    }
    .input-group {
        margin-bottom: 20px;
    }
    /*--//trypography--*/
    /*-- contact-page --*/
    .view-map{
        padding:90px 0;
    }
    .map iframe{
        width:100%;
        outline:none;
        border:none;
        min-height:400px;
    }
    /*-- //contact-page --*/
    /*-- gallery --*/
    .gallery{
        padding:90px 0;
    }
    .lb-album li img{
        width:100%;
    }
    .lb-overlay:target img {
        width: 35%;
    }
    .lb-album li {
        float: none;
        position: relative;
        list-style-type: none;
        display: inline-block;
        width: 31%;
        margin: 0% 1% 2%;
    }
    .lb-album li > a {
        width: 100%;
        height: inherit;
        position: relative;
        padding: 10px;
        background: none;
        border: 1px solid #E4E4E4;
        border-radius: 4px;
    }
    .lb-album {
        width: inherit;
        margin: 0;
    }
    .lb-overlay:target {
        padding: 110px 0 0;
    }
    .lb-overlay div h3{
        float: none;
        width:inherit;
        height:inherit;
        text-align:center;
        border:none;
        color:#fff;
    }
    .lb-overlay div p {
        float: none;
        width:inherit;
        height:inherit;
        text-align:center;
        border:none;
        color:#fff;
        line-height:2em;
        font-size:14px;
        font-style:normal;
        font-family: 'Open Sans', sans-serif;
    }
    .lb-overlay div h3{
        margin:15px 0;
    }
    /* Common style */
    .grid figure {
        position: relative;

        overflow: hidden;

        background: #3085a3;
        text-align: center;
        cursor: pointer;
    }

    .grid figure img {
        position: relative;
        display: block;
        max-width: 100%;
        opacity: 0.8;
    }

    .grid figure figcaption {
        color: #fff;
        text-transform: uppercase;
        font-size: 1.25em;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
    }

    .grid figure figcaption::before,
    .grid figure figcaption::after {
        pointer-events: none;
    }

    .grid figure figcaption {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    figure.effect-apollo {
        background: #3498db;
    }

    figure.effect-apollo img {
        opacity: 0.95;
        -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
        transition: opacity 0.35s, transform 0.35s;
        -webkit-transform: scale3d(1.05,1.05,1);
        transform: scale3d(1.05,1.05,1);
    }

    figure.effect-apollo figcaption::before {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(255,255,255,0.5);
        content: '';
        -webkit-transition: -webkit-transform 0.6s;
        transition: transform 0.6s;
        -webkit-transform: scale3d(1.9,1.4,1) rotate3d(0,0,1,45deg) translate3d(0,-106%,0);
        transform: scale3d(1.9,1.4,1) rotate3d(0,0,1,45deg) translate3d(0,-106%,0);
    }

    figure.effect-apollo p {
        position: absolute;
        right: 0;
        bottom: 0;
        margin: 3em;
        padding: 0 1em;
        max-width: 150px;
        border-right: 4px solid #fff;
        text-align: right;
        opacity: 0;
        -webkit-transition: opacity 0.35s;
        transition: opacity 0.35s;
    }

    figure.effect-apollo h2 {
        text-align: left;
    }

    figure.effect-apollo:hover img {
        opacity: 0.6;
        -webkit-transform: scale3d(1,1,1);
        transform: scale3d(1,1,1);
    }

    figure.effect-apollo:hover figcaption::before {
        -webkit-transform: scale3d(1.9,1.4,1) rotate3d(0,0,1,45deg) translate3d(0,106%,0);
        transform: scale3d(1.9,1.4,1) rotate3d(0,0,1,45deg) translate3d(0,106%,0);
    }

    figure.effect-apollo:hover p {
        opacity: 1;
        -webkit-transition-delay: 0.1s;
        transition-delay: 0.1s;
    }

    /*-- //gallery --*/
    /*-- about --*/
    .about-page{
        padding:90px 0;
    }
    .about_img {
        position: relative;
        overflow: hidden;
        width: 100%;
    }
    .about-left img {
        width: 100%;
        height: auto;
    }
    .about_img h5 {
        position: absolute;
        height: 70px;
        line-height: 70px;
        bottom: 0%;
        left: 0;
        opacity: 1;
        width: 100%;
        color: #fff;
        background: rgb(203, 157, 45);
        -ms-transform: translateY(0%);
        -webkit-transform: translateY(0%);
        transform: translateY(0%);
        -webkit-transition: 0.35s all ease;
        transition: 0.35s all ease;
        text-align: center;
        font-size: 25px;
    }
    .about_img img + h5 {
        margin-top: 0;
    }
    .about_opa {
        color: #fff;
        padding: 50px 50px 0;
        opacity: 0;
        background: rgba(51, 51, 51, 0.8);
        position: absolute;
        left: 0;
        top: 100%;
        right: 0;
        bottom: 0;
        -webkit-transition: 0.35s all ease;
        transition: 0.35s all ease;
    }
    .about_img:hover .about_opa {
        opacity: 1;
        top: 70px;
    }
    .about_img:hover h5 {
        top: 0;
        -ms-transform: translateY(0);
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }
    .about_opa p {
        line-height: 2.2em;
        text-align: center;
        font-size:14px;
    }
    p.para_abt{
        font-size: 24px;
        line-height: 1.8em;
        text-align: center;
        font-style: italic;
        color: #464646;
        margin-top:40px;
    }
    .team{
        padding:0 0 90px;
    }
    .thumb {
        max-width: 100%;
        margin-left: auto;
        margin-right: auto;
        position: relative;
        margin-top: 8px;
        overflow: hidden;
    }
    .thumb:before, .thumb:after {
        content: "";
        position: absolute;
        opacity: 0;
        pointer-events: none;
        z-index: 6;
        -webkit-transition: all 0.5s ease 0s;
        transition: all 0.5s ease 0s;
        box-shadow: none;
    }
    .thumb:before {
        top:28px;
        left:28px;
        right: 100%;
        bottom: 100%;
        border-top: 3px solid #CB9D2D;
        border-left: 3px solid #CB9D2D;
    }
    .thumb:hover:before {
        opacity: 1;
        bottom: 0;
        right: 0;
    }
    .thumb:hover img {
        -ms-transform: scale(1.1);
        -webkit-transform: scale(1.1);
        transform: scale(1.1);
    }
    .thumb img {
        -webkit-transition: 0.35s all ease;
        transition: 0.35s all ease;
    }
    .thumb .team_pos {
        position: absolute;
        background:rgba(203, 157, 45, 0.55);
        width: 100%;
        bottom: 0;
        left: 0;
        margin-top: 0px;
        padding: 6px 0;
        text-align: center;
    }
    .thumb:after {
        left: 100%;
        top: 100%;
        bottom:28px;
        right:28px;
        border-bottom: 3px solid #CB9D2D;
        border-right: 3px solid #CB9D2D;
    }
    .thumb:hover:after {
        opacity: 1;
        left: 0;
        top: 0;
    }
    .thumb:hover .team_pos {
        top: 0;
    }
    .thumb:hover ul li {
        margin: 130px 6px 0;
    }

    .team ul li {
        display: inline-block;
        margin: 11px 5px 0;
        width: 14%;
    }
    .pic {
        overflow: hidden;
        margin: auto;
    }
    .fb_icon1 {
        background:url(../images/social2.png) no-repeat -1px -1px #3b5998;
        width: 50px;
        height: 50px;
    }
    .fb_icon2 {
        background:url(../images/social2.png) no-repeat -1px -187px #55acee;
        width: 50px;
        height: 50px;
    }
    .fb_icon3 {
        background:url(../images/social2.png) no-repeat -1px -120px #ea4c89;
        width: 50px;
        height: 50px;
    }
    .pic:hover {
        cursor: pointer;
    }
    .team-gd p {
        font-size:14px;
        line-height: 2em;
        color: #a2a2a2;
    }
    .morph {
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        -ms-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }
    .morph:hover {
        border-radius: 50%;
        -webkit-transform: rotate(360deg);
        -moz-transform: rotate(360deg);
        -o-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        transform: rotate(360deg);
    }
    .team_para p {
        font-size: 23px;
        color: #fff;
        margin-top: 0;
    }
    /*-- //about --*/

    /*-- responsive media queries --*/

    @media (max-width: 1440px){
        .sp-wid {
            width: 87%;
        }
        .l-wid {
            width: 86%;
        }
        .spl-bot {
            width: 61.2%;
        }
    }
    @media (max-width: 1366px){
        .spl-bot-left {
            padding: 49px 60px;
        }
        .lb-overlay a.lb-close {
            left: 47%;
        }
        .sp-wid {
            width: 92%;
        }
        .l-wid {
            width: 92%;
        }
    }
    @media (max-width: 1280px){
        .banner-text h4{
            font-size: 52px;
        }
        .banner-text p {
            margin: 15px 0 100px;
        }
        .banner {
            min-height: 655px;
        }
        .sp-wid {
            width: 100%;
        }
        .l-wid {
            width: 100%;
        }
        .spl-bot {
            width: 65.2%;
        }
        .lb-overlay:target img {
            width: 40%;
        }
        .team-gd img {
            width: 100%;
        }

    }
    @media (max-width: 1080px){
        .banner-text {
            margin-top: 8em;
        }
        .banner-text h4 {
            font-size: 46px;
        }
        .banner {
            min-height: 585px;
        }
        .welcome h3,.specials h3,h3.tittle,.footer h3 {
            font-size: 35px;
        }
        .welcome p {
            font-size: 20px;
        }
        .seed-grid h4 {
            font-size: 20px;
        }
        .welcome,.foo-top {
            padding: 80px 0;
        }
        .wel-left {
            top: 17%;
            padding: 33px 25px;
        }
        .where-left {
            min-height: 435px;
        }
        .content-item {
            height: 388px;
        }
        .where-right {
            padding: 23px 0;
        }
        p.sp-para {
            width: 72%;
        }
        .special-right h4,.spl-bot-left h4 {
            font-size: 22px;
        }
        .specials {
            padding: 80px 0 0 0;
        }
        .special-right {
            padding: 43px 35px 0 35px;
        }
        .special-left, .special-right, .special-left img {
            min-height: 285px;
        }
        .spl-bot-left {
            padding: 35px 35px;
        }
        .special-left p, .spl-bot-right p {
            margin: 30px auto 0;
            width: 94%;
        }
        .spl-bot {
            width: 69.7%;
        }
        .services-bottom-grd-right h4 {
            font-size: 22px;
        }
        .time-service p {
            padding: 13px 0;
        }
        .footer-left, .footer-right {
            width: 26%;
            padding:0;
        }
        .footer-middle {
            width: 32%;
        }
        .contact-grdr {
            width: 55%;
        }
        .contact-grdl {
            width: 34%;
        }
        .footer-middle {
            width: 48%;
            padding: 0 25px;
        }
        .footer-middle input[type="text"], .footer-middle textarea {
            margin-bottom: 20px;
        }
        .team ul li {
            width: 18%;
        }
        .about-page ,.typrography,.gallery{
            padding: 80px 0;
        }
        p.para_abt {
            font-size: 20px;
        }
        .team {
            padding: 0 0 80px;
        }
        .thumb:hover ul li {
            margin: 96px 6px 0;
        }
        .lb-album li > a {
            padding: 4px;
        }
        .lb-overlay:target img {
            width: 49%;
        }
        .map iframe {
            min-height: 320px;
        }
    }
    @media (max-width: 1024px){
        .banner-text h4 {
            font-size: 40px;
        }
        .banner-text p {
            margin: 15px 0 70px;
        }
        .banner {
            min-height: 520px;
        }
        .spl-bot {
            width: 73.7%;
        }
        .footer-middle textarea {
            min-height: 110px;
        }
        .contact-grdl span {
            font-size: 1.5em;
            padding: 15px 15px;
        }
        .lb-overlay:target img {
            width: 51%;
        }
        .events-right {
            margin-top: 12px;
        }
    }
    @media (max-width: 991px){
        .hi-icon-effect-4 .hi-icon.icon2,.hi-icon-effect-4 .hi-icon.icon1,.hi-icon-effect-4 .hi-icon.icon3,.hi-icon-effect-4 .hi-icon.icon4,.hi-icon-effect-4 .hi-icon.icon5 {
            width: 62px;
            height: 62px;
            background-size: 63%;
        }
        .seed-grid h4 {
            font-size: 19px;
        }
        a.navbar-brand {
            font-size: 29px;
        }
        .navbar-nav > li {
            margin: 0 7px;
        }
        .banner-text {
            margin-top: 5.5em;
        }
        .banner-text p {
            font-size: 16px;
        }
        .banner-text h4 {
            font-size: 36px;
        }
        .banner-text p {
            margin: 15px 0 60px;
        }
        .banner {
            min-height: 455px;
        }
        .hi-icon-effect-4 .hi-icon:after {
            border: 2px dashed #9C9C9C;
        }
        .hi-icon-effect-4 .hi-icon:after {
            border: 2px dashed #a0a0a0;
        }
        .hi-icon-effect-4 .hi-icon:after {
            top: -1px;
            left: -1px;
        }
        .welcome p {
            font-size: 18px;
        }
        .where-left {
            float: left;
            width: 38%;
        }
        .welcome-info ul li {
            line-height: 2.2em;
            font-size: 13px;
        }
        .where-right {
            float: right;
            width: 62%;
        }
        .wel-left {
            left: 3%;
            width: 56%;
            top: 12%;
            padding: 33px 25px;
        }
        .wel-right {
            float: right;
            width: 55%;
        }
        .content-item {
            height: 307px;
        }
        .content-item .overlay-content {
            padding: 57px 18px 65px 60px;
        }
        .content-item .overlay-content h4 {
            font-size: 20px;
            padding: 0 0 13px 0;
        }
        .overlay-content p {
            font-size: 13px;
            margin-top: 11px;
        }
        .where-left {
            min-height: 353px;
        }
        .special-left, .special-right{
            float: left;
            width: 50%;
        }
        .special-right p {
            margin: 10px 0 0px 0;
            font-size: 13px;
            line-height: 1.8em;
        }
        .special-right h4, .spl-bot-left h4 {
            font-size: 18px;
        }
        .special-right {
            padding: 25px 25px 0 25px;
        }
        .special-left, .special-right, .special-left img {
            min-height: 250px;
        }
        p.sp-para {
            font-size: 13px;
            width: 78%;
        }
        .special-left p, .spl-bot-right p,.spl-bot-left p,.footer-left p {
            font-size: 13px;
        }
        .spl-bot-right {
            float: left;
            width: 50%;
        }
        .spl-bot-left {
            padding: 25px 25px;
            float: left;
            width: 50%;
        }
        .spl-bot-right h4 {
            margin-top: 0px;
        }
        .special-left p, .spl-bot-right p {
            margin: 34px auto 0;
        }
        .spl-bot {
            width: 85.8%;
        }
        .events-left {
            width: 45%;
            float: left;
        }
        .events-right {
            width: 55%;
            float: left;
        }
        .services-bottom-grd-right h4 {
            font-size: 18px;
        }
        .services-bottom-grd-right p {
            margin: 8px 0 0px 0;
            font-size: 13px;
            line-height: 2em;
        }
        .time-service p {
            padding: 11px 0;
            font-size: 18px;
        }
        .services-bottom-grd-right {
            float: right;
            width: 85%;
        }
        .events-right {
            margin-top: 0px;
        }
        .footer-middle input[type="text"], .footer-middle textarea {
            padding: 7px 10px;
        }
        .contact-grdr ul li {
            font-size: 13px;
        }
        .contact-grdr {
            width: 66%;
        }
        .footer-left, .footer-right,.footer-middle {
            float: left;
        }
        .footer-left, .footer-right {
            width: 27%;
        }
        .footer-middle {
            width: 46%;
        }
        .footer-bot ul li a {
            width: 44px;
            height: 39px;
        }
        .footer-bot ul li.fb2 a {
            background: url(../images/social2.png) no-repeat -5px -63px;
        }
        .footer-bot ul li.fb1 a {
            background: url(../images/social2.png) no-repeat -6px -4px;
        }
        .footer-bot ul li.fb3 a {
            background: url(../images/social2.png) no-repeat -1px -92px;
        }
        .footer-bot ul li.fb4 a {
            background: url(../images/social2.png) no-repeat 0px -145px;
        }
        .footer-bot ul li {
            margin: 0px 12px;
        }
        p.copy-right {
            margin-top: 42px;
            font-size: 13px;
        }
        .about_opa p {
            font-size: 13px;
        }
        .about-left {
            float: left;
            width: 50%;
            padding: 0 10px;
        }
        .about_img h5 {
            height: 55px;
            line-height: 55px;
        }
        p.para_abt {
            font-size: 16px;
        }
        .about_opa {
            padding: 19px 30px 0;
        }
        .about_img:hover .about_opa {
            top: 54px;
        }
        .team-gd {
            float: left;
            width: 33.333%;
            padding: 0 10px;
        }
        .fb_icon2 {
            background: url(../images/social2.png) no-repeat 1px -134px #55acee;
            width: 41px;
            height: 41px;
            background-size: 100%;
        }
        .fb_icon3 {
            background: url(../images/social2.png) no-repeat 1px -86px #ea4c89;
            width: 41px;
            height: 41px;
            background-size: 100%;
        }
        .fb_icon1 {
            background: url(../images/social2.png) no-repeat 1px 1px #3b5998;
            width: 41px;
            height: 41px;
            background-size: 100%;
        }
        .team_para p {
            font-size: 17px;
        }
        .thumb:hover ul li {
            margin: 74px 6px 0;
        }
        .thumb:before {
            top: 20px;
            left: 20px;
        }
        .thumb:after {
            bottom: 20px;
            right: 20px;
        }
        .footer-bot ul li.fb3 a {
            background: url(../images/social2.png) no-repeat -6px -124px;
        }
        .footer-bot ul li.fb4 a {
            background: url(../images/social2.png) no-repeat -7px -191px;
        }
        .lb-album li {
            width: 32%;
            margin: 0% 0.5% 1.5%;
        }
        .lb-overlay:target img {
            width: 60%;
        }
        .lb-overlay div p {
            font-size: 13px;
        }
    }
    @media (max-width: 800px){

    }
    @media (max-width: 768px){

    }
    @media (max-width: 736px){
        .navbar-default .navbar-toggle {
            border-color: #CB9D2D;
        }
        .navbar-default .navbar-toggle:hover, .navbar-default .navbar-toggle:focus {
            background-color: #CB9D2D;
        }
        .navbar-default .navbar-toggle .icon-bar {
            background-color: #FFF;
        }
        .navbar-default .navbar-collapse, .navbar-default .navbar-form {
            border-top: 1px solid #CB9D2D;
            box-shadow: none;
        }
        .navbar-nav {
            float: none;
            margin-top: 12px;
            width: 100%;
            text-align: center;
        }
        .navbar-nav > li {
            margin: 10px 0px;
        }
        .nav > li > a {
            display: inline-block;
        }
        .banner-text {
            margin-top: 4.5em;
        }
        .banner-text h4 {
            font-size: 32px;
        }
        .banner-text p {
            margin: 11px 0 37px;
        }
        .welcome, .foo-top,.about-page, .typrography, .gallery ,.view-map{
            padding: 60px 0;
        }
        .team {
            padding: 0 0 60px;
        }
        .specials {
            padding: 60px 0 0 0;
        }
        .wel-left {
            left: 1%;
            width: 56%;
            top: 15%;
            padding: 26px 18px;
        }
        .content-item .overlay-content {
            padding: 57px 12px 65px 51px;
        }
        .special-right {
            padding: 25px 21px 0 21px;
        }
        .special-left, .special-right, .special-left img {
            min-height: 246px;
        }
        .l-grids figure figcaption {
            padding: 1em;
        }
        .spl-bot {
            width: 89.8%;
        }
        figure.effect-bubba h4 {
            padding-top: 11%;
        }
        .footer-left {
            width: 100%;
        }
        .footer-right {
            width: 36%;
            margin-top:30px;
        }
        .contact-grdr {
            margin-top: 5px;
        }
        .footer-middle {
            padding: 0 25px 0 0;
            width: 64%;
            margin-top:30px;
        }
        .about_opa {
            padding: 19px 20px 0;
        }
        .lb-album li {
            width: 31.8%;
        }
        .lb-overlay img {
            height: auto;
        }
        .lb-overlay a.lb-close {
            left: 44%;
        }
        .lb-overlay a.lb-close {
            top: 25px;
        }
        .lb-overlay:target {
            padding: 83px 0 0;
        }
        .lb-overlay:target img {
            width: 53%;
        }
        .map iframe {
            min-height: 242px;
        }
    }
    @media (max-width: 667px){
        .abt-icon {
            width: 32%;
        }
        .abt-icon:nth-child(5),.abt-icon:nth-child(4)  {
            margin-top: 30px;
        }
        .wel-grid .icon {
            width: 47px;
            height: 46px;
        }
        .welcome-info ul {
            margin-top: 13px;
        }
        .wel-grid .glyphicon-grain {
            top: 11px;
        }
        .wel-left {
            left: 1%;
            width: 55%;
            top: 13.5%;
            padding: 13px 13px;
        }
        .content-item .overlay-content {
            padding: 23px 12px 65px 51px;
        }
        .content-item {
            height: 222px;
        }
        .where-left {
            min-height: 268px;
        }
        .where-left {
            float: left;
            width: 34%;
        }
        .where-right {
            float: right;
            width: 66%;
        }
        .wel-grid .glyphicon-grain {
            top: 7px;
        }
        .special-left, .special-right {
            float: left;
            width: 100%;
        }
        .special-left, .special-right, .special-left img {
            min-height: inherit;
        }
        .l-wid {
            text-align: left;
        }
        .special-right h4, .spl-bot-left h4 {
            font-size: 22px;
        }
        .special-right {
            padding: 25px 21px 25px 21px;
        }
        .spl-bot {
            width: 100%;
        }
        .spl-bot-left p {
            margin-top: 21px;
        }
        .events-left {
            width: 45%;
            float: left;
            padding: 0;
        }
        .events-right {
            padding: 0;
        }
        .events-left {
            width: 74%;
        }
        .events-right {
            width: 100%;
        }
        .time-service p {
            padding: 18px 0;
        }
        .services-bottom-grd-left {
            width: 10%;
        }
        .events-right-gds {
            margin: 30px 0 0;
        }
        .about-left {
            padding: 0 5px;
        }
        .about_opa p {
            line-height: 2em;
        }
        .about_opa {
            padding: 15px 10px 0;
        }
        .thumb .team_pos {
            padding: 0px 0;
        }
        .thumb:hover ul li {
            margin: 62px 6px 0;
        }
        .thumb:before {
            top: 10px;
            left: 10px;
        }
        .thumb:after {
            bottom: 10px;
            right: 10px;
        }
        .lb-overlay:target img {
            width: 58%;
        }
    }
    @media (max-width: 640px){
        .welcome p {
            font-size: 16px;
        }
        .banner-text {
            margin-top: 3.5em;
        }
        .banner-text h4 {
            font-size: 27px;
        }
        .banner {
            min-height: 388px;
        }
        .welcome h3, .specials h3, h3.tittle, .footer h3 {
            font-size: 30px;
        }
        .where-left {
            float: left;
            width: 100%;
            min-height: 268px;
        }
        .where-right {
            float: right;
            width: 100%;
        }
        .content-item {
            height: 256px;
        }
        .wel-left {
            left: 0%;
            width: 47%;
            top: 14.5%;
            padding: 20px 24px;
        }
        .content-item .overlay-content {
            padding: 36px 33px 65px 51px;
        }
        .special-right h4, .spl-bot-left h4 {
            font-size: 21px;
        }
        .spl-bot-left {
            padding: 21px 25px;
        }
        .welcome h3, .specials h3, h3.tittle, .footer h3 {
            margin-bottom: 40px;
        }
        .services-bottom-grd-right h4 {
            font-size: 21px;
        }
        .about_img h5 {
            height: 46px;
            line-height: 46px;
            font-size: 20px;
        }
        .about_img:hover .about_opa {
            top: 45px;
        }
        .about_opa {
            padding: 8px 5px 0;
        }
        p.para_abt {
            font-size: 14px;
        }
        .team-gd {
            padding: 0 5px;
        }
        a.navbar-brand {
            font-size: 27px;
        }
        .lb-overlay:target img {
            width: 66%;
        }
    }
    @media (max-width: 600px){
        .spl-bot-left {
            padding: 13px 17px;
        }
        .about-left {
            float: left;
            width: 100%;
            padding: 0;
        }
        .about_opa {
            padding: 80px 70px 0;
        }
        .about_img h5 {
            height: 53px;
            line-height: 53px;
            font-size: 25px;
        }
        .about_img:hover .about_opa {
            top: 53px;
        }
        .about-left:nth-child(3) {
            margin-top: 30px;
        }
    }
    @media (max-width: 568px){
        .special-left p, .spl-bot-right p {
            margin: 20px auto 0;
        }
        .special-right h4, .spl-bot-left h4 {
            font-size: 20px;
        }
        .spl-bot-left p {
            line-height: 2em;
            margin-top: 12px;
        }
        .spl-bot-left {
            padding: 18px 12px;
        }
        .services-bottom-grd-left {
            width: 11%;
        }
        .table h1 {
            font-size: 18px;
        }
        .table h2 {
            font-size: 17px;
        }
        .table h3 {
            font-size: 16px;
        }
        .table h4 {
            font-size: 15px;
        }
        h1.t-button, h2.t-button, h3.t-button, h4.t-button, h5.t-button {
            font-size: 20px;
        }
        .lb-album li {
            width: 48.5%;
        }
        .footer-middle {
            padding: 0 0px 0 0;
            width: 100%;
            margin-top: 30px;
        }
        .footer-right {
            width: 55%;
            margin-top: 30px;
        }
        .footer-bot {
            margin-top: 45px;
        }
        .team-gd {
            width: 50%;
        }
        .team-gd:nth-child(4) {
            margin-top: 4px;
        }
        .thumb:hover ul li {
            margin: 92px 6px 0;
        }
        .lb-overlay > div {
            width: 480px;
        }
    }
    @media (max-width: 480px){
        .header-nav {
            margin-top: 34px;
        }
        .page-head {
            min-height: 108px !important;
        }
        .navbar-toggle {
            margin-top: 0;
        }
        .banner-text h4 {
            font-size: 23px;
        }
        .banner-text {
            margin-top: 3em;
        }
        .banner {
            min-height: 345px;
        }
        .welcome h3, .specials h3, h3.tittle, .footer h3 {
            margin-bottom: 30px;
        }
        .welcome p {
            font-size: 14px;
        }
        .welcome, .foo-top, .about-page, .typrography, .gallery, .view-map {
            padding: 50px 0;
        }
        .wel-left {
            left: 0%;
            width: 53%;
            top: 14.5%;
            padding: 20px 15px;
        }
        .content-item .overlay-content {
            padding: 36px 20px 65px 37px;
        }
        p.sp-para {
            width: 98%;
        }
        figure.effect-bubba h4 {
            padding-top: 7%;
        }
        .spl-bot-right {
            float: left;
            width:100%;
        }
        .spl-bot {
            width: 100%;
            margin-top: 30px;
        }
        .spl-bot-right p {
            margin-top: 35px;
        }
        .spl-bot-right h4 {
            padding-top: 20% !important;
        }
        .spl-bot-left {
            width: 100%;
        }
        .spl-bot-left {
            padding: 25px 21px;
        }
        .events-left {
            width: 100%;
        }
        .services-bottom-grd-left {
            width: 14%;
        }
        .services-bottom-grd-right {
            float: right;
            width: 81%;
        }
        .about_opa {
            padding: 60px 70px 0;
        }
        .team-gd {
            width: 78%;
            float: none;
            margin: 0 auto;
        }
        .thumb:before {
            top: 30px;
            left: 30px;
        }
        .thumb:after {
            bottom: 30px;
            right: 30px;
        }
        .thumb:hover ul li {
            margin: 138px 6px 0;
        }
        .team-gd:nth-child(4), .team-gd:nth-child(3) {
            margin-top: 30px;
        }
        .lb-overlay a.lb-close {
            left: 41%;
        }
        .lb-overlay:target img {
            width: 81%;
        }
        .lb-overlay div h3 {
            font-size: 32px;
        }
        .map iframe {
            min-height: 230px;
        }
        .pagination-lg > li > a, .pagination-lg > li > span {
            padding: 5px 11px;
        }
        .lb-overlay > div {
            width: 335px;
        }
    }
    @media (max-width: 414px){
        .banner-text h4 {
            font-size: 17px;
        }
        .banner-text p {
            letter-spacing: 0px;
        }
        .banner-text p {
            margin: 11px 0 25px;
        }
        .banner {
            min-height: 301px;
        }
        .banner-text {
            margin-top: 2.5em;
        }
        a.navbar-brand {
            font-size: 25px;
        }
        .welcome h3, .specials h3, h3.tittle, .footer h3 {
            font-size: 27px;
        }
        .seed-grid {
            margin-top: 30px;
        }
        .abt-icon {
            width: 49%;
        }
        .where-left {
            min-height: 220px;
        }
        .wel-left {
            position: inherit;
        }
        .where-right {
            float: right;
            width: 100%;
            position: inherit;
        }
        .wel-right {
            float: right;
            width: 100%;
        }
        .welcome-info ul {
            margin-top: 26px;
        }
        .wel-left {
            width: 100%;
            padding: 35px 34px 20px;
        }
        .wel-right {
            margin-top: 25px;
        }
        .content-item {
            height: 225px;
        }
        .overlay-content p {
            margin-top: 20px;
        }
        .content-item .overlay-content h4 {
            padding: 0 0 20px 0;
        }
        figure.effect-bubba figcaption::before, figure.effect-bubba figcaption::after {
            top: 16px;
            right: 16px;
            bottom: 16px;
            left: 16px;
        }
        .special-left p, .spl-bot-right p {
            margin: 6px auto 0;
        }
        .special-left h4, .spl-bot-right h4 {
            font-size: 22px;
        }
        .special-right h4, .spl-bot-left h4 {
            font-size: 18px;
        }
        .special-right:nth-child(2) {
            padding-bottom: 0;
        }
        .services-bottom-grd-right h4 {
            font-size: 19px;
        }
        .time-service p {
            padding: 13px 0;
        }
        .services-bottom-grd-right {
            float: right;
            width: 83%;
        }
        .services-bottom-grd-right h4 {
            font-size: 17px;
        }
        .footer-right {
            width: 80%;
        }
        p.copy-right {
            line-height: 1.8em;
        }
        .about_opa {
            padding: 26px 25px 0;
        }
        .thumb:hover ul li {
            margin: 95px 6px 0;
        }
        .table h1 {
            font-size: 17px;
        }
        h1.t-button, h2.t-button, h3.t-button, h4.t-button, h5.t-button {
            font-size: 18px;
        }
        .lb-album li {
            width: 100%;
            margin: 0% 0 25px;
        }
        figure.effect-bubba p {
            padding: 0px 0em;
        }
        figure.effect-bubba h4 {
            padding-top: 3%;
        }
        .lb-overlay:target {
            padding: 130px 0 0;
        }
        .lb-overlay a.lb-close {
            left: 40%;
            top: 61px;
        }
        .map iframe {
            min-height: 200px;
        }
        .navbar-toggle {
            padding: 8px 7px;
            margin-bottom: 13px;
        }
        .time-service p {
            padding: 11px 0;
        }
        .footer-bot ul li {
            margin: 0px 9px;
        }
        .footer {
            padding: 50px 0;
        }
        .banner-text h4 {
            font-size: 15px;
        }
        .banner-text p {
            font-size: 13px;
        }
        .banner-text p {
            margin: 10px 0 16px;
        }
        .banner {
            min-height: 287px;
        }
        .welcome h3, .specials h3, h3.tittle, .footer h3 {
            font-size: 23px;
        }
        .abt-icon {
            width: 100%;
        }
        .abt-icon:nth-child(5), .abt-icon:nth-child(4) ,.abt-icon:nth-child(2),.abt-icon:nth-child(3)  {
            margin-top: 25px;
        }
    }
    @media (max-width: 384px){

    }
    @media (max-width: 375px){
        .content-item .overlay-content {
            padding: 29px 20px 37px 25px;
        }
        .special-left, .special-left img {
            min-height: 186px;
        }
        .where-left {
            min-height: 180px;
        }
        .special-grids {
            margin-top: 35px;
        }
        .services-bottom-grd-right {
            float: right;
            width: 80%;
        }
        .services-bottom-grd-left {
            width: 16%;
        }
        .footer-right {
            width: 96%;
        }
        .about_img h5 {
            height: 46px;
            line-height: 46px;
            font-size: 20px;
        }
        .about_opa {
            padding: 6px 10px 0;
        }
        .about_img:hover .about_opa {
            top: 44px;
        }
        .team-gd {
            width: 100%;
        }
        .thumb:hover ul li {
            margin: 101px 6px 0;
        }
        .lb-overlay > div {
            width: 300px;
        }
        .lb-overlay div h3 {
            font-size: 29px;
        }
        .lb-overlay div h3 {
            margin: 11px 0;
        }
        .lb-overlay:target {
            padding: 111px 0 0;
        }
        .lb-overlay a.lb-close {
            left: 38%;
            top: 38px;
        }
        .lb-overlay:target img {
            width: 76%;
        }
        .table td, .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
            padding: 9px!important;
        }
    }
    @media (max-width: 320px){
        .table h1,.table h2,.table h3,.table h4 {
            font-size: 14px;
        }
    }
</style>
  
    @endsection