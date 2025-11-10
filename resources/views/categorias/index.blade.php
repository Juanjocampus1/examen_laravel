<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Categorías</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        .categoria-list {
            list-style: none;
            padding: 0;
        }
        .categoria-item {
            background: #f4f4f4;
            margin: 10px 0;
            padding: 15px;
            border-radius: 5px;
        }
        .categoria-item a {
            color: #007bff;
            text-decoration: none;
        }
        .categoria-item a:hover {
            text-decoration: underline;
        }
        .no-categorias {
            color: #666;
            font-style: italic;
        }
        .btn-create {
            display: inline-block;
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 4px;
            margin-bottom: 20px;
        }
        .btn-create:hover {
            background-color: #218838;
        }
        .success {
            background-color: #d4edda;
            color: #155724;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h1>Lista de Categorías</h1>

    @if(session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ url('/categorias/create') }}" class="btn-create">+ Nueva Categoría</a>

    @if(count($categorias) > 0)
        <ul class="categoria-list">
            @foreach($categorias as $categoria)
                <li class="categoria-item">
                    <a href="{{ url('/categorias/' . $categoria->id) }}">
                        {{ $categoria->nombre }}
                    </a>
                </li>
            @endforeach
        </ul>
    @else
        <p class="no-categorias">No hay categorías disponibles.</p>
    @endif
</body>
</html>
