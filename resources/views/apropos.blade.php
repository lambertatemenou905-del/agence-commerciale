<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À Propos - LAMB Agency</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { font-family: Arial, sans-serif; background:#f4f4f4; margin:0; padding:0; }
        nav { background:#222; padding:15px; display:flex; justify-content:space-between; align-items:center; }
        nav a { color:white; text-decoration:none; margin:15px; font-size:18px; }
        nav a:hover { color:#007bff; }
        .hero-apropos { background: linear-gradient(135deg, #007bff, #00c6ff); color:white; padding:80px 20px; text-align:center; }
        .valeur-card { border:none; border-radius:12px; box-shadow:0 4px 15px rgba(0,0,0,0.1); padding:30px; text-align:center; transition:0.3s; }
        .valeur-card:hover { transform:translateY(-5px); }
        .valeur-icon { font-size:50px; margin-bottom:15px; }
        .equipe-card { border:none; border-radius:12px; box-shadow:0 4px 15px rgba(0,0,0,0.1); text-align:center; padding:25px; }
        .equipe-avatar { width:80px; height:80px; border-radius:50%; background:#007bff; color:white; font-size:30px; display:flex; align-items:center; justify-content:center; margin:auto; margin-bottom:15px; }
        .timeline { border-left:3px solid #007bff; padding-left:20px; }
        .timeline-item { margin-bottom:25px; position:relative; }
        .timeline-item::before { content:''; width:12px; height:12px; background:#007bff; border-radius:50%; position:absolute; left:-27px; top:5px; }
        .whatsapp-float { position:fixed; bottom:20px; right:20px; background:#25d366; color:white; border-radius:50px; padding:12px 20px; font-size:16px; text-decoration:none; box-shadow:0 4px 15px rgba(0,0,0,0.3); z-index:999; }
        .whatsapp-float:hover { background:#128c7e; color:white; }
    </style>
</head>
<body>

    <nav>
        <img src="{{ asset('images/logo.png') }}" alt="Logo LAMB" style="height:60px;">
        <div>
            <a href="/">Accueil</a>
            <a href="/services">Services</a>
            <a href="/apropos">À Propos</a>
            <a href="/contact">Contact</a>
        </div>
    </nav>

    <!-- HERO -->
    <div class="hero-apropos">
        <h1>🏢 À Propos de LAMB Agency</h1>
        <p class="mt-3 fs-5">Votre agence digitale de confiance au Bénin</p>
    </div>

    <div class="container my-5">

        <!-- QUI SOMMES-NOUS -->
        <div class="row align-items-center mb-5">
            <div class="col-md-6">
                <h2 class="text-primary mb-3">Qui sommes-nous ?</h2>
                <p class="fs-5">LAMB Agency est une agence digitale basée à <strong>Cotonou, Bénin</strong>, spécialisée dans la création de sites web, le marketing digital et le design professionnel.</p>
                <p>Notre mission est simple : aider les entrepreneurs et entreprises béninois à développer leur présence en ligne et booster leurs ventes grâce au digital.</p>
                <p>Nous croyons que chaque business mérite une présence digitale professionnelle, accessible et efficace.</p>
                <a href="/contact" class="btn btn-primary mt-2">Travailler avec nous</a>
            </div>
            <div class="col-md-6 text-center">
                <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=500&h=350&fit=crop" alt="Agence" class="img-fluid rounded-4 shadow">
            </div>
        </div>

        <!-- NOS VALEURS -->
        <h2 class="text-center mb-4 text-primary">Nos Valeurs</h2>
        <div class="row g-4 mb-5">
            <div class="col-md-4">
                <div class="valeur-card">
                    <div class="valeur-icon"></div>
                    <h5>Excellence</h5>
                    <p class="text-muted">Nous livrons toujours un travail de qualité professionnelle, dans les délais convenus.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="valeur-card">
                    <div class="valeur-icon"></div>
                    <h5>Confiance</h5>
                    <p class="text-muted">La transparence et l'honnêteté sont au cœur de chaque relation client.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="valeur-card">
                    <div class="valeur-icon"></div>
                    <h5>Innovation</h5>
                    <p class="text-muted">Nous utilisons les dernières technologies pour offrir des solutions modernes et efficaces.</p>
                </div>
            </div>
        </div>

        <!-- NOTRE ÉQUIPE -->
        <h2 class="text-center mb-4 text-primary">Notre Équipe</h2>
        <div class="row g-4 mb-5 justify-content-center">
            <div class="col-md-3">
                <div class="equipe-card">
                    <div class="equipe-avatar">👨‍💻</div>
                    <h6>Lambert</h6>
                    <p class="text-muted small">Fondateur & Développeur Web</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="equipe-card">
                    <div class="equipe-avatar">🎨</div>
                    <h6>Designer</h6>
                    <p class="text-muted small">Directeur Artistique</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="equipe-card">
                    <div class="equipe-avatar">📣</div>
                    <h6>Marketing</h6>
                    <p class="text-muted small">Responsable Marketing Digital</p>
                </div>
            </div>
        </div>

        <!-- NOTRE HISTOIRE -->
        <div class="row mb-5">
            <div class="col-md-6 mx-auto">
                <h2 class="text-center mb-4 text-primary">Notre Histoire</h2>
                <div class="timeline">
                    <div class="timeline-item">
                        <h6>2022 — Création</h6>
                        <p class="text-muted">LAMB Agency est fondée à Cotonou avec une vision : démocratiser le digital au Bénin.</p>
                    </div>
                    <div class="timeline-item">
                        <h6>2023 — Croissance</h6>
                        <p class="text-muted">Plus de 30 clients satisfaits, expansion des services marketing et design.</p>
                    </div>
                    <div class="timeline-item">
                        <h6>2024 — Innovation</h6>
                        <p class="text-muted">Intégration du paiement Mobile Money et lancement de nouvelles offres e-commerce.</p>
                    </div>
                    <div class="timeline-item">
                        <h6>2025 — Aujourd'hui</h6>
                        <p class="text-muted">Plus de 100 projets réalisés, leader du digital à Cotonou.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <footer class="text-center py-4 bg-dark text-white">
        <p>© {{ date('Y') }} LAMB Agency — Achetez Mieux, Vivez Mieux | Cotonou, Bénin</p>
    </footer>

    <a href="https://wa.me/22990110114" target="_blank" class="whatsapp-float">
        💬 WhatsApp
    </a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>