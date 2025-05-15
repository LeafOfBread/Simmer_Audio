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

    <div class="form-description content-center" style="margin-top: 20px;">
        <p>If you wish to work with us, please describe your vision, style, desired services and
            expected price-range in the message box below. We will get back to you as soon as possible.
        </p>
    </div>

    <!-- modify this form HTML and place wherever you want your form -->
    <div class="form-container" style="margin-bottom: 250px;">
        <form action="https://formspree.io/f/xjkwjwjj" method="POST">
            <div class="mb-3 text-center">
                <label for="email" class="form-label">
                    Your email:
                    <input type="email" name="email" class="form-control" id="email" required
                        aria-describedby="emailHelp">
                </label>
            </div>
    
            <div class="mb-3 text-center">
                <label for="message" class="form-label">
                    Your message:
                    <textarea name="message" class="form-control" id="message" rows="10" cols="40" required></textarea>
                </label>
            </div>
    
            <div class="mb-3 text-center">
                <button type="submit" class="btn">Send</button>
            </div>
        </form>
    </div>
    <?php include 'footer.php';?>
</body>

</html>