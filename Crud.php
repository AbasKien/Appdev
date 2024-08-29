<?php
$servername = "localhost";
$username = "root";
$password = "";  
$dbname = "appdev";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (isset($_POST['Create'])) {
    $Name = $_POST['Name'];
    $Description = $_POST['Description'];
    $Price = $_POST['Price'];
    $Quantity = $_POST['Quantity'];

    $sql = "INSERT INTO products (Name, Description, Price, Quantity) VALUES ('$Name', '$Description', '$Price', '$Quantity')";
    $conn->query($sql);
}
//taga delete
if (isset($_GET['delete'])) {
    $Id = $_GET['delete'];
    $sql = "DELETE FROM products WHERE id=$Id";
    $conn->query($sql);
}

// taga update
if (isset($_POST['edit'])) {
    $Id = $_POST['Id'];
    $Name = $_POST['Name'];
    $Description = $_POST['Description'];
    $Price = $_POST['Price'];
    $Quantity = $_POST['Quantity'];

    $sql = "UPDATE products SET Name='$Name', Description='$Description', Price='$Price', Quantity='$Quantity' WHERE Id=$Id";
    $conn->query($sql);
}

// taga retrieve
$result = $conn->query("SELECT * FROM products");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD</title>
</head>
<body>
<style>
table{
    border: solid;
    width: 10%;
}
</style>
    <h1>Pduct Management</h1>
    <form action="Crud.php" method="POST">
        <input type="text" name="Name" placeholder="Name">
        <input type="text" name="Description" placeholder="Description">
        <input type="text" name="Price" placeholder="Price">
        <input type="text" name="Quantity" placeholder="Quantity">
        <button type="submit" name="Create">Create</button>
    </form>

    <table border="1">

        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Actions</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['Id']; ?></td>
            <td><?php echo $row['Name']; ?></td>
            <td><?php echo $row['Description']; ?></td>
            <td><?php echo $row['Price']; ?></td>
            <td><?php echo $row['Quantity']; ?></td>
            <td><?php echo $row['Create_at']; ?></td>
            <td><?php echo $row['Update_at']; ?></td>
            <td>
                <a href="Crud.php?delete=<?php echo $row['Id']; ?>">Delete</a>
                <form action="Crud.php" method="POST" style="display:inline;">
                    <input type="hidden" name="Id" value="<?php echo $row['Id']; ?>">
                    <input type="text" name="Name" value="<?php echo $row['Name']; ?>">
                    <input type="text" name="Description" value="<?php echo $row['Description']; ?>">
                    <input type="text" name="Price" value="<?php echo $row['Price']; ?>">
                    <input type="text" name="Quantity" value="<?php echo $row['Quantity']; ?>">
                    <button type="submit" name="edit">Edit</button>
                </form>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>

<?php
$conn->close();
?>
