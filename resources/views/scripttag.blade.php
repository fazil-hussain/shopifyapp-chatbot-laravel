<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>Chat Boot Application</h2>
<form action="{{ route('addscript') }}" method="POST">
    <button>Add Script Tag</button>
</form>
<form action="{{ route('allscripttags') }}" method="GET">
    <button>all Script Tag</button>
</form>
</body>
</html>
