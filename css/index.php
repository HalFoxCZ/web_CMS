<?php
// Get all files in the current directory (excluding hidden files)
$files = array_diff(scandir(__DIR__), array('.', '..', 'index.php'));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            text-align: center;
            background-color: #f4f4f4;
        }
        h2 {
            color: #333;
        }
        .file-list {
            display: flex;
            flex-direction: column;
            align-items: center;
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }
        .file-item {
            padding: 10px;
            width: 100%;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        .file-item a {
            text-decoration: none;
            color: #007BFF;
            font-weight: bold;
        }
        .file-item a:hover {
            color: #0056b3;
        }
        .file-item:last-child {
            border-bottom: none;
        }
    </style>
</head>
<body>

<h2>Available Files</h2>
<div class="file-list">
    <?php if (!empty($files)): ?>
        <?php foreach ($files as $file): ?>
            <div class="file-item">
                <a href="<?= htmlspecialchars($file) ?>" target="_blank"><?= htmlspecialchars($file) ?></a>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No files found.</p>
    <?php endif; ?>
</div>

</body>
</html>
