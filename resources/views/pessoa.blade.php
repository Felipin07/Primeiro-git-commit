<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de pessoa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container">
        <div class="col col-md-6">
            <form action="pessoa/cadastrar" method="POST">

                @csrf
                <label for="name">Nome:</label>
                <input name="name" type="text" id="name" class="form-control">

                <label for="department">Setor:</label>
                <input name="department" type="text" id="department" class="form-control">


                <button type="submit" class="btn btn-primary">Enviar</button>

            </form>
        </div>
    </div>

</body>

</html>