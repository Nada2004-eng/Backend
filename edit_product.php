<?php
 edit an existing product
require 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 1. Process update
    $id          = $_POST['id'];
    $name        = trim($_POST['name']);
    $description = trim($_POST['description']);
    $price       = $_POST['price'];
    $stock       = $_POST['stock'];
    $category_id = $_POST['category_id'];
    $is_active   = isset($_POST['is_active']) ? 1 : 0;

    if (empty($name) || empty($price) || empty($category_id) || empty($id)) {
        echo "Name, price, category, and ID are required.";
    } else {
        // Use prepared UPDATE with WHERE clause
        $stmt = $conn->prepare(
            "UPDATE products SET name=?, description=?, price=?, stock_qty=?, is_active=?, category_id=? 
             WHERE id=?"
        );
        $stmt->bind_param("ssdiiii", 
            $name, $description, $price, $stock, $is_active, $category_id, $id
        );
        if ($stmt->execute()) {
            echo "Product updated successfully.";
        } else {
            echo "Error updating product: " . $conn->error;
        }
        $stmt->close();
    }
} else {
    // Show form with existing data
    $id = $_GET['id'] ?? '';
    if (!empty($id)) {
        $stmt = $conn->prepare(
            "SELECT id, name, description, price, stock_qty, is_active, category_id 
             FROM products WHERE id=?"
        );
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->bind_result($id, $name, $description, $price, $stock, $is_active, $category_id);
        $stmt->fetch();
        $stmt->close();
    }
}
?>
<!DOCTYPE html>
<html><head><title>Edit Product</title></head><body>
<h1>Edit Product</h1>
<form method="post" action="edit_product.php">
    <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">
    <label>Name:       <input type="text" name="name" 
                    value="<?php echo htmlspecialchars($name); ?>" required></label><br>
    <label>Description:<textarea name="description"><?php echo htmlspecialchars($description); ?></textarea></label><br>
    <label>Price:      <input type="number" step="0.01" name="price" 
                    value="<?php echo htmlspecialchars($price); ?>" required></label><br>
    <label>Stock Qty:  <input type="number" name="stock" 
                    value="<?php echo htmlspecialchars($stock); ?>" required></label><br>
    <label>Category ID:<input type="number" name="category_id" 
                    value="<?php echo htmlspecialchars($category_id); ?>" required></label><br>
    <label>Active:     <input type="checkbox" name="is_active" 
                    <?php if ($is_active) echo 'checked'; ?>></label><br>
    <input type="submit" value="Update Product">
</form>
</body></html>
