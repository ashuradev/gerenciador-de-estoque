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
            <header class="mb-3">
                <div class="row align-items-center">
                    <div class="col-md-3 mb-3 mb-md-0">
                        <a href="{{ url('/') }}" class="h5 text-decoration-none text-dark">
                            {{ config('app.name') }}
                        </a>
                    </div>

                    <div class="col-md-5 mb-3 mb-md-0">
                        <form action="">
                            <div class="input-group">
                                <input type="text" name="query" class="form-control" placeholder="Buscar produtos baseado no nome, descrição, fornecedor, preço...">

                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-md-3 ml-auto mb-3 mb-md-0">
                        <a href="{{ url('/products/create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i>
                            Criar novo produto
                        </a>
                    </div>
                </div>

                <a href="{{ url()->current() }}" class="text-decoration-none text-dark h6 my-2">
                    @yield('title')
                </a>

                @if (session()->has('success'))
                    <div class="alert alert-success my-4">
                        {{ session('success') }}
                    </div>
                @endif
            </header>

            @yield('content')
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5a3176b5aa.js"></script>
    <script src="{{ asset('/js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>