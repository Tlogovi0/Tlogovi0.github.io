  <h2>FizzBuzzBang</h2>

  <?php
    // Initialize variables with default values
    $name = "Tete";
    $start_num = "";
    $end_num = "";
    $fizz_word = "fizz";
    $fizz_num = "3";
    $buzz_word = "buzz";
    $buzz_num = "5";
    $bang_word = "bang";
    $bang_num = "7";

    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Collect user inputs
        $name = $_POST["name"];
        $start_num = $_POST["start_num"];
        $end_num = $_POST["end_num"];
        $fizz_word = $_POST["fizz_word"];
        $fizz_num = $_POST["fizz_num"];
        $buzz_word = $_POST["buzz_word"];
        $buzz_num = $_POST["buzz_num"];
        $bang_word = $_POST["bang_word"];
        $bang_num = $_POST["bang_num"];

        // Generate greeting
        echo "<h2>Hello, $name!</h2>";

        // Generate FizzBuzzBang results
        for ($i = $start_num; $i <= $end_num; $i++) {
            if ($i % $fizz_num == 0 && $i % $buzz_num == 0 && $i % $bang_num == 0) {
                echo "$bang_word";
            } elseif ($i % $fizz_num == 0 && $i % $buzz_num == 0) {
                echo "$fizz_word$buzz_word";
            } elseif ($i % $fizz_num == 0 && $i % $bang_num == 0) {
                echo "$fizz_word$bang_word";
            } elseif ($i % $buzz_num == 0 && $i % $bang_num == 0) {
                echo "$buzz_word$bang_word";
            } elseif ($i % $fizz_num == 0) {
                echo "$fizz_word";
            } elseif ($i % $buzz_num == 0) {
                echo "$buzz_word";
            } elseif ($i % $bang_num == 0) {
                echo "$bang_word";
            } else {
                echo "$i";
            }
            echo "<br>";
        }
    }
    ?>

    <h2>FizzBuzzBang Form</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Name: <input type="text" name="name" value="<?php echo $name; ?>"><br><br>
        Starting Number: <input type="number" name="start_num" value="<?php echo $start_num; ?>"><br><br>
        Ending Number: <input type="number" name="end_num" value="<?php echo $end_num; ?>"><br><br>
        Word for Fizz: <input type="text" name="fizz_word" value="<?php echo $fizz_word; ?>"><br><br>
        Number for Fizz: <input type="number" name="fizz_num" value="<?php echo $fizz_num; ?>"><br><br>
        Word for Buzz: <input type="text" name="buzz_word" value="<?php echo $buzz_word; ?>"><br><br>
        Number for Buzz: <input type="number" name="buzz_num" value="<?php echo $buzz_num; ?>"><br><br>
        Word for Bang: <input type="text" name="bang_word" value="<?php echo $bang_word; ?>"><br><br>
        Number for Bang: <input type="number" name="bang_num" value="<?php echo $bang_num; ?>"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
