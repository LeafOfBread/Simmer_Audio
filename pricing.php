<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simmer Audio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/png" href="/resources/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/resources/favicon/favicon.svg" />
    <link rel="shortcut icon" href="/resources/favicon/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/resources/favicon/apple-touch-icon.png" />
    <link rel="manifest" href="/resources/favicon/site.webmanifest" />
    <script src="script.js" defer></script>
</head>
<body>
    <?php include 'navbar.php'; ?>
    <div class="logo-container
        d-flex justify-content-center align-items-center flex-column">
        <img src="resources/logo.png" alt="logo image" class="logo">
    </div>
    <div class="price-range">
        <h1 class="text-center">Pricing</h1>
        <p class="text-center">We offer a range of services to suit your needs. Please see our pricing below:</p>
        <div class="price-item">
            <h2>Audio Mixing & Mastering</h2>
            <p>$120 per track</p>
            <h2>Guitar Session Work</h2>
            <p>60$ per track</p>
            <h2>Drum Session Work</h2>
            <p>200$ per track</p>
            <br>
            <p>These prices are not set in stone. If you have an offer to make for us, we would love to hear it.</p>
    </div>
    <?php include 'footer.php';?>
</body>
</html>