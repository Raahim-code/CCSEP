<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DOM XSS Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">DOM XSS Demo</a>
        </div>
    </nav>
    <div class="container mt-4">
        <h1 class="mb-4">Demonstration of DOM XSS</h1>
        
        <div class="mb-3">
            <label for="userInput" class="form-label">Enter a Message:</label>
            <input id="userInput" type="text" class="form-control" onkeyup="showMessage()">
        </div>
        
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Output:</h5>
                <p id="output" class="card-text"></p>
            </div>
        </div>

        <h2 class="mt-4">Try It Out:</h2>
        <p>Enter <code>&lt;img src=x onerror="alert('XSS!')"&gt;</code> to see the XSS in action.</p>

        <script>
            function showMessage() {
                var userInput = document.getElementById('userInput').value;
                // Vulnerable line for demonstration
                document.getElementById('output').innerHTML = userInput; // This is where XSS can occur
            }
        </script>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>