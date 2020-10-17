@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Lista de Produtos') }} <a class="btn btn-warning" href="{{route('products.create')}}">Novo</a></div>

                <div class="card-body">
                   <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>Preço</th>
                                <th>Ações</th>
                                <th>Excluir</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $value)
                                <tr>
                                    <td>{{$value->id}}</td>
                                    <td>{{$value->name}}</td>
                                    <td>{{$value->price}}</td>
                                    <td><a class="btn btn-info" href="{{route('products.show',['product'=>$value->id])}}">Ver</a>
                                        <a class="btn btn-success" href="{{route('products.edit',['product'=>$value->id])}}">Editar</a>
                                        
                                    </td>
                                    <td>
                                        <form action="{{route('products.destroy',['product'=>$value->id])}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-danger">Excluir</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach 
                        </tbody>
                   </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
