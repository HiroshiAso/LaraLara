<!-- resources/views/home.blade.php -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ホーム</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        .navbar {
            background-color: #f1f1f1;
            padding: 10px;
            margin-bottom: 20px;
        }
        .navbar a {
            margin-right: 15px;
            text-decoration: none;
            color: #333;
        }
        .content {
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <!-- route関数を使用したリンク -->
        <a href="{{ route('home') }}">ホーム</a>
        <a href="{{ route('page1') }}">ページ1</a>
        <a href="{{ route('page2') }}">ページ2</a>
        <a href="{{ route('user.show', ['id' => 1]) }}">ユーザー1</a>
        <a href="{{ route('user.show', ['id' => 2]) }}">ユーザー2</a>
    </div>

    <div class="content">
        頼む遷移してくれ
    </div>
</body>
</html>
