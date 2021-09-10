<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh mục đa cấp</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
</head>
<body>
<div class="container-fluid">
    <div class="card mt-3">
            <div class="row card-body">
                @if ($categories)
                    <div class="col-md-4">
                        @include('category.category_ul.category', ['categories' => $categories])
                    </div>
                    <div class="col-md-4">
                        @include('category.category_table.category', ['categories' => $categories])
                    </div>
                    <div class="col-md-4">
                        @include('category.category_selectbox.category', ['categories' => $categories])
                    </div>
                @endif
            </div>
    </div>
</div>
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>
