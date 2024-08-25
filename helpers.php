<?php

declare(strict_types=1);


function dd($args)
{
    echo "<pre>";
    print_r($args);
    echo "</pre>";
    die();
}



function basePath(string $path): string
{
    return __DIR__.$path;
}

function loadView(string $path, array|null $args = null): void
{
    $filePath = basePath('/public/pages/'.$path.'.php');
    if (!file_exists($filePath)) {
        echo "Required view not found: $filePath";
        return;
    }

    if (is_array($args)) {
        extract($args);
    }
    require $filePath;
}

function loadPartials(string $path, array|null $args = null): void
{
    if (is_array($args)) {
        extract($args);
    }
    require basePath('/public/partials/'.$path.'.php');  // to'g'ri path ni ko'rsating
}


function loadController(string $path, array|null $args = null): void
{
    if (is_array($args)) {
        extract($args);
    }
    require basePath('/controllers/'.$path.'.php');
}