<h2>Ordered Products</h2>
<table>
    <thead>
    <table style="background-color:#ccccff">
        <tr>
            <th>ID</th>
            <th>Amount</th>
            <th>Customer</th>
            <th>Product Name</th>
            <th>Product Size</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->amount }}</td>
                <td>{{ $order->customer }}</td>
                <td>{{ $order->product->name }}</td>
                <td>{{ $order->product->size }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

<h2>Created Products</h2>
<table>

    <thead>
    <table style="background-color:#ccffff">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Size</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->size }}</td>
            </tr>
        @endforeach
    </tbody>
</table>