<h2>Order Products here</h2>

<form action="{{ route('orders.store') }}" method="post">
    @csrf
    <div>
        <label for="product_id">Product:</label>
        <select name="product_id" id="product_id">
            @foreach ($products as $product)
                <option value="{{ $product->id }}">{{ $product->name }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="amount">Amount:</label>
        <input type="text" name="amount" id="amount">
    </div>
    <div>
        <label for="customer">Customer:</label>
        <input type="text" name="customer" id="customer">
    </div>
    <button type="submit">Create Order</button>
</form>
