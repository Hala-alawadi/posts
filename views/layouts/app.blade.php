<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Laravel App</title>
    <!-- يمكنك إضافة ملف CSS هنا -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <!-- هذا هو المكان الذي سيتم فيه عرض محتوى الصفحات الفرعية -->
        @yield('content')
    </div>
</body>
</html>