@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<table class="table">
					<thead>
						<th>Articulo</th>
						<th>Precio</th>
						<th>cantidad</th>
						<th>Acciones</th>
					</thead>
					<tbody>
						@foreach($products as $product)
							<tr>
								<td>{{$product->descripcion}}</td>
								<td>{{$product->price}}</td>
								<td>
									<a href="#" 
										data-type="number" 
										data-pk="{{$product->in_shopping_cart_id}}"
										data-url='{{url("in_shopping_carts/$product->in_shopping_cart_id")}}'
										data-value="{{$product->qty}}"
										data-name="qty"
										class="set-qty"
										data-tile="Cantidad">
									</a>
								</td>
								<td></td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			<div class="col-md-4">			
				@include('cards.card_pago',['ruta'=>url("/pagos"),'shopping_cart'=>$shopping_cart,
						'forma_pago'=>'paypal','fileName'=>'paypal.png'])
				<br>
				@include('cards.card_pago',['ruta'=>url("/pagos"),'shopping_cart'=>$shopping_cart,
				'forma_pago'=>'referencia','fileName'=>'referencia.png'])
			</div>
		</div>
	</div>
@endsection