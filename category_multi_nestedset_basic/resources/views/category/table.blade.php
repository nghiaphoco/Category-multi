<table class="table mt-4">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
    </thead>
    <tbody>
        @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ str_repeat('/--- ', $category->depth) . $category->name }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
