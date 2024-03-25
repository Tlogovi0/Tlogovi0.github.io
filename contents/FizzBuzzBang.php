<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FizzBuzzBang</title>
</head>
<body>
    <h2>FizzBuzzBang</h2>
    <form id="fizzBuzzForm">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="John Doe" required><br><br>

        <label for="startNumber">Starting Number:</label>
        <input type="number" id="startNumber" name="startNumber" value="1" required><br><br>

        <label for="endNumber">Ending Number:</label>
        <input type="number" id="endNumber" name="endNumber" value="100" required><br><br>

        <label for="fizzWord">Fizz Word:</label>
        <input type="text" id="fizzWord" name="fizzWord" value="fizz" required><br><br>

        <label for="fizzNumber">Fizz Number:</label>
        <input type="number" id="fizzNumber" name="fizzNumber" value="3" required><br><br>

        <label for="buzzWord">Buzz Word:</label>
        <input type="text" id="buzzWord" name="buzzWord" value="buzz" required><br><br>

        <label for="buzzNumber">Buzz Number:</label>
        <input type="number" id="buzzNumber" name="buzzNumber" value="5" required><br><br>

        <label for="bangWord">Bang Word:</label>
        <input type="text" id="bangWord" name="bangWord" value="bang" required><br><br>

        <label for="bangNumber">Bang Number:</label>
        <input type="number" id="bangNumber" name="bangNumber" value="7" required><br><br>

        <button type="submit">Generate FizzBuzzBang</button>
    </form>

    <div id="results"></div>

    <script>
        document.getElementById("fizzBuzzForm").addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent default form submission
            // Get form values
            var name = document.getElementById("name").value;
            var startNumber = parseInt(document.getElementById("startNumber").value);
            var endNumber = parseInt(document.getElementById("endNumber").value);
            var fizzWord = document.getElementById("fizzWord").value;
            var fizzNumber = parseInt(document.getElementById("fizzNumber").value);
            var buzzWord = document.getElementById("buzzWord").value;
            var buzzNumber = parseInt(document.getElementById("buzzNumber").value);
            var bangWord = document.getElementById("bangWord").value;
            var bangNumber = parseInt(document.getElementById("bangNumber").value);

            // Clear previous results
            document.getElementById("results").innerHTML = "";

            // Generate FizzBuzzBang
            for (var i = startNumber; i <= endNumber; i++) {
                var result = "";
                if (i % fizzNumber === 0) result += fizzWord;
                if (i % buzzNumber === 0) result += buzzWord;
                if (i % bangNumber === 0) result += bangWord;
                if (result === "") result = i;
                document.getElementById("results").innerHTML += result + "<br>";
            }
        });

        // Pre-populate form with default values
        document.getElementById("fizzWord").value = "fizz";
        document.getElementById("fizzNumber").value = "3";
        document.getElementById("buzzWord").value = "buzz";
        document.getElementById("buzzNumber").value = "5";
        document.getElementById("bangWord").value = "bang";
        document.getElementById("bangNumber").value = "7";
    </script>
</body>
</html>
