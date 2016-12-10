@extends('layouts.app')
@section('content')
	<header class="big-padding text-center"><h1>Datos de la compra</h1></header>
	<div class="container">
		<div class="card large-padding">
			<h3>Pago <span>{{$shopping_cart->status}}</span></h3>
			<p>Verifica tus datos</p>
			<div class="row large-padding">
				<div class="col-xs-6">
					Nombre
				</div>
				<div class="col-xs-6">
					{{$order->recipient_name}}	
				</div>
			</div>
			<div class="row large-padding">
				<div class="col-xs-6">
					Correo
				</div>
				<div class="col-xs-6">
					{{$order->email}}
				</div>
			</div>
			<div class="row large-padding">
				<div class="col-xs-6">
					Domicilio
				</div>
				<div class="col-xs-6">
					{{$order->address()}}
				</div>
			</div>
			<div class="row large-padding">
				<div class="col-xs-6">
					Ciudad
				</div>
				<div class="col-xs-6">
					{{$order->city}}
				</div>
			</div>
			<div class="row large-padding">
				<div class="col-xs-6">
					Estado
				</div>
				<div class="col-xs-6">
					{{$order->state}}
				</div>
			</div>
			<div class="row large-padding">
				<div class="col-xs-6">
					Nom. Guía
				</div>
				<div class="col-xs-6">
					{{$order->guide_number}}
				</div>
			</div>
			<div class="text-center top-space">
				<a href="{{url('compras/'.$shopping_cart->customid)}}">Link permanente de tu compra</a>
			</div>
		</div>
	</div>
@endsection