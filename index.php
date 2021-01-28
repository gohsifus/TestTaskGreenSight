<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="ajax.js"></script>

    <title>TestTask</title>
</head>
<body>
<div class="container">
    <div id="message"><div>
</div>
    <div class="container" id="cont">
        <form class="form-signin" method="POST" id="ajax_form" action="">
            <h2>Registration</h2>
            <div id="result_form" class="alert alert-danger"></div>
            <label>Username: <br></label>
            <input type="text" name="username" class="form-control" placeholder="UserName" required>
            <label>Surname: <br></label>
            <input type="text" name="surname" class="form-control" placeholder="UserName" required>
            <label>Email: <br></label>
            <input type="email" name="email" class="form-control" placeholder="some@some.com" required>
            <label>Password: <br></label>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <label>Confirm: <br></label>
            <input type="password" name="passwordConfirm" class="form-control" placeholder="Confirm password" required>

            <button class="btn btn-primary btn-lg btn-block" type="submit">Register</button>
        </form>
    </div>

<script>
    $('#result_form').hide();
</script>

</body>
</html>