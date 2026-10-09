<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
</head>
<body>

<h2>Edit Product</h2>

<form action="{{ route('update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Product Name:</label>
    <input type="text" name="product_name" value="{{ $product->product_name }}">

    <br><br>

    <label>Category:</label>
    <input type="text" name="category" value="{{ $product->category }}">

    <br><br>

    <label>Price:</label>
    <input type="number" name="price" value="{{ $product->price }}">

    <br><br>

    <label>Quantity:</label>
    <input type="number" name="quantity" value="{{ $product->quantity }}">

    <br><br>

    <label>Description:</label>
    <textarea name="description">{{ $product->description }}</textarea>

    <br><br>

    <button type="submit">Update</button>

</form>

</body>
</html>