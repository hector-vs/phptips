<?php

require __DIR__."/vendor/autoload.php";

use CoffeeCode\Paginato\Paginator;
use Source\Models\Post;

$post = new Post();
$page = filter_input(INPUT_GET, "page", FILTER_SANITIZE_STRIPPED);
$paginator = new Paginator();