<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Services</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { font-family: Arial, sans-serif; background:#f4f4f4; margin:0; padding:0; }
        nav { background:#222; padding:15px; display:flex; justify-content:space-between; align-items:center; }
        nav a { color:white; text-decoration:none; margin:15px; font-size:18px; }
        .section-title { text-align:center; margin-top:50px; margin-bottom:30px; color:#333; border-bottom: 3px solid #007bff; display:inline-block; padding-bottom:8px; }
        .produit-card { border:none; border-radius:12px; box-shadow:0 4px 15px rgba(0,0,0,0.1); transition:0.3s; height:100%; }
        .produit-card:hover { transform:translateY(-5px); box-shadow:0 8px 25px rgba(0,0,0,0.2); }
        .produit-card img { border-radius:12px 12px 0 0; height:180px; object-fit:cover; width:100%; }
        .badge-prix { background:#007bff; color:white; padding:5px 12px; border-radius:20px; font-size:14px; }
        .btn-commander { background:#007bff; color:white; border:none; border-radius:8px; padding:8px 20px; }
        .btn-commander:hover { background:#0056b3; color:white; }
        .hero-service { background:#007bff; color:white; padding:40px; text-align:center; }
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
        </div>
    </nav>

    <div class="hero-service">
        <h1> Nos Services</h1>
        <p>Des solutions professionnelles adaptées à votre business au Bénin</p>
    </div>

    <div class="container mb-5">

        <!-- CRÉATION WEB -->
        <div class="text-center">
            <h2 class="section-title">🌐 Création Web</h2>
        </div>
        <div class="row g-4 mb-5">
            <div class="col-md-4">
                <div class="card produit-card">
                    <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?w=400&h=180&fit=crop" alt="Site Restaurant">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Site Restaurant</h5>
                        <p class="card-text text-muted">Menu en ligne, réservation, galerie photos.</p>
                        <div class="mt-auto d-flex justify-content-between align-items-center">
                            <span class="badge-prix">50 000 FCFA</span>
                            <a href="/contact" class="btn btn-commander">Commander</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card produit-card">
                    <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=400&h=180&fit=crop" alt="Site E-commerce">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Site E-commerce</h5>
                        <p class="card-text text-muted">Boutique en ligne, panier, paiement Mobile Money.</p>
                        <div class="mt-auto d-flex justify-content-between align-items-center">
                            <span class="badge-prix">120 000 FCFA</span>
                            <a href="/contact" class="btn btn-commander">Commander</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card produit-card">
                    <img src="https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?w=400&h=180&fit=crop" alt="Site Vitrine">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Site Vitrine</h5>
                        <p class="card-text text-muted">Présentation entreprise, contact, réseaux sociaux.</p>
                        <div class="mt-auto d-flex justify-content-between align-items-center">
                            <span class="badge-prix">35 000 FCFA</span>
                            <a href="/contact" class="btn btn-commander">Commander</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card produit-card">
                    <img src="https://images.unsplash.com/photo-1545665277-5937489579f2?w=400&h=180&fit=crop" alt="Site Portfolio">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Site Portfolio</h5>
                        <p class="card-text text-muted">Présentation de vos projets et compétences.</p>
                        <div class="mt-auto d-flex justify-content-between align-items-center">
                            <span class="badge-prix">30 000 FCFA</span>
                            <a href="/contact" class="btn btn-commander">Commander</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card produit-card">
                    <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=400&h=180&fit=crop" alt="Site Agence">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Site Agence</h5>
                        <p class="card-text text-muted">Services, équipe, blog, formulaire de contact.</p>
                        <div class="mt-auto d-flex justify-content-between align-items-center">
                            <span class="badge-prix">80 000 FCFA</span>
                            <a href="/contact" class="btn btn-commander">Commander</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card produit-card">
                    <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?w=400&h=180&fit=crop" alt="Site Immobilier">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Site Immobilier</h5>
                        <p class="card-text text-muted">Annonces, photos, localisation, contact agent.</p>
                        <div class="mt-auto d-flex justify-content-between align-items-center">
                            <span class="badge-prix">100 000 FCFA</span>
                            <a href="/contact" class="btn btn-commander">Commander</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- MARKETING -->
        <div class="text-center">
            <h2 class="section-title">📣 Marketing Digital</h2>
        </div>
        <div class="row g-4 mb-5">
            <div class="col-md-4">
                <div class="card produit-card">
                    <img src="https://images.unsplash.com/photo-1611162617213-7d7a39e9b1d7?w=400&h=180&fit=crop" alt="Facebook">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Gestion Page Facebook</h5>
                        <p class="card-text text-muted">Création et animation de votre page Facebook, publications régulières, interaction clients.</p>
                        <div class="mt-auto d-flex justify-content-between align-items-center">
                            <span class="badge-prix">25 000 FCFA/mois</span>
                            <a href="/contact" class="btn btn-commander">Commander</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card produit-card">
                    <img src="https://images.unsplash.com/photo-1611162616305-c69b3fa7fbe0?w=400&h=180&fit=crop" alt="Instagram">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Gestion Page Instagram</h5>
                        <p class="card-text text-muted">Gestion de votre compte Instagram, stories, reels et croissance de votre audience.</p>
                        <div class="mt-auto d-flex justify-content-between align-items-center">
                            <span class="badge-prix">25 000 FCFA/mois</span>
                            <a href="/contact" class="btn btn-commander">Commander</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card produit-card">
                    <img src="https://images.unsplash.com/photo-1533750349088-cd871a92f312?w=400&h=180&fit=crop" alt="Facebook Ads">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Publicité Facebook Ads</h5>
                        <p class="card-text text-muted">Campagnes publicitaires ciblées pour booster vos ventes et votre visibilité.</p>
                        <div class="mt-auto d-flex justify-content-between align-items-center">
                            <span class="badge-prix">40 000 FCFA</span>
                            <a href="/contact" class="btn btn-commander">Commander</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card produit-card">
                    <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?w=400&h=180&fit=crop" alt="Commerce en ligne">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Stratégie Commerce en Ligne</h5>
                        <p class="card-text text-muted">Mise en place de votre boutique en ligne avec Mobile Money et livraison au Bénin.</p>
                        <div class="mt-auto d-flex justify-content-between align-items-center">
                            <span class="badge-prix">60 000 FCFA</span>
                            <a href="/contact" class="btn btn-commander">Commander</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card produit-card">
                    <img src="https://images.unsplash.com/photo-1562577309-4932fdd64cd1?w=400&h=180&fit=crop" alt="Pack réseaux sociaux">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Pack Réseaux Sociaux</h5>
                        <p class="card-text text-muted">Gestion complète Facebook + Instagram + WhatsApp Business pour votre entreprise.</p>
                        <div class="mt-auto d-flex justify-content-between align-items-center">
                            <span class="badge-prix">50 000 FCFA/mois</span>
                            <a href="/contact" class="btn btn-commander">Commander</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- DESIGN -->
        <div class="text-center">
            <h2 class="section-title">🎨 Design Professionnel</h2>
        </div>
        <div class="row g-4 mb-5">
            <div class="col-md-4">
                <div class="card produit-card">
                    <img src="https://images.unsplash.com/photo-1626785774573-4b799315345d?w=400&h=180&fit=crop" alt="Logo">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Logo Professionnel</h5>
                        <p class="card-text text-muted">Création de logo unique et moderne pour votre entreprise, livré en PNG et PDF.</p>
                        <div class="mt-auto d-flex justify-content-between align-items-center">
                            <span class="badge-prix">15 000 FCFA</span>
                            <a href="/contact" class="btn btn-commander">Commander</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card produit-card">
                    <img src="https://images.unsplash.com/photo-1572044162444-ad60f128bdea?w=400&h=180&fit=crop" alt="Flyer">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Flyer / Affiche Publicitaire</h5>
                        <p class="card-text text-muted">Design de flyers et affiches attractifs pour vos promotions et événements.</p>
                        <div class="mt-auto d-flex justify-content-between align-items-center">
                            <span class="badge-prix">8 000 FCFA</span>
                            <a href="/contact" class="btn btn-commander">Commander</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card produit-card">
                    <img src="https://images.unsplash.com/photo-1611532736597-de2d4265fba3?w=400&h=180&fit=crop" alt="Carte de visite">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Carte de Visite</h5>
                        <p class="card-text text-muted">Design professionnel de carte de visite recto-verso, prête à imprimer.</p>
                        <div class="mt-auto d-flex justify-content-between align-items-center">
                            <span class="badge-prix">5 000 FCFA</span>
                            <a href="/contact" class="btn btn-commander">Commander</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card produit-card">
                    <img src="https://images.unsplash.com/photo-1600132806370-bf17e65e942f?w=400&h=180&fit=crop" alt="Bannière">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Bannière Réseaux Sociaux</h5>
                        <p class="card-text text-muted">Couverture Facebook, bannière Instagram et WhatsApp aux bonnes dimensions.</p>
                        <div class="mt-auto d-flex justify-content-between align-items-center">
                            <span class="badge-prix">6 000 FCFA</span>
                            <a href="/contact" class="btn btn-commander">Commander</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card produit-card">
                    <img src="https://images.unsplash.com/photo-1558655146-d09347e92766?w=400&h=180&fit=crop" alt="Pack Design">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Pack Design Complet</h5>
                        <p class="card-text text-muted">Logo + Flyer + Carte de visite + Bannières réseaux sociaux au meilleur prix.</p>
                        <div class="mt-auto d-flex justify-content-between align-items-center">
                            <span class="badge-prix">25 000 FCFA</span>
                            <a href="/contact" class="btn btn-commander">Commander</a>
                        </div>
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