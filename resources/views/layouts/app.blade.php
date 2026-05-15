<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Hewan</title>
</head>
<body>
    <h1>{{ $title }}</h1>

    @if(session('success'))
      <p style="color: yellow;">{{ session('success') }}</p>
    @endif

    @yield('content')
    
</body>
</html>