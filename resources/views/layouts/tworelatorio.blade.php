<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="PT-BR">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            };     
          
    </style>
<body>
    <h1>Planilha para ficar de exemplo</h1>

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Sistema</th>
                <th>IP</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ips as $ip)
                <tr>
                    <td>{{$ip['nome']}}</td>
                    <td>{{$ip['idade']}}</td>
                    <td>{{$ip['ip']}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
