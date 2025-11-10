<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Categoría</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #0056b3;
        }
        .error {
            color: #dc3545;
            font-size: 14px;
            margin-top: 5px;
        }
        .success {
            background-color: #d4edda;
            color: #155724;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 20px;
        }
        .back-link {
            display: inline-block;
            margin-top: 20px;
            color: #007bff;
            text-decoration: none;
        }
        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Crear Nueva Categoría</h1>

    @if(session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ url('/categorias') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="nombre">Nombre de la categoría</label>
            <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" required>
            @if($errors->has('nombre'))
                <div class="error">{{ $errors->first('nombre') }}</div>
            @endif
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <input type="text" id="descripcion" name="descripcion" value="{{ old('descripcion') }}" required>
            @if($errors->has('descripcion'))
                <div class="error">{{ $errors->first('descripcion') }}</div>
            @endif
        </div>

        <div class="form-group">
            <label for="fabricante">Fabricante</label>
            <input type="text" id="fabricante" name="fabricante" value="{{ old('fabricante') }}" required>
            @if($errors->has('fabricante'))
                <div class="error">{{ $errors->first('fabricante') }}</div>
            @endif
        </div>

        <div class="form-group">
            <label for="modelo">Modelo</label>
            <input type="text" id="modelo" name="modelo" value="{{ old('modelo') }}" required>
            @if($errors->has('modelo'))
                <div class="error">{{ $errors->first('modelo') }}</div>
            @endif
        </div>


        <button type="submit">Crear Categoría</button>
    </form>

    <a href="{{ url('/categorias') }}" class="back-link">← Volver a la lista</a>
</body>
</html>
