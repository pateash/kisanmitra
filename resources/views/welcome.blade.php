@extends('layouts.master')

@section('content')
<!--banner start here-->
<div class="banner">
	<div class="container">
		<div class="banner-main">
		          <h3>We Predict Future From past Experiences.</h3>
		          <p>find out future prediction for crops before growing them. </p>
		          <a href="/predict">Predict Now</a>
                          <a href="/how-to-use">How To Use</a>
		     <div class="clearfix"> </div>	
		</div>
	</div>
</div>
<!--banner end here-->

<!--wedo start here-->
<div class="we-do" style="margin-top:2em">
    <h1 class="text-center text-capitalize" style="color:#956295;font-family: 'Viga-Regular';font-size: 2.4em;font-weight: 400; width: 100%;margin: 0 auto;padding-bottom: 0.3em;"> What do we do?</h1><br>
	<div class="container">
		<div class="wedo-main">
			<div class="col-md-4 wedo-grid">
				<span class="glyphicon glyphicon-leaf" aria-hidden="true"> </span>
				<h3>Agriculture Data</h3>
				<p>Collect past year's Production data from various sources, then clean and scale it. so that it can be used for Prediction Efficiently.</p>
                                <br><br>
                        </div>
			<div class="col-md-4 wedo-grid">
				<span class="glyphicon glyphicon-user" aria-hidden="true"> </span>
				<h3>Analysing and Prediction</h3>
				<p> using Preprocessed and Scaled data , a Model is created which is used to predict next year's yeild.</p>
			</div>
			<div class="col-md-4 wedo-grid">
				<span class="glyphicon glyphicon-eye-open" aria-hidden="true"> </span>
				<h3>Visualization </h3>
				<p> past data and predictions are shown in graphical environment. </p>
			</div>

		  <div class="clearfix"> </div>	
	   </div>

   </div>
</div>
</div>
<!--we do end here-->
<!--agrom strip start here-->
		
<!--agrom strip end here-->
<!--latest-news start here-->
<div class="latest-new">
        <h1 class="text-center text-capitalize" style="color:#956295;font-family: 'Viga-Regular';font-size: 2.4em;font-weight: 400; width: 100%;margin: 0 auto;padding-bottom: 0.3em;margin-top:-2em"> Proud to be Helpful!</h1><br>

	<div class="container">
		<div class="latest-news-main">
		   <div class="col-md-3 latest-grid">
		   	  <!-- <img src="images/l1.jpg" alt="" class="img-responsive"> -->
		   	  <!-- <p>Temporibus autem quibusdam et aut offic</p> -->
		   </div>
		   <div class="col-md-3 latest-grid">
		   	  <!-- <img src="images/l2.jpg" alt="" class="img-responsive"> -->
		   	  <!-- <p>Temporibus autem quibusdam et aut offic</p> -->
		   </div>
		   <div class="col-md-3 latest-grid">
		   	  <!-- <img src="images/l.jpg" alt="" class="img-responsive"> -->
		   	  <!-- <p>Temporibus autem quibusdam et aut offic</p> -->
		   </div>
		   <div class="col-md-3 latest-grid">
		   	  <!-- <img src="images/l4.jpg" alt="" class="img-responsive"> -->
		   	  <!-- <p>Temporibus autem quibusdam et aut offic</p> -->
		   </div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--latest news end here-->
@endsection