<?php
// delete_product.php: delete a product by ID
require 'db_connect.php';

$id = $_GET['id'] ?? '';
if (!empty($id)) {
    $stmt = $conn->prepare("DELETE FROM products WHERE id=?");
    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
        echo "Product deleted successfully.";
    } else {
        echo "Error deleting product: " . $conn->error;
    }
    $stmt->close();
} else {
    echo "No product ID specified.";
}
?>
