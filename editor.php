<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Monaco Editor from CDN example, with automatic resizing</title>
<style>
/* Flex column layout, with the editor taking up all available screen space */
html, body {
    height: 100%;
    margin: 0;
    overflow: auto;
}
/*
body {
    display: flex;
    flex-direction: column;
}

#editor {
    border: solid 1px gray;
} */
</style>
</head>
<body>
<h1>Monaco Editor, loaded via CDN</h1>

<div id="editor" style = "width:100%;height:20%;max-height:20%;overflow:auto;"></div>
<textarea id = "t"></textarea>
<script src="https://cdnjs.cloudflare.com/ajax/libs/monaco-editor/0.29.1/min/vs/loader.min.js"></script>
<script>
// Proxy Monaco Editor workers using a data URL (adapted from: https://github.com/microsoft/monaco-editor/blob/main/docs/integrate-amd-cross.md)
require.config({ paths: { "vs": "https://cdnjs.cloudflare.com/ajax/libs/monaco-editor/0.29.1/min/vs/" }});

require(["vs/editor/editor.main"], function () {
    // Create the editor with some sample JavaScript code
    var editor = monaco.editor.create(document.getElementById("editor"), {
        value: "",
        language: "cpp"
    });
    // monaco.editor.setTheme("vs");
    editor.onDidChangeModelContent((e) => {
        var t = document.getElementById("t");
        t.value = editor.getValue();
    });
    // const editorElement = document.getElementById("editor");
    // window.addEventListener("resize", () => editor.layout({
    //     width: editorElement.offsetWidth,
    //     height: editorElement.offsetHeight
    // }));
});
</script>
</body>
</html>