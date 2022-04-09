<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<h2>Edit productos</h2>

<form action="{{route('productos.update',$producto)}}" method="post" accept-charset="utf-8">
	@csrf
    @method('put')
    <label for="nombre">Nombre</label>
	<input type="text" name="nombre" placeholder="Producto" value="{{ old('nombre', $producto->nombre) }}">

    <label for="precio">Precio</label>
	<input type="text" name="precio" placeholder="Precio" value="{{ old('precio', $producto->precio) }}">

    <label for="impuesto">Impuesto</label>
	<input type="text" name="impuesto" placeholder="Impuesto" value="{{ old('impuesto', $producto->impuesto) }}">

    <button type="submit" name="enviar">Actualizar</button>
</form>