@extends('layout.app')

@section('title', 'Criar novo produto')

@section('content')
    <form method="POST" class="col-md-6 p-0">
        @csrf

        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" id="name" value="{{ old('name') }}">

            @if($errors->has('name'))
                <div class="invalid-feedback">
                    {{ $errors->first('name') }}
                </div>
            @endif 
        </div>

        <div class="form-group">
            <label for="description">Descrição</label>
            <textarea type="text" class="form-control" id="description">
                {{ old('description') }}
            </textarea>

            @if($errors->has('description'))
                <div class="invalid-feedback">
                    {{ $errors->first('description') }}
                </div>
            @endif 
        </div>

        <div class="form-group">
            <label for="price">Preço</label>
            <input type="text" class="form-control" id="price" value="{{ old('price') }}">

            @if($errors->has('price'))
                <div class="invalid-feedback">
                    {{ $errors->first('price') }}
                </div>
            @endif 
        </div>

        <div class="form-group">
            <label for="vendor">Fornecedor</label>
            <input type="text" class="form-control" id="vendor" value="{{ old('vendor') }}">

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