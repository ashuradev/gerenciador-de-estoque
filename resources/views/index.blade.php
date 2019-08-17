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

                        <form action="{{ route('products.destroy', [$product]) }}" method="POST">
                            @csrf 
                            @method('DELETE')

                            <button class="btn btn-danger btn-sm delete-product"">
                                Excluir
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Confirmation modal -->
    <div class="modal fade" id="confirm-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirmação</h5>

                    <button type="button" class="close" data-dismiss="modal">
                        <span>
                            &times;
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    Você tem certeza que deseja excluir este produto?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Cancelar
                    </button>
                    <button type="button" class="btn btn-danger" id="delete-modal-btn">
                        Excluir
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Pagination -->
    {{ $products->links() }}
@endsection