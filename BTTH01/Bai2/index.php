<?php
require 'data.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
</head>
<body>
    <form action="xuly.php" method="post">
        <?php $i = 1;
        foreach ($quizs as $quiz) { ?>
            <label>Câu hỏi <?php echo $i ?>: <?php echo $quiz['cauhoi']?></label>
            <br>
            <input type="radio" name="<?php echo $quiz['cauhoi']?>" value="A"> <?php echo $quiz['A']?>
            <br>
            <input type="radio" name="<?php echo $quiz['cauhoi']?>" value="B"> <?php echo $quiz['B']?>
            <br>
            <input type="radio" name="<?php echo $quiz['cauhoi']?>" value="C"> <?php echo $quiz['C']?>
            <br>
            <input type="radio" name="<?php echo $quiz['cauhoi']?>" value="D"> <?php echo $quiz['D']?>
            <p>Đáp án: <?php echo $quiz['dapan']?></p>
            <br>
        <?php $i+=1; } ?>
        <input type="submit" value="Submit">
    </form>
</body>
</html>