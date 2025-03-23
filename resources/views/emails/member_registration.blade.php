<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Registro de Membro - Comunidade de Angola em Washington</title>
    <style>
        body {
            width: 210mm;
            height: 297mm;
            margin: 5mm;
            padding: 0;
            color: #001028;
            background: #FFFFFF;
            font-family: Arial, sans-serif;
            font-size: 12px;
        }

        header {
            padding: 5mm 0;
        }

        #logo {
            text-align: center;
        }

        #logo img {
            width: 50mm;
        }

        h2 {
            border-top: 1px solid #5D6975;
            border-bottom: 1px solid #5D6975;
            color: #5D6975;
            font-size: 1.8em;
            text-align: center;
            margin: 0 0 5mm 0;
        }

        #community-info {
            text-align: center;
            margin-bottom: 5mm;
        }

        #community-info div {
            color: #5D6975;
            font-size: 1em;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 5mm;
        }

        th,
        td {
            padding: 2mm;
            border: 1px solid #C1CED9;
        }

        th {
            color: #5D6975;
            font-weight: normal;
            text-align: left;
        }

        td {
            text-align: left;
        }

        .label {
            font-weight: bold;
        }

        #signature-section {
            margin-top: 5mm;
            overflow: hidden;
        }

        .signature-block {
            float: left;
            width: 48%;
            text-align: center;
        }

        .signature-line,
        .date-line {
            border-top: 1px solid #5D6975;
            width: 40mm;
            margin-top: 10mm;
        }

        footer {
            color: #5D6975;
            text-align: center;
            font-size: 10px;
            margin-top: 5mm;
        }
    </style>
</head>

<body>
    <header>
        <div id="logo">
            <img src="https://angolancommunity.org/wp-content/uploads/2024/04/logo-1.png.webp"
                alt="Comunidade de Angola em Washington">
        </div>
        <h2>REGISTRO DE MEMBRO</h2>
    </header>
    <main>
        <div id="community-info">
            <div>Comunidade de Angola em Washington</div>
            <div>13118 SE 228th Pl Kent , Washington,WA 98031, USA</div>
            <div>(206) 383-2188</div>
            <div><a href="mailto:info@angolancommunity.org">info@angolancommunity.org</a></div>
        </div>
        <table>
            <tr>
                <th class="label">CAMPO</th>
                <th>INFORMAÇÃO</th>
            </tr>
            <tr>
                <td class="label">Nome</td>
                <td>{{ $data['nome'] }}</td>
            </tr>
            <tr>
                <td class="label">Email</td>
                <td>{{ $data['email'] }}</td>
            </tr>
            <tr>
                <td class="label">Telefone</td>
                <td>{{ $data['telefone'] }}</td>
            </tr>
            <tr>
                <td class="label">Gênero</td>
                <td>{{ $data['genero'] }}</td>
            </tr>
            <tr>
                <td class="label">Estado Civil</td>
                <td>{{ $data['estado_civil'] }}</td>
            </tr>
            <tr>
                <td class="label">Data de Nascimento</td>
                <td>{{ $data['data_nascimento'] }}</td>
            </tr>
            <tr>
                <td class="label">Cidade</td>
                <td>{{ $data['cidade'] }}</td>
            </tr>
            <tr>
                <td class="label">Estado</td>
                <td>{{ $data['estado'] }}</td>
            </tr>
        </table>
        <div id="signature-section">
            <div class="signature-block">
                <div>Assinatura do Membro</div>
                <div class="signature-line"></div>
            </div>
            <div class="signature-block" style="float: right;">
                <div>Data</div>
                <div class="date-line"></div>
            </div>
        </div>
    </main>
    <footer>
        Este documento foi criado em um computador e é válido sem assinatura ou selo, exceto onde indicado.
    </footer>
</body>

</html>