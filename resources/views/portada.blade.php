@extends('layouts.master')
@section('content')
<div class="portada">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
		    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
		</ol>
 
		<!-- Wrapper for slides -->
		<div class="carousel-inner">
		<div class="item active">
			  <div class="w1">
				<div class="container">					
					<article class="col-md-8 col-md-offset-2">
						<div class="thumbnail">
						<h1 class="text-center">VALVULA TRW ADMISION V-2985-STD</h1>
							<img src="{{asset('images/portada/r1.png')}}" alt="">
						</div>
					</article>
					
				</div>
			</div>
		</div>
	    <div class="item">
		      	<div class="w1">
					<div class="container">						
						<article class="col-md-8 col-md-offset-2">
							<div class="thumbnail">
								<h1 class="text-center">PISTONES PCP EPV-2039 STD</h1>
								<img src="{{asset('images/portada/r7.png')}}" alt="">
							</div>
						</article>
						
					</div>
				</div>
	    </div>
	    <div class="item">
	      	<div class="w1">
				<div class="container">					
					<article class="col-md-8 col-md-offset-2">
						<div class="thumbnail">
						<h1 class="text-center">ANILLO MELLING CROMADO 40564 STD</h1>
							<img src="{{asset('images/portada/r4.png')}}" alt="">
						</div>
					</article>
					
				</div>
			</div>
	    </div>
  	</div>
 		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
		</a>
	</div> <!-- Carousel -->

</div>

<div class="articulos container">
	<div class="row">
		<div class="col-md-6">
			<div class="thumbnail">
				<img src="{{asset('images/portada/r5.png')}}" alt="">
				<a href=""><div class="detalles"><h3>Ver</h3></div></a>
			</div>
			<h4 class="text-center"><a href="">CONCHA BANCADA SEALED POWER MS-979 STD</a></h4>
		</div>
		<div class="col-md-6">
			<div class="thumbnail">
				<img src="{{asset('images/portada/r3.png')}}" alt="">
				<a href=""><div class="detalles"><h3>Ver</h3></div></a>
			</div>
			<h4 class="text-center"><a href="">FILTRO DE AIRE WCA-2718</a></h4>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-3">
			<div class="thumbnail">
				<img src="{{asset('images/repuesto.png')}}" alt="">
				<a href=""><div class="detalles"><h3>Ver</h3></div></a>
			</div>
			<h5 class="text-center"><a href="">VALVULA TRW ADMISION <br>V-2985-STD</a></h5>
		</div>
		<div class="col-md-3">
			<div class="thumbnail">
				<img src="{{asset('images/repuesto2.png')}}" alt="">
				<a href=""><div class="detalles"><h3>Ver</h3></div></a>
			</div>
			<h5 class="text-center"><a href="">FILTRO DE ACEITE WEB WCH191 <br>/ 51161</a></h5>
		</div>
		<div class="col-md-3">
			<div class="thumbnail">
				<img src="{{asset('images/repuesto3.png')}}" alt="">
				<a href=""><div class="detalles"><h3>Ver</h3></div></a>
			</div>
			<h5 class="text-center"><a href="">PASTILLA DE FRENO DELANTERA PERFECTION 7298</a></h5>
		</div>
		<div class="col-md-3">
			<div class="thumbnail">
				<img src="{{asset('images/repuesto4.png')}}" alt="">
				<a href=""><div class="detalles"><h3>Ver</h3></div></a>
			</div>
			<h5 class="text-center"><a href="">FILTRO DE ACEITE WEB W8 <br>/ 51515</a></h5>
		</div>
		<div class="col-md-3">
			<div class="thumbnail">
				<img src="{{asset('images/repuesto5.png')}}" alt="">
				<a href=""><div class="detalles"><h3>Ver</h3></div></a>
			</div>
			<h5 class="text-center"><a href="">BOMBA DE AGUA USMW <br>OPTRA 1.8</a></h5>
		</div>
		<div class="col-md-3">
			<div class="thumbnail">
				<img src="{{asset('images/repuesto6.png')}}" alt="">
				<a href=""><div class="detalles"><h3>Ver</h3></div></a>
			</div>
			<h5 class="text-center"><a href="">FILTRO DE AIRE <br>WCA-2718</a></h5>
		</div>
		<div class="col-md-3">
			<div class="thumbnail">
				<img src="{{asset('images/repuesto7.png')}}" alt="">
				<a href=""><div class="detalles"><h3>Ver</h3></div></a>
			</div>
			<h5 class="text-center"><a href="">CRUCETA PRECISION <br>369</a></h5>
		</div>		
		<div class="col-md-3">
			<div class="thumbnail">
				<img src="{{asset('images/repuesto8.png')}}" alt="">
				<a href=""><div class="detalles"><h3>Ver</h3></div></a>
			</div>
			<h5 class="text-center"><a href="">ANILLO MELLING CROMADO <br>40564 STD</a></h5>
		</div>
	</div>

</div>
@stop