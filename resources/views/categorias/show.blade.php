<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle de Categoría</title>
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
        .categoria-detail {
            background: #f9f9f9;
            padding: 20px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
        .detail-row {
            margin: 10px 0;
        }
        .detail-label {
            font-weight: bold;
            color: #555;
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
    <h1>Detalle de Categoría</h1>
    
    @if($categoria)
        <div class="categoria-detail">
            <div class="detail-row">
                <span class="detail-label">ID:</span> {{ $categoria->id }}
            </div>
            <div class="detail-row">
                <span class="detail-label">Nombre:</span> {{ $categoria->nombre }}
            </div>
            <div class="detail-row">
                <span class="detail-label">fabricante:</span> {{ $categoria->fabricante }}
            </div>
            <div class="detail-row">
                <span class="detail-label">modelo:</span> {{ $categoria->modelo }}
            </div>
            <div class="detail-row">
                <span class="detail-label">Creado:</span> {{ $categoria->created_at }}
            </div>
            <div class="detail-row">
                <span class="detail-label">Actualizado:</span> {{ $categoria->updated_at }}
            </div>
        </div>
    @else
        <p>Categoría no encontrada.</p>
    @endif
    
    <a href="{{ url('/categorias') }}" class="back-link">← Volver a la lista</a>
</body>
</html>
