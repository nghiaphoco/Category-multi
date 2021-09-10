<select class="custom-select">
    <option>--Select category--</option>
    @foreach($categoriesSelect as $item)
        <option value="{{ $item->id }}">{{ str_repeat(' /--- ', $item->depth) . $item->name }}</option>
    @endforeach
</select>
