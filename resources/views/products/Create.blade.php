
<!-- 
<h2> Products </h2>
<form action="{{ route('products.store') }}" method="post">
    @csrf
    <div>
        <label for="name">Product Name:</label>
        <input type="text" name="name" id="name">
    </div>
    <div>
        <label for="size">Size:</label>
        <input type="text" name="size" id="size">
    </div>
    <button type="submit">Create Product</button>
</form> -->




<!DOCTYPE html>
<html>
<head>
  <title>Create Product</title>
</head>
<body>
  <h1>Create Product</h1>
  <form action="{{ route('products.store') }}" method="post">
    @csrf
    <div>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name">
    </div>
    <div>
      <label for="size">Size:</label>
      <input type="text" id="size" name="size">
    </div>
    <div>
      <button type="submit">Create</button>
    </div>
  </form>
</body>
</html>
