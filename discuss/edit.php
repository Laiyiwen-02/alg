<?php session_start();?>
<!DOCTYPE html>
<html>
  <head>
    <title> markdown-editor </title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            overflow: auto;
        }
    </style>
    <?php include "../menu.php";?>
    <script src="https://cdn.jsdelivr.net/gh/laiyiwen-02/cdn@master/prism/prism.js"></script>
    <link rel="stylesheet" href="https://use.sevencdn.com/npm/katex@0.16.11/dist/katex.min.css">
  </head>
  <body>
    <div class = "layui-panel" style = "padding: 2%; margin: 2%;height:80%;">
        <form class = "layui-form" action = "post/action.php" method = "post" style = "height: 100%;">
            <div style = "height: 10%;">
                <input type = "text" name = "title" placeholder = "标题" class = "layui-input" required lay-verify = "required" style = "height:100%; width: 100%; ">
            </div>
            <div style = "height: 80%;" class = "layui-row">
                <div class = "layui-col-md6" style = "height: 100%;">
                    <div id="editor" style = "width: 100%; height: 100%; max-height: 100%;"></div>
                    <textarea id = "t" name = "t" hidden></textarea>
                </div>
                <div class = "layui-col-md6" style = "height: 100%; overflow:auto;">
                    <div id = "show" class = "markdown-body"></div>
                    <textarea id = "h" name = "h" hidden></textarea>
                </div>
            </div>
            <div style = "height: 10%; width:100%;">
                <button type="submit" class="layui-btn layui-btn-normal layui-btn-radius" style = "float: right;">
                    提交
                </button>
            </div>
        </form>
    </div>
    <script src="https://use.sevencdn.com/npm/marked/marked.min.js"></script>
    <script src="https://use.sevencdn.com/npm/katex@0.16.11/dist/katex.min.js"></script>
    <script src="https://use.sevencdn.com/npm/katex@0.16.11/dist/contrib/auto-render.min.js" onload = 'renderMathInElement(document.body, {delimiters: [{left: "$$", right: "$$", display: true}, {left: "$", right: "$", display: false} ], macros: {"\\geq": "\\geqslant", "\\leq": "\\leqslant" } }); '></script>
    <script src="https://s4.zstatic.net/ajax/libs/monaco-editor/0.52.2/min/vs/loader.min.js"></script>
    <script>
        require.config({
            paths: {
                "vs": "https://s4.zstatic.net/ajax/libs/monaco-editor/0.52.2/min/vs/"
            }
        });

        require(["vs/editor/editor.main"], function () {
            var editor = monaco.editor.create(document.getElementById("editor"), {
                value: "",
                language: "markdown"
            });
            // monaco.editor.setTheme("vs");
            editor.onDidChangeModelContent((e) => {
                var t = document.getElementById("t");
                function trans(md) {
                    md = md.replace(/\\/g, '\\\\');
                    md = md.replace(/\\\\\&/g, '\\\&');
                    return md;
                }
                var md = editor.getValue(); t.value = md; md = trans(md);
                md = marked.parse(md); document.getElementById("show").innerHTML = md;
                renderMathInElement(document.getElementById("show"), {
                    delimiters: [
                        {left: "$$", right: "$$", display: true},
                        {left: "$", right: "$", display: false}
                    ],
                    macros: {
                        "\\geq": "\\geqslant",
                        "\\leq": "\\leqslant"
                    }
                }); 
                Prism.highlightAll(); document.getElementById("h").value = md;
            });
        });
    </script>
    <script src = "https://s4.zstatic.net/ajax/libs/layui/2.11.1/layui.js"></script>
  </body>
</html>