@extends("layouts.master")
<style type="text/css">
	
	.error-template {padding: 40px 15px;text-align: center;}
	.error-actions {margin-top:15px;margin-bottom:15px;}
	.error-actions .btn { margin-right:10px; }

</style>
@section("content")

<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="error-template">
				

				<div class="error-details panel panel-default" >
					<h1 id='heading' style="margin:2em;margin-bottom:0em;">
						Oops! 404,Page Not Found  </h1>
						<div class="panel-body" style="margin:2em">
							Sorry, an error has occured, Requested page not found!<br>
							either retry what you want to do, or contact us if you feel any problem...
						</div>
						
						<div class="error-actions">
							<a href="/" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-home"></span>
								Take Me Home </a><a href="//ashish.live/contact" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-envelope"></span> Contact Us </a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		@endsection