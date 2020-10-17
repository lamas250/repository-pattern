@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Novo Produto') }}</div>

                <div class="card-body">
                    <form action="{{route('products.update',['product'=>$product->id])}}" method="POST" class="form-group">
                        @method('PUT')
                        @include('product.default.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
