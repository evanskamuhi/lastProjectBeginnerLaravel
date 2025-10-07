<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EvanStore</title>
    <link rel="shortcut icon" href="{{ asset("assets/images/logo.png") }}" type="image/x-icon">

    <!-- tailwind -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <!-- fontawesome -->
    <link rel="stylesheet" href="{{ asset("assets/fontawesome/css/all.min.css") }}">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
</head>

<body class="font-['inter'] font-sans-serif">

    @yield("body")

</body>

</html>