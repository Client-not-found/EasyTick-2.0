<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" lang="de">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Ticketsystem | Login</title>
</head>

<style>
    .card {
        margin: 0 auto;
        /* Added */
        float: none;
        /* Added */
        margin-bottom: 10px;
        /* Added */
    }

</style>
<body>
    <div class="container">
        <h1 class="text-center">Bitte Einloggen</h1>
        <div class="card card-center col-md-3">
            <div class="card-body">
                <h5 class="card-title text-center">Login</h5>
                <form method="POST" action="/dashboard">
                    @csrf
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="password">Passwort</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary" @click="login">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
