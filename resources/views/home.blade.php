<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homme</title>
</head>
<body>
   <div style="border: 3px solid black">
        <h2> Register</h2>
        <form action="/register" method="POST">
            @csrf
            <input type="text" placeholder="name">
            <input type="text" placeholder="email">
            <input type="password" placeholder="password">
            <button >Register</button>
        </form>
   </div>
</body>
</html>