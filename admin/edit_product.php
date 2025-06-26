
<?php
include '../includes/db.php';
session_start();

if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}

if (!isset($_GET['id'])) {
    echo "Invalid product ID.";
    exit();
}

$product_id = intval($_GET['id']);
$stmt = $conn->prepare("SELECT * FROM products WHERE id = ?");
$stmt->execute([$product_id]);
$product = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$product) {
    echo "Product not found.";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $price = floatval($_POST['price']);
    $description = $_POST['description'];

    $stmt = $conn->prepare("UPDATE products SET name = ?, price = ?, description = ? WHERE id = ?");
    $stmt->execute([$name, $price, $description, $product_id]);

    header("Location: manage_products.php?message=Product+updated+successfully");
    exit();
}
?>

<h2>Edit Product</h2>
<form method="post">
    <label>Name:</label><br>
    <input type="text" name="name" value="<?= htmlspecialchars($product['name']); ?>" required><br><br>

    <label>Price:</label><br>
    <input type="text" name="price" value="<?= htmlspecialchars($product['price']); ?>" required><br><br>

    <label>Description:</label><br>
    <textarea name="description" required><?= htmlspecialchars($product['description']); ?></textarea><br><br>

    <input type="submit" value="Update Product">
</form>
