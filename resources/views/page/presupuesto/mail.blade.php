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
                <td>{{ @$data['nombre'] }}</td>
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
                <td class="title">Tipo de cliente:</td>
                <td>{{ @$data['tipo'] }}</td>
            </tr>
        </tbody>
    </table>

    <h4>Datos de la Solicitud:</h4>
    <table>
        <tbody>
            <tr>
                <td class="title">Tipo de manguera:</td>
                <td>{{ @$data['tipo_manguera'] }}</td>
            </tr>
            <tr>
                <td class="title">Diametro interior (mm):</td>
                <td>{{ @$data['interior_mm'] }}</td>
            </tr>
            <tr>
                <td class="title">Diametro exterior (mm):</td>
                <td>{{ @$data['exterior_mm'] }}</td>
            </tr>
            <tr>
                <td class="title">Presion de trabajo (BAR/kg/cm2):</td>
                <td>{{ @$data['presion_trabajo'] }}</td>
            </tr>
            <tr>
                <td class="title">Temperatura de trabajo (℃):</td>
                <td>{{ @$data['temperatura'] }}</td>
            </tr>
            <tr>
                <td class="title">Cantidad (mts):</td>
                <td>{{ @$data['cantidad_metros'] }}</td>
            </tr>
            <tr>
                <td class="title">Longitud y cantidad de tramos:</td>
                <td>{{ @$data['cantidad_tramos'] }}</td>
            </tr>
            <tr>
                <td colspan="2"><strong>Observacion</strong>:</td>
            </tr>
            <tr>
                <td colspan="2"><pre>{{ @$data['observacion'] }}</pre></td>
            </tr>
        </tbody>
    </table>
</body>
</html>