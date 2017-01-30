<?php
$errors =[];
$missing = [];

if (isset($_POST['send'])){
    $expected = ['name','email','comments'];
    $required = ['name','comments'];
    $to = 'Jack Pincombe {jackpincombe@hotmail.co.uk}';
    $subject = 'Feedback and online form';
    $headers = [];
    $headers[] = 'From: webmaster@example.com';
    $headers[] = 'Content Type: text/plain; charset=utf-8';
    $authorised = null;
    require 'process_mail.php';
}
?>

<!doctype html>
<html lang ='en'>
<head>
    <meta charset="UTF-8">
    <title>Get and Post</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>

<body>
<h1>Contact Us</h1>
<?php if ($_POST && $suspect) :?>
<p>Sorry, your mail could not be sent</p>
<?php elseif ($errors || $missing) : ?>
<p class="warning">Please fix the item(s) indicated</p>
<?php endif; ?>
<form method="post" action="<?= $_SERVER['PHP_SELF']; ?>">
    <p>
        <label for="name">Name:
        <?php if($missing && in_array('name', $missing)): ?>
            <span class="warning">please enter your name</span>
        <?php endif; ?>
            </label>
        <input type="text" name="name" id="name"
            <?php
             if ($errors || $missing){
                echo 'value="' .htmlentities($name) . '"';
             }
            ?>
        >
    </p>

    <p>
        <label for="email">Email:
            <?php if($missing && in_array('email', $missing)): ?>
                <span class="warning">please enter your email</span>
            <?php endif; ?>
        </label>
        <input type="email" name="email" id="email"
        <?php
            if ($errors || $missing){
            echo 'value="' .htmlentities($email) .'"';
            }
        ?>
        >
    </p>

    <p>
        <label for="comments">Comments:
            <?php if($missing && in_array('comments', $missing)): ?>
                <span class="warning">please enter your comments</span>
            <?php endif; ?>
        </label>
        <br>
        <textarea name="comments" id="comments"><?php
            if ($errors || $missing){
            echo htmlentities($comments);
            }
            ?></textarea>
    </p>
    <p>
        <input type="submit" name="send" id="send" value="Send Comments">
    </p>
<pre>
    <?php
    if ($_GET)
    {
        echo 'content of the $_GET array: <br>';
        print_r($_GET);
    }
    elseif ($_POST)
    {
        echo 'The content of the $_POST array: <br>';
        print print_r($_POST);

    }

    ?>
</pre>

</form>
</body>