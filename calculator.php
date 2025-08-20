<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>
    <br>
    <form method="POST">
        <p style="text-align: center;">First Value: &nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" id="first" name="first" required></p>
        <br>
        <p style="text-align: center;">Second Value: &nbsp;
        <input type="text" id="second" name="second" required></p>
        <br>
        
        <p style="text-align: center;">
            <input type="radio" name="operation" value="add" id="add"> Add
            <input type="radio" name="operation" value="subtract" id="subtract"> Subtract
            <input type="radio" name="operation" value="times" id="times"> Multiply
            <input type="radio" name="operation" value="divide" id="divide"> Divide
        </p>

        <p style="text-align: center;">
            <input type="submit" value="Calculate">
        </p>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['first']) && isset($_POST['second']) && isset($_POST['operation'])) {
            $first_value = $_POST['first'];
            $second_value = $_POST['second'];
            $operation = $_POST['operation'];

            if (is_numeric($first_value) && is_numeric($second_value)) {
                $first_value = (float)$first_value;
                $second_value = (float)$second_value;

                switch ($operation) {
                    case 'add':
                        $result = addValues($first_value, $second_value);
                        break;
                    case 'subtract':
                        $result = subtractValues($first_value, $second_value);
                        break;
                    case 'times':
                        $result = multiplyValues($first_value, $second_value);
                        break;
                    case 'divide':
                        if ($second_value == 0) {
                            $result = "Error: Division by zero!";
                        } else {
                            $result = divideValues($first_value, $second_value);
                        }
                        break;
                    default:
                        $result = "Please select an operation.";
                }
                echo "<p style='text-align: center;'>The answer is: " . $result . "</p>";
            } else {
                echo "<p style='text-align: center;'>Please enter valid numeric values for both inputs.</p>";
            }
        } else {
            echo "<p style='text-align: center;'>Please fill in all fields.</p>";
        }
    }

    function addValues($first, $second) {
        return $first + $second;
    }

    function subtractValues($first, $second) {
        return $first - $second;
    }

    function multiplyValues($first, $second) {
        return $first * $second;
    }

    function divideValues($first, $second) {
        return $first / $second;
    }
    ?>
</body>
</html>
