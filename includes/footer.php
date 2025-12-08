<?php
$current = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<footer>
    <span>(ɔ) MadzNet 2025</span>
    <br>
    <span id="randomfoot"></span>
</footer>


<script>
    const randomText = [
        "Wake up f1lthy",
        "I'm cooler than a cooler, Big shouts out to my jeweler",
        "I can't spell sober",
        "Vodka is the best uma, fight me",
        "App to destroy all opps",
        "I named this one jpeg"
    ];

    function randomfooter() {
        const randomIndex = Math.floor(Math.random() * randomText.length);
        const selectedText = randomText[randomIndex];
        const targetElement = document.getElementById('randomfoot');
        targetElement.innerText = selectedText;
    }

    // Call the function to replace the text when the page loads
    randomfooter();
</script>