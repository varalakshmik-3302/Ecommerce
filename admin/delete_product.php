
<?php
include '../includes/db.php';
session_start();

if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}

if (isset($_GET['id'])) {
    $productId = intval($_GET['id']);

    $stmt = $conn->prepare("DELETE FROM products WHERE id = ?");
    $stmt->execute([$productId]);

    if ($stmt) {
        header("Location: manage_products.php?message=Product+deleted+successfully");
        exit();
    } else {
        echo "Error deleting product.";
    }
} else {
    echo "Invalid request.";
}
?>
