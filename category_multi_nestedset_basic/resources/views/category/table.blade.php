<table class="table mt-4">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <td>Order</td>
        </tr>
    </thead>
    <tbody>
        @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ str_repeat('/--- ', $category->depth) . $category->name }}</td>
                <td>
                    @include('category.order', ['id' => $category->id])
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
