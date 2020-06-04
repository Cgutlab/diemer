<!DOCTYPE html>
<html>
<head>
    <title>Send Email</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
        .title {
            white-space: nowrap;
            width: 30px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h3>Mensaje de contacto desde el sitio web DIEMER</h3>
    <h4>Datos Personales:</h4>
    <table>
        <tbody>
            <tr>
                <td class="title">Nombre:</td>
                <td>{{ @$data['nombre'] }} {{ @$data['apellido'] }}</td>
            </tr>
            <tr>
                <td class="title">Teléfono:</td>
                <td>{{ @$data['telefono'] }}</td>
            </tr>
            <tr>
                <td class="title">Email:</td>
                <td>{{ @$data['email'] }}</td>
            </tr>
            <tr>
                <td colspan="2"><strong>Mensaje</strong>:</td>
            </tr>
            <tr>
                <td colspan="2"><pre>{{ @$data['mensaje'] }}</pre></td>
            </tr>
        </tbody>
    </table>
</body>
</html>