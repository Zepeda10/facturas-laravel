@extends('layouts.app')

@section('content')
<!-- CSS only -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <h2>Comprar</h2>
                    <p>Seleccione producto a comprar</p>

                    <form action="{{route('home.vender')}}" method="post">
                        @csrf
                        <input id="user_id" type="hidden" name="user_id" value="{{Auth::user()->id}}">
                        <select name="producto_id">
                            @foreach($productos as $producto)
                                <option value="{{ $producto->id }}">{{ $producto->nombre }}</option>
                            @endforeach
                        </select>

                        <button type="submit">Comprar</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
