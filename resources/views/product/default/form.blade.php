@csrf
<label>Nome</label>
<input class="form-control" name="name" type="text" value="{{$product->name ?? old('name')}}">

<label>Preço</label>
<input class="form-control" name="price" type="text" value="{{$product->price ?? old('price')}}">

<button type="submit" class="btn btn-primary">Enviar</button>