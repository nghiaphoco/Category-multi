<ul>
    @foreach($categories as $category)
        @include('category.category_ul._child_category', ['category' => $category])
    @endforeach
</ul>
