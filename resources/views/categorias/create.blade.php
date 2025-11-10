<html>
    <head>

    </head>
    <body>
        <h1>crear categoria</h1>

        <form action="{{route('categoria.store')}}" method="POST">
            @csrf

            <div>
                <label for="nombre">nombre de la categoria</label>
                <input type="text" id="nombre" name="nombre" value="{{old('nombre')}}" required>
                @if($errors->hash('nombre'))
                    <div>{{$errors->first('nombre')}}</div>
                @endif
            </div>
            <div>
                <label for="descripcion">descripcion de la categoria</label>
                <input type="text" id="descripcion" name="descripcion" value="{{old('descripcion')}}" >
                @if($errors->hash('descripcion'))
                    <div>{{$errors->first('descripcion')}}</div>
                @endif
            </div>
            <div>
                <label for="fabricante">fabricante de la categoria</label>
                <input type="text" id="fabricante" name="fabricante" value="{{old('fabricante')}}" required>
                @if($errors->hash('fabricante'))
                    <div>{{$errors->first('fabricante')}}</div>
                @endif
            </div>
                        <div>
                <label for="modelo">modelo de la categoria</label>
                <input type="text" id="modelo" name="modelo" value="{{old('modelo')}}">
                @if($errors->hash('modelo'))
                    <div>{{$errors->first('modelo')}}</div>
                @endif
            </div>
        </form>
    </body>
</html>
