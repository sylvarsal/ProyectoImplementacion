
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Proyecto - Implementación de Sistemas</title>

    <style>
        * {
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background: linear-gradient(135deg, #dbeafe, #eff6ff);
        }

        /* Tarjeta principal */
        .card {
            background-color: white;
            width: 400px;
            padding: 35px 45px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.12);
            text-align: center;
        }

        h1 {
            color: #2563eb;
            margin-top: 0;
            margin-bottom: 25px;
            font-size: 2rem;
        }

        /* Lista */
        ul {
            list-style: none;
            padding: 0;
            margin: 0;
            text-align: left;
        }

        li {
            background-color: #f1f5f9;
            margin: 12px 0;
            padding: 14px 18px;
            border-radius: 12px;
            font-size: 1.15rem;
            color: #334155;
            transition: 0.3s;
        }

        /* Viñetas */
        li::before {
            content: "✦";
            color: #2563eb;
            font-size: 1.2rem;
            margin-right: 12px;
        }

        /* Efecto al pasar el mouse */
        li:hover {
            background-color: #dbeafe;
            transform: translateX(5px);
        }

        .subtitle {
            color: #64748b;
            font-size: 0.95rem;
            margin-top: -15px;
            margin-bottom: 25px;
        }
    </style>
</head>

<body>

    <div class="card">

        <h1>Integrantes del equipo</h1>

        <p class="subtitle">
            Proyecto - Implementación de Sistemas
        </p>

        <ul>
            <li>Vargas Salgado Sylvia</li>
            <li>Michelle Olvera Guerra</li>
            <li>Karen Madelene Romero Flores</li>
        </ul>

    </div>

</body>
</html>


