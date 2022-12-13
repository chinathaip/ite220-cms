<?php

class HTML
{
    public $lang = "en";
    public $charset = "utf-8";
    public $title = "A Basic HTML5 Template";
    public $viewport = "width=device-width, initial-scale=1";
    public $description = "A simple HTML5 Template for new projects";
    public $author = "SitePoint";

    function emitHeader()
    {
        echo <<<EOL
        <!doctype html>
        <html lang="$this->lang"
        <head>
        <meta charset= "$this->charset">
        <meta name= "viewport" content= "$this->viewport">
        <title>$this->title </title>
        <meta name= "description" content= "$this->description">
        <meta name= "author" content = "$this->author">
        <body>
        EOL;
    }

    function emitFooter()
    {
        echo <<<EOL
        </head>
        </body>
        </html>
        EOL;
    }
}