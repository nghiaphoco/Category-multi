<li>{{ $category->name }}</li>
@if ($category->categories)
    <ul>
        @foreach($category->categories as $categoryChild)
            @include('category.category_ul._child_category', ['category' => $categoryChild])
        @endforeach
    </ul>
@endif
