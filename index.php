<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        html, body{
            height: 100%;
        }
        form{
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
        }
        body{
            display: flex;
            justify-content: center;
        }
    </style>
</head>
  
<body>
    <form>
        <div>
            <label class="form-label" for="email-login">email</label>
            <input class="form-control" type="email" id="email-login">
        </div>
        <div>
            <label class="form-label" for="senha-login">senha</label>
            <input class="form-control" type="password"  id="senha-login">
        </div>
        <div class="d-grid gap-2 mt-4 w-100">
            <button class="btn btn-primary" type="button">Logar</button>
        </div>
    </form>
</body>
</html>