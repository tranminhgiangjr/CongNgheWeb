<?php
$file_path = 'Quiz.txt';
if (file_exists($file_path)) {
    $file_content = file_get_contents($file_path);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
</head>
<body>
    <pre><?php echo htmlspecialchars($file_content); ?></pre>
</body>
</html>