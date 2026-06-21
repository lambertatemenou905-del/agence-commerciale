<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAMB Agency - Achetez Mieux, Vivez Mieux</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { font-family: Arial, sans-serif; margin:0; padding:0; background:#f4f4f4; }
        nav { background:#222; padding:15px; display:flex; justify-content:space-between; align-items:center; }
        nav a { color:white; text-decoration:none; margin:15px; font-size:18px; }
        nav a:hover { color:#007bff; }
        .hero { background: linear-gradient(135deg, #007bff, #00c6ff); color:white; padding:100px 20px; text-align:center; }
        .hero h1 { font-size:50px; font-weight:bold; }
        .hero p { font-size:22px; opacity:0.9; }
        .btn-hero { background:white; color:#007bff; padding:14px 35px; border-radius:30px; font-size:18px; font-weight:bold; text-decoration:none; margin:10px; display:inline-block; }
        .btn-hero:hover { background:#f0f0f0; color:#0056b3; }
        .btn-hero2 { background:transparent; color:white; border:2px solid white; padding:14px 35px; border-radius:30px; font-size:18px; font-weight:bold; text-decoration:none; margin:10px; display:inline-block; }
        .btn-hero2:hover { background:white; color:#007bff; }
        .stats { background:white; padding:40px 20px; text-align:center; }
        .stat-number { font-size:40px; font-weight:bold; color:#007bff; }
        .services-preview { padding:60px 20px; text-align:center; }
        .service-icon { font-size:50px; margin-bottom:10px; }
        .card-service { border:none; border-radius:12px; box-shadow:0 4px 15px rgba(0,0,0,0.1); padding:30px; transition:0.3s; }
        .card-service:hover { transform:translateY(-5px); box-shadow:0 8px 25px rgba(0,0,0,0.2); }
        .temoignages { background:#222; color:white; padding:60px 20px; text-align:center; }
        .temoignage-card { background:#333; border-radius:12px; padding:25px; margin:10px; }
        .etoiles { color:#ffcc00; font-size:20px; }
        .cta { background: linear-gradient(135deg, #007bff, #00c6ff); color:white; padding:60px 20px; text-align:center; }
        footer { background:#111; color:#aaa; padding:30px; text-align:center; }
        .whatsapp-float { position:fixed; bottom:20px; right:20px; background:#25d366; color:white; border-radius:50px; padding:12px 20px; font-size:16px; text-decoration:none; box-shadow:0 4px 15px rgba(0,0,0,0.3); z-index:999; }
        .whatsapp-float:hover { background:#128c7e; color:white; }
    </style>
</head>
<body>

    <!-- NAV -->
    <nav>
        <img src="{{ asset('images/logo.png') }}" alt="Logo LAMB" style="height:60px;">
        <div>
            <a href="/">Accueil</a>
            <a href="/services">Services</a>
            <a href="/apropos">À Propos</a>
        </div>
    </nav>

    <!-- HERO -->
    <div class="hero">
        <h1> LAMB Agency</h1>
        <p>Votre partenaire digital au Bénin<br>Sites web, Marketing, Design professionnel</p>
        <a href="/services" class="btn-hero">Voir nos services</a>
        <a href="/contact" class="btn-hero2">Nous contacter</a>
    </div>

    <!-- STATS -->
    <div class="stats">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="stat-number">50+</div>
                    <p class="text-muted">Clients satisfaits</p>
                </div>
                <div class="col-md-3">
                    <div class="stat-number">100+</div>
                    <p class="text-muted">Sites créés</p>
                </div>
                <div class="col-md-3">
                    <div class="stat-number">3+</div>
                    <p class="text-muted">Années d'expérience</p>
                </div>
                <div class="col-md-3">
                    <div class="stat-number">24/7</div>
                    <p class="text-muted">Support disponible</p>
                </div>
            </div>
        </div>
    </div>

    <!-- SERVICES PREVIEW -->
    <div class="services-preview">
        <h2 class="mb-2">Nos Services</h2>
        <p class="text-muted mb-5">Des solutions digitales adaptées à votre business</p>
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card-service">
                        <div class="service-icon">🌐</div>
                        <h5>Création Web</h5>
                        <p class="text-muted">Sites modernes, responsives et professionnels à partir de 35 000 FCFA</p>
                        <a href="/services" class="btn btn-primary btn-sm">En savoir plus</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-service">
                        <div class="service-icon">📣</div>
                        <h5>Marketing Digital</h5>
                        <p class="text-muted">Gestion Facebook, Instagram, publicité en ligne à partir de 25 000 FCFA/mois</p>
                        <a href="/services" class="btn btn-primary btn-sm">En savoir plus</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-service">
                        <div class="service-icon">🎨</div>
                        <h5>Design Professionnel</h5>
                        <p class="text-muted">Logo, flyers, cartes de visite à partir de 5 000 FCFA</p>
                        <a href="/services" class="btn btn-primary btn-sm">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- TEMOIGNAGES -->
    <div class="temoignages">
        <h2 class="mb-2">Ce que disent nos clients 💬</h2>
        <p class="text-muted mb-5">Ils nous ont fait confiance</p>
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="temoignage-card">
                        <div class="etoiles">⭐⭐⭐⭐⭐</div>
                        <p class="mt-3">"LAMB Agency a créé mon site en 3 jours. Très professionnel et rapide !"</p>
                        <strong>— Kofi A., Cotonou</strong>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="temoignage-card">
                        <div class="etoiles">⭐⭐⭐⭐⭐</div>
                        <p class="mt-3">"Grâce à leur gestion Instagram, mes ventes ont doublé en 2 mois !"</p>
                        <strong>— Afi B., Porto-Novo</strong>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="temoignage-card">
                        <div class="etoiles">⭐⭐⭐⭐⭐</div>
                        <p class="mt-3">"Mon logo est magnifique ! Je recommande à tous les entrepreneurs du Bénin."</p>
                        <strong>— Marius D., Parakou</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA -->
    <div class="cta">
        <h2>Prêt à lancer votre projet ? </h2>
        <p class="mb-4">Contactez-nous aujourd'hui et obtenez un devis gratuit !</p>
        <a href="/contact" class="btn-hero">Demander un devis gratuit</a>
    </div>

    <!-- FOOTER -->
    <footer>
        <p>© {{ date('Y') }} LAMB Agency — Achetez Mieux, Vivez Mieux | Cotonou, Bénin</p>
        <p>📞 +229 90 11 01 14 | 📧 lambertatemenou905@gmail.com</p>
    </footer>

    <!-- WHATSAPP FLOTTANT -->
    <a href="https://wa.me/22990110114" target="_blank" class="whatsapp-float">
        💬 WhatsApp
    </a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>