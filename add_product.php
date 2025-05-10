<?php
//  form to add a new product
require 'db_connect.php';   

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 1. Gather form data
    $name        = trim($_POST['name']);
    $description = trim($_POST['description']);
    $price       = $_POST['price'];
    $stock       = $_POST['stock'];
    $category_id = $_POST['category_id'];
    $is_active   = isset($_POST['is_active']) ? 1 : 0;

    //  validation
    if (empty($name) || empty($price) || empty($category_id)) {
        echo "Name, price, and category are required.";
    } else {
        $stmt = $conn->prepare(
            "INSERT INTO products (name, description, price, stock_qty, is_active, category_id) 
             VALUES (?, ?, ?, ?, ?, ?)"
        );
        $stmt->bind_param("ssdiii", $name, $description, $price, $stock, $is_active, $category_id);
        if ($stmt->execute()) {
            echo "Product added successfully.";
        } else {
            echo "Error adding product: " . $conn->error;
        }
        $stmt->close();
    }
}
?>
<!DOCTYPE html>
<html>
<head><title>Add Product</title></head>
<body>
<h1>Add New Product</h1>
<form method="post" action="add_product.php">
    <label>Name:       <input type="text" name="name" required></label><br>
    <label>Description:<textarea name="description"></textarea></label><br>
    <label>Price:      <input type="number" step="0.01" name="price" required></label><br>
    <label>Stock Qty:  <input type="number" name="stock" value="0" required></label><br>
    <label>Category ID:<input type="number" name="category_id" required></label><br>
    <input type="submit" value="Add Product">
</form>
</body>
</html>
