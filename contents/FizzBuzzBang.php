
<?php
    <h2>FizzBuzzBang</h2>

   <form method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : 'Ferdinand'; ?>"><br>
        <label for="start">Starting Number:</label><br>
        <input type="number" id="start" name="start" value="<?php echo isset($_POST['start']) ? htmlspecialchars($_POST['start']) : ''; ?>"><br>
        <label for="end">Ending Number:</label><br>
        <input type="number" id="end" name="end" value="<?php echo isset($_POST['end']) ? htmlspecialchars($_POST['end']) : ''; ?>"><br>
        <label for="fizzWord">Fizz Word:</label><br>
        <input type="text" id="fizzWord" name="fizzWord" value="<?php echo isset($_POST['fizzWord']) ? htmlspecialchars($_POST['fizzWord']) : 'fizz'; ?>"><br>
        <label for="fizzNum">Fizz Number:</label><br>
        <input type="number" id="fizzNum" name="fizzNum" value="<?php echo isset($_POST['fizzNum']) ? htmlspecialchars($_POST['fizzNum']) : '3'; ?>"><br>
        <label for="buzzWord">Buzz Word:</label><br>
        <input type="text" id="buzzWord" name="buzzWord" value="<?php echo isset($_POST['buzzWord']) ? htmlspecialchars($_POST['buzzWord']) : 'buzz'; ?>"><br>
        <label for="buzzNum">Buzz Number:</label><br>
        <input type="number" id="buzzNum" name="buzzNum" value="<?php echo isset($_POST['buzzNum']) ? htmlspecialchars($_POST['buzzNum']) : '5'; ?>"><br>
        <label for="bangWord">Bang Word:</label><br>
        <input type="text" id="bangWord" name="bangWord" value="<?php echo isset($_POST['bangWord']) ? htmlspecialchars($_POST['bangWord']) : 'bang'; ?>"><br>
        <label for="bangNum">Bang Number:</label><br>
        <input type="number" id="bangNum" name="bangNum" value="<?php echo isset($_POST['bangNum']) ? htmlspecialchars($_POST['bangNum']) : '7'; ?>"><br><br>
        <input type="submit" name="submit" value="Generate FizzBuzzBang">
    </form>

    <?php
    if(isset($_POST['submit'])){
        $name = isset($_POST['name']) ? $_POST['name'] : 'Ferdinand';
        $start = isset($_POST['start']) ? intval($_POST['start']) : 1;
        $end = isset($_POST['end']) ? intval($_POST['end']) : 100;
        $fizzWord = isset($_POST['fizzWord']) ? $_POST['fizzWord'] : 'fizz';
        $fizzNum = isset($_POST['fizzNum']) ? intval($_POST['fizzNum']) : 3;
        $buzzWord = isset($_POST['buzzWord']) ? $_POST['buzzWord'] : 'buzz';
        $buzzNum = isset($_POST['buzzNum']) ? intval($_POST['buzzNum']) : 5;
        $bangWord = isset($_POST['bangWord']) ? $_POST['bangWord'] : 'bang';
        $bangNum = isset($_POST['bangNum']) ? intval($_POST['bangNum']) : 7;

        echo "<h2>Hello, $name!</h2>";
        echo "<p>Here is your FizzBuzzBang:</p>";
        for ($i = $start; $i <= $end; $i++) {
            $output = '';
            if ($i % $fizzNum == 0) $output .= $fizzWord;
            if ($i % $buzzNum == 0) $output .= $buzzWord;
            if ($i % $bangNum == 0) $output .= $bangWord;
            echo $output ? "<p>$output</p>" : "<p>$i</p>";
        }
    }
    ?>
