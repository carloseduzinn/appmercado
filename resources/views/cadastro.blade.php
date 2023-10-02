<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CBDConvert</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ url('assets/Css/Style.css') }}">
    <link rel="stylesheet" href="{{ url('assets/Css/MQstyle.css') }}">
</head>

<body>

    <main>
        <form method="POST" style="display: flex" action="{{ route('salvar-dispositivo') }}">@csrf
            <div class="label1">
                <label for="nomeproduto" style="color: white">Produto</label>
                <input type="text" name="nomeproduto" id="nomeproduto">
            </div>

            <div class="label1">
                <label for="estoque" style="color: white">Estoque</label>
                <input type="text" name="estoque" id="estoque">
            </div>

            <div class="label1">
                <label for="preco" style="color: white">Preço</label>
                <input type="text" name="preco" id="preco">
            </div>

            <div class="submit">
                <input type="submit" value="Cadastrar">
            </div>
        </form>
    </main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
