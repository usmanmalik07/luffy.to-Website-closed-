<!-- resources/views/shop.blade.php -->
<h1>Shop</h1>

<!-- Display Items -->
<ul>
    @foreach($items as $item)
        <li>
            {{ $item->name }} - ${{ $item->price }} - Quantity: {{ $item->quantity }}
            @if($item->image_path)
            <img src="{{ asset($item->image_path) }}" alt="Item Image" class="image-style">


            @endif
            <form action="{{ route('shop.removeItemShop', ['id' => $item->id]) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Are you sure?')">Remove</button>
            </form>
        </li>
    @endforeach
</ul>

<!-- Add Item Form -->
<form action="{{ route('shop.addItemShop') }}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="name">Item Name:</label>
    <input type="text" name="name" required>
    <label for="price">Price:</label>
    <input type="number" name="price" step="0.01" required>
    <label for="quantity">Quantity:</label>
    <input type="number" name="quantity" required>
    <label for="image">Image:</label>
    <input type="file" name="image" accept="image/*">
    <button type="submit">Add Item</button>
</form>
<style>
    .image-style {
        max-width: 100px;
        max-height: 100px;
    }
</style>

