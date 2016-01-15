@extends('layouts.master')
@section('title', 'Repuestos Los Gallegos, C.A - Contacto')
@section('content')
<div class="mapa" id="googleMap2">
	
</div>
<div class="form-contacto">
	<div class="container panel">
		<h1 class="text-center">FORMULARIO DE CONTACTO</h1>
		<br>
		<form class="" role="form">
		  	<div class="col-md-7">
		  		<div class="form-group">
		    		<input type="email" class="form-control" placeholder="Nombre">
			 	</div>
			  	<div class="form-group">
			    	<input type="email" class="form-control" placeholder="Correo">
			  	</div>
			  	<div class="form-group">
			    	<input type="email" class="form-control" placeholder="Asunto">
			  	</div>
			  	<div class="form-group">
		    		<textarea class="form-control" placeholder="Descripción de su solicitud..." rows="9"></textarea>
		    	</div>
		    	<div class="form-group">
		    		<button type="submit" class="btn btn-default">Enviar</button>
		    	</div>
		    </div>
		</form>
		    <div class="col-md-5 table-responsive">
		    	<table class="table">
					<tr>
						<th>Contacto Oficina</th>
					</tr>
					<tr>
						<td>
							<div>0235-3422077 / 3416176</div>
							<div>gerente.sonia@repuestoslosgallegos.com.ve</div>
							<div>compras.diego@repuestoslosgallegos.com.ve</div>
						</td>
					</tr>
					<tr>
						<th>Contacto Ventas</th>
					</tr>
					<tr>
						<td>
							<div><strong>Gregory Rengifo:</strong></div>
							<div>Tlf. 0414-4935771</div>
							<div><a href="mailto:#">ventas.gregory@repuestoslosgallegos.com.ve</a></div>
							<div><strong>Anibal Ortega:</strong></div>
							<div>Tlf. 0426-2381023</div>
							<div><a href="mailto:#">ventas.anibal@repuestoslosgallegos.com.ve</a></div>
							<div><strong>Francisco Farias:</strong></div>
							<div>Tlf. 0426-2353208</div>
							<div><a href="mailto:#">ventas.francisco@repuestoslosgallegos.com.ve</a></div>
						</td>
					</tr>
				</table>
		    </div>		
	</div>
	<br>
</div>
@stop