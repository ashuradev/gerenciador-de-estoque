@extends('layout.app')

@section('title', 'Lista de produtos')

@section('content')
    <!-- Select products count -->
    <div class="my-4">
        <span class="d-inline-block">Mostrando</span>

        <select id="select-products-count" class="form-control col-md-1 col-2 mx-1 d-inline-block cursor-pointer">
            @for ($productsCount = 5; $productsCount <= 50; $productsCount += 5)
                <option {{ $productsCount == $productsPerPage ? 'selected' : null }} value="{{ $productsCount }}">
                    {{ $productsCount }}
                </option>
            @endfor
        </select>

        <span class="d-inline-block">produtos por página.</span>
    </div>

    <!-- Table -->
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Fornecedor</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ str_limit($product->description, 150, '...') }}</td>
                    <td>R$ {{ $product->price }}</td>
                    <td>{{ $product->vendor }}</td>
                    <td class="btn-group">
                        <a class="btn btn-warning btn-sm" href="{{ route('products.edit', [$product]) }}">
                            Editar
                        </a>
                        <a class="btn btn-danger btn-sm" href="/">
                            Excluir
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Pagination -->
    {{ $products->links() }}
@endsection