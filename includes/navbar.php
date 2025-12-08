<?php
$current = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<nav>
    <div class="wordart">
        <h1>MadzTop</h1>
    </div>
    <div class="links">
        <a href="/" class="<?= $current === '/' ? 'active' : '' ?>">Home</a>
        <a href="/blog/" class="<?= str_starts_with($current, '/blog/') ? 'active' : '' ?>">Blog</a>
        <a href="https://home.madz.mov/stuff/">files</a>
        <a href="/projects/" class="<?= str_starts_with($current, '/projects/') ? 'active' : '' ?>">Projects</a>
        <a href="/services/" class="<?= str_starts_with($current, '/services/') ? 'active' : '' ?>">Services</a>
        <a href="/uses/" class="<?= str_starts_with($current, '/uses/') ? 'active' : '' ?>">Uses</a>
        <a href="https://wiki.madz.mov">Wiki</a>
    </div>
</nav>