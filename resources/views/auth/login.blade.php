<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        form{
            width:600px;
            margin: auto;
        }
    </style>
</head>
<body>
    <form action=""  >
        Email:
        <br> 
        <input type="text" value="{{$email}}">
        <br> <br>
        Password:
        <br>
        <input type="password">
        <br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>