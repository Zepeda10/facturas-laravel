<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<h2>index facturas</h2>

<p>El group by no funciona debido a la relación 'uno a muchos' que tiene
        el modelo 'Factura' con los usuarios y los productos.
        Una forma de solucionarlo sería recorrer los atributos por medio de un foreach, pero
        eso implica un cambio al momento de pasar la variable 'facturas' por el compact.
        Debido al tiempo que implica entregar el examen, se dejó la vista de 'facturas' con
        los nombres de los clientes repetidos.</p>


<table class="table">
	<thead>
		<tr>
			<th>Id</th>
			<th>Cliente</th>
			<th>Desglozar</th>
		</tr>
	</thead>
	<tbody>
		@foreach($facturas as $factura)
			<tr>
				<td>{{$factura->id}}</td>
				<td>{{$factura->user->name}}</td>							
	
				<td>
					<a href="{{route('facturas.show', $factura->user_id)}}">
						Ver
					</a>
				</td>
			</tr>
		@endforeach	        
	</tbody>
</table>
