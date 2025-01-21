</head>
    <body style="text-align: center;  ">
        <H1>Factorial</H1>
        <form method="post">
            <label for="number">Enter the number</label>
            <input type="number" name="number" placeholder="Enter a number">
            <button type="submit" >calculate factorial</button>
        </form>


    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];

        function calculateFactorial($num) {
            if ($num == 0 || $num == 1) {
                return 1;
            } else {
                return $num * calculateFactorial($num - 1);
            }
        }

        if ($number < 0) {
            echo "<p style='color:red;'>Factorial is not defined for negative numbers.</p>";
        } else {
            $factorial = calculateFactorial($number);
            echo "<p>The factorial of $number is <strong>$factorial</strong></p>";
        }
    }
    ?>

    </body>
</html>