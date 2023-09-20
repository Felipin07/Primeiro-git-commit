<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
</head>
<body>
<!DOCTYPE html>
<html>
<head>
    <title>Relatório de Vendas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:#e9ecef;
            }
        table {
            width: 100%;
            border-collapse: #e9ecef;
            margin-top: 20px;
            }
        th, td {
            border: 2px solid black;
            padding: 8px;
            text-align: left;
            background-color:#CCCCCC;
            }
        th {
            background: #000;
            background-color : #6c757d;
            }
            
          
    </style>
    
</head>
<body>
    
    <h1>Relatório de Vendas</h1>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>$algarismo</th>
                          
                
            </tr>
        </thead>
        <tbody>
            
            @foreach($testes as $pessoa)
                <tr>
                    <td>{{$pessoa->id}}</td>
                    <td>{{$pessoa->name}}</td>
                    <td>{{$pessoa->department}}</td>
                </tr>
            @endforeach
            
    </tbody>
    </table>
    
</body>
</html>

</body>
</html>