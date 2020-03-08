<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi sitio Laravel Test</title>
    @yield('my-css')
</head>

<body>
    <header style="background-color: lightblue">
        My header.
    </header>

    @yield('content-main') <!-- "cede" a la sección content -->

    <footer style="background-color: lightblue">
        Footer
        </footer>
</body>

</html>
