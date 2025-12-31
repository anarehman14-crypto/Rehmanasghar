<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['module_file'])) {
    $target_dir = "modules/";
    
    // Agar folder nahi hai to bana do
    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    $file_name = basename($_FILES["module_file"]["name"]);
    $target_file = $target_dir . $file_name;

    if (move_uploaded_file($_FILES["module_file"]["tmp_name"], $target_file)) {
        echo "Module " . htmlspecialchars($file_name) . " has been uploaded.";
        echo "<br><a href='index.php'>Go to Home</a>";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>