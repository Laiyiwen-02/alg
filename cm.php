<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeMirror C++ Editor</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/codemirror@5.65.3/lib/codemirror.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/codemirror@5.65.3/theme/midnight.css">
    <style>
        .CodeMirror {
            height: 500px;
        }
    </style>
</head>
<body>
    <textarea id="code"></textarea>

    <script src="https://cdn.jsdelivr.net/npm/codemirror@5.65.3/lib/codemirror.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/codemirror@5.65.3/mode/clike/clike.js"></script>
    <script>
        var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
            mode: "text/x-c++src",
            theme: "midnight",
            matchBrackets: true,
            styleActiveLine: true,
            lineNumbers: true // 开启行号
        });
    </script>
</body>
</html>