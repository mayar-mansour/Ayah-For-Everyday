<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Jar of Ayat</title>
    <style>
        body {
            font-family: 'Cairo', sans-serif;
            background: #fefcf9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .card {
            background: #fff5ec;
            padding: 2rem;
            border-radius: 20px;
            max-width: 600px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            text-align: center;
        }
        .ayah {
            font-size: 26px;
            color: #333;
            direction: rtl;
            line-height: 2.2;
        }
        .translation {
            margin-top: 1rem;
            font-size: 18px;
            color: #555;
        }
        .meta {
            margin-top: 0.5rem;
            font-size: 14px;
            color: #999;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="ayah">{{ $ayah->ayah }}</div>
        <div class="translation">{{ $ayah->translation }}</div>
        <div class="meta">Surah {{ $ayah->surah }} - Ayah {{ $ayah->ayah_number }}</div>
    </div>
</body>
</html>
