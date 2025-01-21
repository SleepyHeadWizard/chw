<html>
    <head></head>
    <body>
    <H1>Sum of Digit</H1>
        <form method="post">
            <label for="number">Enter the number</label>
            <input type="number" name="number" placeholder="Enter a number">
            <button type="submit" >Sum</button>
        </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];

        function calculateSum($num) {
            $sum = 0;
            while ($num != 0) {
                $sum += $num % 10;
                $num = (int)($num / 10);
            }
            return $sum;
        }

        $sum = calculateSum($number);
        echo "<p>The sum of the digits of $number is <strong>$sum</strong></p>";
    }
    ?>
    </body>
</html>