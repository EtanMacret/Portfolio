<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
            crossorigin="anonymous"
    >
    <title><?= $data['title'] ?></title>
</head>
<body>
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom" style="background-color: #212529;">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4" style="color: #f8f9fa;">Portfoilio Etan Macret</span>
      </a>
      <ul class="nav nav-pills ">
        <li class="nav-item"><a href="/" class="nav-link <?= $data['title'] == 'Accueil' ? 'active' : '' ; ?>">Acceuil</a></li>
        <li class="nav-item"><a href="/parcours" class="nav-link <?= $data['title'] == 'Parcours' ? 'active' : '' ; ?>">Parcours</a></li>
        <li class="nav-item"><a href="/competences" class="nav-link <?= $data['title'] == 'Competences' ? 'active' : '' ; ?>">Competences</a></li>
        <li class="nav-item"><a href="/contact" class="nav-link <?= $data['title'] == 'Contact' ? 'active' : '' ; ?>">Contact</a></li>
      </ul>
    </header>
        <?php require $templatePath ?>


        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 border-top" style="background-color: #212529; position: fixed; bottom: 0; width: 100%">
            <div class="col-md-4 d-flex align-items-center">    
            <span  style="color: #f8f9fa;">© 2024 Macret Etan</span>
            </div>

            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3"><a class="text-body-secondary" href="https://www.linkedin.com/in/etan-macret-a27312286/">
                <img src="/assets/linkedin-logo.png" alt="compte linkedin">
            </li>
            <li class="ms-3"><a class="text-body-secondary" href="https://github.com/EtanMacret">
                <img src="/assets/github.png" alt="compte github">
            </li>
            </ul>
        </footer>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"
        >
        </script>
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        >
        </script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
            integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
            crossorigin="anonymous"
        >
        </script>
    </body>
</html>