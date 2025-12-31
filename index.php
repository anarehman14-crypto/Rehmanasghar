<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dynamic Module Website</title>
    <style>
        body { font-family: Arial; margin: 0; display: flex; }
        sidebar { width: 250px; background: #333; color: #fff; height: 100vh; padding: 20px; }
        content { flex: 1; padding: 20px; }
        a { color: white; text-decoration: none; display: block; margin: 10px 0; }
    </style>
</head>
<body>

<sidebar>
    <h2>Menu</h2>
    <a href="index.php">Home</a>
    <hr>
    <h4>Modules</h4>
    <?php
    $files = scandir('modules');
    foreach($files as $file) {
        if($file !== '.' && $file !== '..') {
            $name = pathinfo($file, PATHINFO_FILENAME);
            echo "<a href='index.php?page=$name'>".ucfirst($name)."</a>";
        }
    }
    ?>
    <hr>
    <a href="admin.php" style="color: yellow;">+ Add Module</a>
</sidebar>

<content>
    <?php
    if(isset($_GET['page'])) {
        $page = $_GET['page'];
        $path = "modules/$page.php";
        if(file_exists($path)) {
            include($path);
        } else {
            echo "<h1>404</h1><p>Module not found.</p>";
        }
    } else {
        echo "<h1>Welcome</h1><p>Select a module from the sidebar or add a new one.</p>";
    }
    ?>
</content>

</body>
</html>