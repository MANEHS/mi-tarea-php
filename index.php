<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juan Manuel Hernández Sánchez - Enlaces</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f0f2f5 url('https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=1200&q=80') no-repeat center center fixed;
            background-size: cover;
            display: block;
            padding-top: 10vh;
        }
        .header-tag {
            background: rgba(255, 255, 255, 0.9);
            padding: 8px 16px;
            font-size: 13px;
            font-weight: 600;
            color: #333;
            border-radius: 4px;
            width: fit-content;
            margin: 0 auto 30px auto;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            text-align: center;
        }
        .card {
            background: rgba(255, 255, 255, 0.95);
            max-width: 450px;
            margin: 0 auto;
            padding: 40px 30px;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
            text-align: center;
            backdrop-filter: blur(5px);
        }
        .avatar {
            width: 130px;
            height: 130px;
            border-radius: 50%;
            background: #0078d4;
            margin: 0 auto 20px auto;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 48px;
            font-weight: bold;
            border: 4px solid white;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        h1 {
            color: #005a9e;
            font-size: 24px;
            margin-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .subtitle {
            color: #555;
            font-size: 14px;
            line-height: 1.5;
            margin-bottom: 30px;
        }
        .btn {
            display: block;
            width: 100%;
            padding: 14px;
            margin-bottom: 15px;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
            font-size: 15px;
            transition: all 0.2s ease;
            text-align: center;
        }
        .btn-linkedin {
            background-color: #0078d4;
            color: white;
        }
        .btn-linkedin:hover {
            background-color: #005a9e;
            transform: translateY(-2px);
        }
        .btn-github {
            background-color: #24292e;
            color: white;
        }
        .btn-github:hover {
            background-color: #1a1e22;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>

    <div class="header-tag">
        L22220838@cdguzman.tecnm.mx | INSTITUTO TECNOLÓGICO DE CIUDAD GUZMÁN
    </div>

    <div class="card">
        <div class="avatar">JM</div>
        
        <h1>Juan Manuel Hernández Sánchez</h1>
        <p class="subtitle">Estudiante de Ingeniería en Sistemas Computacionales | Cómputo en la Nube - Unidad 5.</p>
        
        <a href="https://linkedin.com" target="_blank" class="btn btn-linkedin">💼 Ver mi LinkedIn</a>
        <a href="https://github.com" target="_blank" class="btn btn-github">🐙 Explorar mi GitHub</a>
    </div>

</body>
</html>