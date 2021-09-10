<tr>
    <td>{{ $category->id }}</td>
    <td>{{ $level . $category->name }}</td>
</tr>
@if ($category->categories)
    @php $level = ' / ---' . $level @endphp
    <ul>
        @foreach($category->categories as $categoryChild)
            @include('category.category_table._child_category', ['category' => $categoryChild, 'level' => $level])
        @endforeach
    </ul>
@endif
