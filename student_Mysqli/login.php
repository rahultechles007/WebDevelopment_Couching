<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container">

    <div class="row justify-content-center mt-5">

        <div class="col-md-4">

            <div class="card shadow">

                <div class="card-header bg-primary text-white text-center">
                    Student Login
                </div>

                <div class="card-body">

                    <form onsubmit="login(event)">
    
                        <div class="mb-3">
                            <label>Username</label>
                            <input type="text" id="username" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label>Password</label>
                            <input type="password" id="password" class="form-control" required>
                        </div>

                        <button class="btn btn-success w-100">
                            Login
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

<script>
function login(event){
    event.preventDefault();

    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;

    if(username && password){
        window.location.href = "Result.php";
    }
}
</script>

</body>
</html>