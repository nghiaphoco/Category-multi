<option value="{{ $category->id }}">{{ $level . $category->name }}</option>
@if ($category->categories)
    @php $level = ' / ---' . $level @endphp
    <ul>
        @foreach($category->categories as $categoryChild)
            @include('category.category_selectbox._child_category', ['category' => $categoryChild, 'level' => $level])
        @endforeach
    </ul>
@endif
