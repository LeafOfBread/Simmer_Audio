<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simmer Audio</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>
    <script src="script.js" defer></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html">Simmer Audio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="portfolio.html">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pricing.html">Pricing</a>
                        </li>
                        <li class ="nav-item">
                            <a class="nav-link" href="about.html">About Us
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="impressum.html">Impressum</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="form-description content-center" style="margin-top: 20px;">
        <p>If you wish to work with us, please describe your vision, style, desired services and
            expected price-range in the message box below. We will get back to you as soon as possible.
        </p>
    </div>

    <!-- modify this form HTML and place wherever you want your form -->
    <div class="form-container">
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
    
</body>

</html>