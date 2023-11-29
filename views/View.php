<?php

class View {
    public function render($pageContent) {
        // Now, you can use $pageTitle and $pageContent in your view HTML
        echo "<!DOCTYPE html>
                <html lang='en'>
                <head>
                    <meta charset='UTF-8'>
                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                    <title>MVC Example</title>
                </head>
                <body>
                    <h1>Hi</h1>
                    <div>I'm in the $pageContent</div>
                </body>
                </html>";
    }
}


