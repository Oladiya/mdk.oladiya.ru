<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>05.02 Работа с базой данных</title>
</head>
<body>
    <table border="2">
        @foreach($db as $data)
            <tr>
                <td>
                    {{ $data['fam'] }}
                </td>
                <td>
                    {{ $data['name'] }}
                </td>
                <td>
                    {{ $data['tel'] }}
                </td>
                <td>
                    {{ $data['email'] }}
                </td>
            </tr>
        @endforeach
    </table>
    <form action="{{ route('05-02.db.post') }}" method="post">
        @csrf
        <div class="form">
            <input type="text" name="fam">
            <input type="text" name="name">
            <input type="text" name="tel">
            <input type="email" name="email">
        </div>
        <button type="submit">Добавить</button>
    </form>
    <style>
        .form input { width: 75px; }
    </style>
</body>
</html>
