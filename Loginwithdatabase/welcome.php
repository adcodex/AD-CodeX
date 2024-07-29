<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Home</title>
    <link rel="stylesheet" type="text/css" href="css/welcome.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <div class="navbar">
        <div class="navbar-right">
            <button class="logout-button" onclick="logout()">Logout</button>
        </div>
    </div>
    <div class="container">
        <header>
            <h1>Welcome Home</h1>
        </header>
        <main>
            <p>Congrats you Login Successfull</p>
            <p>We hope you find tranquility and peace here.</p>
        </main>
    </div>

    <script>
        function logout() {
            Swal.fire({
                title: 'Are you sure?',
                text: 'You will be logged out!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, log me out!',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = 'index.php'; // Redirect to the login page
                }
            });
        }
    </script>
</body>
</html>
