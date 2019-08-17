<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <title>
        @yield('title') - {{ config('app.name') }}
    </title>
</head>
<body>
    <div class="jumbotron">
        <div class="container">
            <!-- Header -->
            <header class="row align-items-center mb-3">
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
            </header>

            @yield('content')
        </div>
    </div>

    <script src="https://kit.fontawesome.com/5a3176b5aa.js"></script>
    <script src="{{ asset('/js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>