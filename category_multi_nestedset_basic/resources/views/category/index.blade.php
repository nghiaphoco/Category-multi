<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category multi nestedset basic</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Category multi nestedset basic</h3>
            @include('category.select', ['categoriesSelect' => $categoriesSelect])
            @include('category.table', ['categories' => $categories])
            @include('category.ul', ['categoriesUlList' => $categoriesUlList])
        </div>
    </div>
</div>
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>
