<!DOCTYPE html>
<html>
<head>
    <title>Movie Collection</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #1f1c2c, #928dab);
            margin: 0;
            padding: 0;
        }
        .container {
            width: 70%;
            margin: 60px auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th {
            background-color: #4b3f72;
            color: white;
            padding: 12px;
        }
        td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }
        tr:hover {
            background-color: #f2f2f2;
        }
        .price {
            font-weight: bold;
            color: #2c3e50;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>🎬 Movie Collection</h2>

    <table>
        <tr>
            <th>🎞 Title</th>
            <th>🎭 Genre</th>
            <th>💰 Price</th>
        </tr>

        @foreach($movies as $movie)
        <tr>
            <td>{{ $movie['title'] }}</td>
            <td>{{ $movie['genre'] }}</td>
            <td class="price">₱{{ $movie['price'] }}</td>
        </tr>
        @endforeach
    </table>
</div>

</body>
</html>