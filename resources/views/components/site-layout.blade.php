<html>
<head>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <nav class="bg-pink-200 p-4">
        <div class="max-w-6xl mx-auto">
            <a class="mx-4 hover:font-bold" href="/">Home</a>
            <a class="mx-4 hover:font-bold" href="/contact">Contact</a>
            <a class="mx-4 hover:font-bold" href="/articles">Articles</a>
        </div>
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
