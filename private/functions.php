<?php
function url_for($script_path): string
{
    // add the leading '/' if not present
    if ($script_path[0] != '/') {
        $script_path = "/" . $script_path;
    }
    return WWW_ROOT . $script_path;
}

function encode(string $url = ""): string
{
    return urlencode($url);
}

function cleanInput(string $string = ""): string
{
    return htmlspecialchars($string);
}

function redirect_to(string $location): void
{
    header("Location: " . $location);
    exit;
}

function is_post_request(): bool
{
    return $_SERVER['REQUEST_METHOD'] == 'POST';
}

function is_get_request(): bool
{
    return $_SERVER['REQUEST_METHOD'] == 'GET';
}