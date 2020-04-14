<html>

<head>
    <link rel="stylesheet" href="/style.css" />
    <link rel="stylesheet" href="/css/adminlogin.css" />

</head>

<body>
    <form class="form-signin" action="/api/login" method="POST">
        <img class="mb-4" src="/imgs/logo-raw.svg" alt="Logo" width="72" height="72" />
        <h1 class="h3 mb-3 font-weight-normal">MUMNACS Log-In</h1>
        <label for="username" class="sr-only">Username</label>
        <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus />
        <label for="password" class="sr-only">Password</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required />
        <button class="btn btn-lg btn-primary btn-block" type="submit">
            Sign in
        </button>
        <p class="mt-5 mb-3 text-muted">
            &copy; 2020 Zhamashev Yerzhan
        </p>
    </form>
</body>

</html>