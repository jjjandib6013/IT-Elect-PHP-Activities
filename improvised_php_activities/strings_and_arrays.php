<?php
    $sentence = $uppercase = $lowercase = $firstLetterCapitalized = $eachWordCapitalized = $trimmedSpaces = "";
        
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['first'])) {
            $sentence = $_POST['first'];

            $uppercase = upperCaseString($sentence);
            $lowercase = lowerCaseString($sentence);
            $firstLetterCapitalized = firstLetterCapital($sentence);
            $eachWordCapitalized = eachWordCapital($sentence);
            $trimmedSpaces = trimmedSpaces($sentence);
        }
    }

    function upperCaseString($sentence) {
        return strtoupper($sentence);
    }

    function lowerCaseString($sentence) {
        return strtolower($sentence);
    }

    function firstLetterCapital($sentence) {
        return ucfirst($sentence);
    }

    function eachWordCapital($sentence) {
        return ucwords($sentence);
    }

    function trimmedSpaces($sentence) {
        return trim($sentence);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale: 1.0">
    <title>String and Arrays</title>
</head>
<body>
    <form method="POST">
        <br>

        <p style="text-align: center;">
            Enter a sentence: &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" id="first" name="first" value="<?php echo htmlspecialchars($sentence); ?>" required style="border: none; outline: none; border-radius: 20px; padding: 8px 15px; background-color: black; color: white;">
        </p>

        <br>

        <p style="text-align: center;">
            <input type="submit" value="Convert">
        </p>
        
        <br>

        <p style="text-align: center;">
            Upper Case: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="uppercase" 
                   <?php 
                       if (isset($uppercase)) {
                           echo 'value="' . htmlspecialchars($uppercase) . '"';
                       }
                   ?> 
                   required readonly style="border: none; outline: none; border-radius: 20px; padding: 8px 15px; background-color: black; color: white;">
        </p>

        <p style="text-align: center;">
            Lower Case: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="lowercase" 
                   <?php 
                       if (isset($lowercase)) {
                           echo 'value="' . htmlspecialchars($lowercase) . '"';
                       }
                   ?> 
                   required readonly style="border: none; outline: none; border-radius: 20px; padding: 8px 15px; background-color: black; color: white;">
        </p>

        <p style="text-align: center;">
            First Letter Capital: &nbsp;
            <input type="text" name="firstLetterCapitalized" 
                   <?php 
                       if (isset($firstLetterCapitalized)) {
                           echo 'value="' . htmlspecialchars($firstLetterCapitalized) . '"';
                       }
                   ?> 
                   required readonly style="border: none; outline: none; border-radius: 20px; padding: 8px 15px; background-color: black; color: white;">
        </p>

        <p style="text-align: center;">
            Each Word Capital: &nbsp;
            <input type="text" name="eachWordCapitalized" 
                   <?php 
                       if (isset($eachWordCapitalized)) {
                           echo 'value="' . htmlspecialchars($eachWordCapitalized) . '"';
                       }
                   ?> 
                   required readonly style="border: none; outline: none; border-radius: 20px; padding: 8px 15px; background-color: black; color: white;">
        </p>

        <p style="text-align: center;">
            Trimmed Spaces: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="trimmedSpaces" 
                   <?php 
                       if (isset($trimmedSpaces)) {
                           echo 'value="' . htmlspecialchars($trimmedSpaces) . '"';
                       }
                   ?> 
                   required readonly style="border: none; outline: none; border-radius: 20px; padding: 8px 15px; background-color: black; color: white;">
        </p>

    </form>
</body>
</html>