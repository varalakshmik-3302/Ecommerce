
<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: "Segoe UI", Arial, sans-serif;
            background: linear-gradient(135deg, #eef2f3, #8e9eab);
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            max-width: 900px;
            margin: 80px auto;
            background-color: #fff;
            padding: 40px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
            border-radius: 10px;
            text-align: center;
        }

        h2 {
            color: #333;
            font-size: 28px;
            margin-bottom: 30px;
            border-bottom: 2px solid #4CAF50;
            display: inline-block;
            padding-bottom: 10px;
        }

        nav {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
            margin-top: 30px;
        }

        nav a {
            text-decoration: none;
            padding: 14px 30px;
            background-color: #4CAF50;
            color: white;
            font-size: 17px;
            font-weight: bold;
            border-radius: 6px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        nav a:hover {
            background-color: #43a047;
            transform: translateY(-3px);
        }

        .logout {
            background-color: #f44336;
        }

        .logout:hover {
            background-color: #e53935;
        }

        footer {
            text-align: center;
            margin-top: 50px;
            font-size: 14px;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Admin Dashboard</h2>
        <nav>
            <a href="add_product.php">Add Product</a>
            <a href="manage_products.php">Manage Products</a>
            <a href="logout.php" class="logout">Logout</a>
        </nav>
    </div>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Admin Dashboard | Designed with ❤️</p>
    </footer>
</body>
</html>
