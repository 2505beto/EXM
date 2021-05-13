@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Bienvenido desea Hacer un Pedido') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <body>
                    <div class="container">
                        <h1 class="text-center">Registrar Producto</h1>
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                            <form method="post" action="/registrar-producto">
                            @csrf
                                <div class="col-md-6">
                                <label class="form-label col-form-label col-form-label-lg">Ingrese el nombre de Producto</label>
                                <input class ="form-control" type="text" name="name" @if($errors->first('name')) style="border: 1px solid red" @endif/>
                                @if($errors->first('name'))
                                <span style="color: red">{{$errors->first('name')}}</span>
                                @endif
                                <br>
                                </div>
                                <div class="col-md-2">
                                        <input type="submit" name="submit" value="Guardar" class="btn btn-primary"></td> 
                                        </div>
                                </form>
                                    </div>
                            </div>
                    </div>          
                    </body>
                    <style>
                        body{
                            background-color: #39e3b1;
                        }
                    </style>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
