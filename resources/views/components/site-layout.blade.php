<html>
<head>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
<nav class="bg-pink-200 p-4">
    <a href="/">Home</a>
    <a href="/contact">Contact</a>
</nav>
<main>
    {{$slot}}
</main>
<footer class="bg-pink-500 text-white p-4 mt-4">
    <hr>
    <p>Copyright 2026 - EhB Demo</p>
</footer>
</body>
</html>
