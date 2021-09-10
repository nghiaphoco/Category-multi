<select class="custom-select">
    <option>-- Select category --</option>
    @php
        $level = ' / ---';
    @endphp
    @foreach($categories as $category)
        @include('category.category_selectbox._child_category', ['category' => $category, 'level' => $level])
    @endforeach
</select>
