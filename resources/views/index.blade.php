@extends('layout.app')

@section('content')
    <div class="jumbotron">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <a href="{{ url('/') }}" class="h2 text-decoration-none text-dark">
                        Lista de produtos
                    </a>
                </div>

                <div class="col-md-5">
                    <form>
                        <div class="input-group">
                            <input type="text" name="query" class="form-control" placeholder="Buscar produtos baseado no nome, descrição, fornecedor, preço...">
                            <input type="hidden" name="productsPerPage" value="{{ $productsPerPage }}">

                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-2 ml-auto">
                    <a href="{{ url('/products/create') }}" class="btn btn-primary">
                        Adicionar
                    </a>
                </div>
            </div>

            <div class="my-4">
                <span class="d-inline-block">Mostrando</span>

                <select id="select-products-count" class="form-control col-1 mx-1 d-inline-block cursor-pointer">
                    @for ($productsCount = 5; $productsCount <= 50; $productsCount += 5)
                        <option {{ $productsCount == $productsPerPage ? 'selected' : null }} value="{{ $productsCount }}">
                            {{ $productsCount }}
                        </option>
                    @endfor
                </select>

                <span class="d-inline-block">produtos por página.</span>
            </div>

            <table class="table mt-3">
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
                                <a class="btn btn-warning btn-sm" href="/">
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

            {{ $products->links() }}
        </div>
    </div>
@endsection