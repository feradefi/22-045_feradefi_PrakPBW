
<html lang="en">
<head>
    <title>login fr</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap v5.1.3 CDNs -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- CSS File -->
    <link rel="stylesheet" href="staylelogin.css">
</head>

<body>
    <div class="login shadow-lg p-4 mb-1 bg-body-tertiary rounded">
        <h1 class="text-center">LOGIN</h1>
        <h6 class="text-center"> Masukkan Username & Password</h6>
        <form class="needs-validation"action="server.php" method="post">
            <div class="form-group">
                <label class="form-label" for="Username"></label>
                <input class="form-control" type="text" name="username"  placeholder="Username">
            </div>
            <div class="form-group"> 
                <label class="form-label" for="password"></label>
                <input class="form-control" type="password" name="password" placeholder="password">
            </div>
            <button class="btn btn-light w-100 tombol" type="submit" value='Login'>Masuk</button>
        </form><br>

        <p class="text-center lupa"> Lupa Password? <a href="#" class="klik"> Klik disini! </a></p>
    </div>
</body>
</html>