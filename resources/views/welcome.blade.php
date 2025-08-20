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
            <th>Автор</th>
        </tr>
        @foreach($books as $book)
        <tr>
            <td>{{ $book->name }}</td>
            <td>{{ $book->category->name }}</td>
            <td>
                @foreach($book->authors as $author)
                    <div>{{ $author->name }}</div>
                @endforeach
            </td>
        </tr>
        @endforeach
    </table>

    <h2>Авторы</h2>
    <table class="list">
        <tr>
            <th>Имя</th>
            <th>Книга</th>
        </tr>
        @foreach($authors as $author)
            <tr>
                <td>{{ $author->name }}</td>
                <td>
                    @foreach($author->books as $book)
                        <div>{{ $book->name }}</div>
                    @endforeach
                </td>
            </tr>
        @endforeach
    </table>
</div>
</body>
</html>
