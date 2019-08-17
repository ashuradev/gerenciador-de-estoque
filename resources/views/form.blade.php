@extends('layout.app')

@section('title', $title)

@section('content')
    <form method="POST" class="col-md-6 p-0" action="{{ $action }}">
        @csrf
        @method($method ?? 'POST')

        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="name" value="{{ old('name', $product->name ?? null) }}">

            @if($errors->has('name'))
                <span class="invalid-feedback">
                    {{ $errors->first('name') }}
                </span>
            @endif 
        </div>

        <div class="form-group">
            <label for="description">Descrição</label>
            <textarea type="text" name="description" class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" id="description">{{ old('description', $product->description ?? null) }}</textarea>

            @if($errors->has('description'))
                <div class="invalid-feedback">
                    {{ $errors->first('description') }}
                </div>
            @endif 
        </div>

        <div class="form-group">
            <label for="price">Preço</label>
            <input type="text" name="price" class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" id="price" value="{{ old('price', $product->price ?? null) }}">

            @if($errors->has('price'))
                <div class="invalid-feedback">
                    {{ $errors->first('price') }}
                </div>
            @endif 
        </div>

        <div class="form-group">
            <label for="vendor">Fornecedor</label>
            <input type="text" name="vendor" class="form-control {{ $errors->has('vendor') ? 'is-invalid' : '' }}" id="vendor" value="{{ old('vendor', $product->vendor ?? null) }}">

            @if($errors->has('vendor'))
                <div class="invalid-feedback">
                    {{ $errors->first('vendor') }}
                </div>
            @endif 
        </div>

        <button type="submit" class="btn btn-primary mt-2">
            <i class="fas fa-plus"></i>
            Criar novo produto
        </button>
    </form>
@endsection