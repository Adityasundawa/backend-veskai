<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example HTML Page</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <h1>Welcome to the Example HTML Page</h1>
    <button id="show-alert">Show Alert</button>

    <script>
        document.getElementById('show-alert').addEventListener('click', function() {
            Swal.fire('Hello, SweetAlert!');
        });
    </script>
</body>
</html>
