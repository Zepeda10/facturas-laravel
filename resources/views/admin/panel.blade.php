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

                    <h1>Panel de admin</h1>

                    <a href="{{ url('/admin/productos') }}">Productos</a>
                    <a href="{{ url('/admin/facturas') }}">Ver Facturas</a>


                    <form action="{{route('facturas.store')}}" method="post" accept-charset="utf-8">
                        @csrf
                        <button type="submit" name="enviar">Facturar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection