<!DOCTYPE html>
<html>
<head>
    <title>Product Management</title>
</head>
<body>

<h1>Product Management</h1>

<form action="{{ route('store') }}" method="POST">
    @csrf

    <label>Product Name:</label>
    <input type="text" name="product_name">
    <br><br>
<label>category:</label>
     <select name="category">
        
        <option value="Electronics">Electronics</option>
        <option value="Clothing">furniture</option>
        <option value="Books">Books</option>
        
    </select>
<br><br>

    <label>Price:</label>
    <input type="number" name="price">
    <br><br>

    <label>Quantity:</label>
    <input type="number" name="quantity">
    <br><br>

    <label>Description:</label>
    <textarea name="description"></textarea>
    <br><br>

    <button type="submit">Add Product</button>
 <br><br>
</form>
<form action="{{ route('search') }}" method="GET">
    <input type="text" name="search" placeholder="Search product name">

    <button type="submit">Search</button>
</form>
 <br><br>
 <form action="{{ route('filter') }}" method="GET">

    <select name="category">
        <option value="">Select Category</option>
        <option value="Electronics">Electronics</option>
        <option value="Clothing">furniture</option>
        <option value="Books">Books</option>
        
    </select>

    <button type="submit">Filter</button>

</form>

<h2>All Products</h2>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Product Name</th>
        <th>Category</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Description</th>
    </tr>

    @foreach($products as $product)
    <tr>
        <td>{{ $product->id }}</td>
        <td>{{ $product->product_name }}</td>
        <td>{{ $product->category }}</td>
        <td>{{ $product->price }}</td>
        <td>{{ $product->quantity }}</td>
        <td>{{ $product->description }}</td>
        <td>
    <a href="{{ route('edit', $product->id) }}">Edit</a>
<form action="{{ route('delete', $product->id) }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit">Delete</button>
    </form>
</td>
    </tr>
    @endforeach

</table>

</body>
</html>