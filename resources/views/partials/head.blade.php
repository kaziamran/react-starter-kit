<meta charset="UTF-8">
<meta name="description" content="A modern online shop showcasing products with clean and user-friendly designs.">
<meta name="keywords" content="online shop, dynamic shop card, responsive website">
<meta name="author" content="Kazi Emran">
<meta name="viewport" content="width=device-width, initial-scale=1">

<script>
(function() {
    const appearance = '{{ $appearance ?? "system" }}';

    if (appearance === 'system') {
        const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

        if (prefersDark) {
            document.documentElement.classList.add('dark');
        }
    }
})();
</script>
<style>
    html {
        background-color: #fff;
    }
    html.dark {
        background-color: #fff;
    }
    .nav_section ul {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        padding-bottom: 20px;
    }
</style>
<link rel="icon" href="/favicon.ico" sizes="any">
<link rel="icon" href="/favicon.svg" type="image/svg+xml">
<link rel="apple-touch-icon" href="/apple-touch-icon.png">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">


