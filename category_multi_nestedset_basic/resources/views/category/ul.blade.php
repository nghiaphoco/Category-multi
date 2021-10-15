<ul>
    @foreach($categoriesUlList as $category)
        <li>{{ $category->name }}</li>
        @if ($category->children)
            @include('category.ul', ['categoriesUlList' => $category->children])
        @endif
    @endforeach
</ul>
