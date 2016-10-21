<?php
/**
 * Created by PhpStorm.
 * User: jackpincombe
 * Date: 21/10/2016
 * Time: 15:50
 */

$title = "The hithhikers guide to the galaxy";
$fullName = "Jack Pincombe";
$brain_size = "the size of a planet";
$author = "Douglas Adams";
$heredoc = <<< EOC

In $title by $author, $fullName the "paranoid android" complains that he's asked to do 
menial tasks, even though he's got "a brain $brain_size."

EOC;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>

<h1>Using herdoc syntax</h1>
<p><?php echo $heredoc; ?></p>

</body>
</html>