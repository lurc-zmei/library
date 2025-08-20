<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Document</title>
    <style>
        .container {
            width: 800px;
            margin: auto;
            border: 1px solid blue;
            padding: 5px;
        }
        .list {
            border-collapse: collapse;
            width: 100%;
            margin: 10px 0;
            th, td {
                border: 1px solid;
                padding: 5px;

            }
        }
    </style>
</head>
<body>
<div class="container">
    {{ dump($books) }}
    {{ dump($categories) }}
    <h2>Категории</h2>
    <table class="list">
        <tr>
            <th>Название</th>
        </tr>
        @foreach($categories as $category)
        <tr>
            <td>{{ $category->name }}</td>
        </tr>
        @endforeach
    </table>

    <h2>Книги</h2>
    <table class="list">
        <tr>
            <th>Название</th>
            <th>Категория</th>
        </tr>
        @foreach($books as $book)
        <tr>
            <td>{{ $book->name }}</td>
            <td>{{ $book->category->name }}</td>
        </tr>
        @endforeach
    </table>
</div>
</body>
</html>
