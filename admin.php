<!DOCTYPE html>
<html>
<head>
    <title>Upload New Module</title>
    <style>body { font-family: Arial; padding: 50px; text-align: center; }</style>
</head>
<body>
    <h2>Upload New PHP Module</h2>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="module_file" accept=".php" required>
        <button type="submit">Upload & Activate</button>
    </form>
    <br>
    <a href="index.php">Back to Website</a>
</body>
</html>