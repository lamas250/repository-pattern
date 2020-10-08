@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Lista de Produtos') }}</div>

                <div class="card-body">
                   <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>Preço</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $value)
                                <tr>
                                    <td>{{$value->id}}</td>
                                    <td>{{$value->name}}</td>
                                    <td>{{$value->price}}</td>
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
