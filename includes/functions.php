<?php


function debugging($variable): string
{
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

// Escape / Sanitize HTML
function s($html): string
{
    $s = htmlspecialchars($html);
    return $s;
}

// check authentication status
function isAuth(): void
{
    if (!isset($_SESSION['isLoggedIn'])) {
        header('Location: /');
    }
}

function isActiveLink($path): bool
{
    return str_contains($_SERVER['PATH_INFO'], $path) ? true : false;
}
