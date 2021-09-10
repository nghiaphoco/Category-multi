<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <td>Name</td>
        </tr>
    </thead>
    <tbody>
        @php
            $level = ' / ---';
        @endphp
        @foreach($categories as $category)
            @include('category.category_table._child_category', ['category' => $category, 'level' => $level])
        @endforeach
    </tbody>
</table>
