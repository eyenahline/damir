<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JavaScript Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        #calculator {
            width: 300px;
            background-color: #f4f4f4;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-gap: 5px;
        }

        input {
            grid-column: span 4;
            width: calc(100% - 20px);
            margin-bottom: 10px;
            padding: 10px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div>
        <a href="index.php">
        <button type="button">Home</button>
        </a>
    </div>
    <div id="calculator">
        <input type="text" id="display" readonly>
        <button onclick="appendCharacter('.')">.</button>
        <button onclick="clearDisplay()">C</button>
        <button onclick="appendCharacter('/')">/</button>
        <button onclick="appendCharacter('*')">*</button>
        <button onclick="appendCharacter('7')">7</button>
        <button onclick="appendCharacter('8')">8</button>
        <button onclick="appendCharacter('9')">9</button>
        <button onclick="appendCharacter('-')">-</button>
        <button onclick="appendCharacter('4')">4</button>
        <button onclick="appendCharacter('5')">5</button>
        <button onclick="appendCharacter('6')">6</button>
        <button onclick="appendCharacter('+')">+</button>
        <button onclick="appendCharacter('1')">1</button>
        <button onclick="appendCharacter('2')">2</button>
        <button onclick="appendCharacter('3')">3</button>
        <button onclick="calculateResult()">=</button>
        <button onclick="appendCharacter('0')">0</button>

    </div>

    <script>
        function appendCharacter(character) {
            document.getElementById('display').value += character;
        }

        function clearDisplay() {
            document.getElementById('display').value = '';
        }

        function calculateResult() {
            const expression = document.getElementById('display').value;
            const result = eval(expression);
            document.getElementById('display').value = result;
        }
    </script>

</body>
</html>
