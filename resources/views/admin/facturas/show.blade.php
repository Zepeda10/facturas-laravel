<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<h2>show facturas</h2>

<table class="table">
	<thead>
		<tr>
			<th>Id</th>
			<th>Cliente</th>
            <th>Producto</th>
            <th>Subtotal</th>
            <th>Impuesto</th>
            <th>Total</th>
			<th>Fecha</th>	
		</tr>
	</thead>
	<tbody>
    @foreach($facturas as $factura)
			<tr>
				<td>{{$factura->id}}</td>
				<td>{{$factura->user->name}}</td>
                <td>{{$factura->producto->nombre}}</td>
                <td>{{$factura->subtotal}}</td>
                <td>{{$factura->impuesto}}</td>
                <td>{{$factura->total}}</td>
				<td>{{$factura->created_at}}</td>							
	
			</tr>
    @endforeach        
	</tbody>
</table>