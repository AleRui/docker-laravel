<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mi sitio Laravel Test</title>
  <link rel="stylesheet" type="text/css" href="master.css">
  @yield('my-css')
</head>

<body>
  <header style="background-color: lightblue">
      My header.
  </header>

  @yield('content-main')
  <!-- "cede" a la sección content -->

  @section('parent-section')
    <div>Trozo de código en padre.</div>
  @endsection

  <footer style="background-color: lightblue">
    Footer
  </footer>


  @push('scripts')
    <script type="javascript">
      console.log("Hello JavaScript!");
    </script>
  @endpush
</body>

</html>
