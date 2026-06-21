<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - LAMBERT Agency</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background:#f4f4f4; }
        nav { background:#222; padding:15px; display:flex; justify-content:space-between; align-items:center; }
        nav a { color:white; text-decoration:none; margin:15px; font-size:18px; }
        .paiement-card { border-radius:12px; border:none; box-shadow:0 4px 15px rgba(0,0,0,0.1); }
        .mtn { background: linear-gradient(135deg, #ffcc00, #ff9900); color:#222; }
        .moov { background: linear-gradient(135deg, #0066cc, #00aaff); color:white; }
        .whatsapp { background: linear-gradient(135deg, #25d366, #128c7e); color:white; }
        .btn-whatsapp { background:#25d366; color:white; border:none; border-radius:8px; padding:12px 25px; font-size:16px; }
        .btn-whatsapp:hover { background:#128c7e; color:white; }
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

    <div class="text-center mt-5">
        <h1 class="fw-bold">Contactez-nous </h1>
        <p class="text-muted">LAMB Agency — Cotonou, Bénin</p>
    </div>

    <div class="container mt-4 mb-5">
        <div class="row g-4 justify-content-center">

            <!-- FORMULAIRE -->
            <div class="col-md-6">
                <div class="card shadow p-4 border-0 rounded-4">
                    <h5 class="mb-3 text-primary">✉️ Envoyez-nous un message</h5>

                    @if(session('success'))
                        <div class="alert alert-success text-center fs-5">
                            ✅ Message envoyé avec succès !
                        </div>
                        <p class="text-center text-muted">Nous vous répondrons très bientôt sur WhatsApp ou par email.</p>
                    @else
                        <form method="POST" action="/contact">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Nom</label>
                                <input type="text" name="name" class="form-control" placeholder="Votre nom" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Votre email" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Service souhaité</label>
                                <select name="service" class="form-control">
                                    <option>Création Web</option>
                                    <option>Gestion Facebook / Instagram</option>
                                    <option>Publicité Facebook Ads</option>
                                    <option>Commerce en Ligne</option>
                                    <option>Logo Professionnel</option>
                                    <option>Flyer / Affiche</option>
                                    <option>Pack Design Complet</option>
                                    <option>Autre</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Message</label>
                                <textarea name="message" rows="4" class="form-control" placeholder="Décrivez votre demande..." required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">
    Envoyer le message
</button>
                        </form>
<hr>
<h6 class="text-center text-muted mt-3">Ou payez directement en ligne</h6>
<form method="POST" action="/paiement/initier">
    @csrf
    <input type="hidden" name="service" value="Service LAMB Agency">
    <div class="mb-3">
        <label class="form-label">Votre nom</label>
        <input type="text" name="nom" class="form-control" placeholder="Votre nom" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" placeholder="Votre email" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Téléphone Mobile Money</label>
        <input type="text" name="telephone" class="form-control" placeholder="Ex: 96000000" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Montant (FCFA)</label>
        <input type="number" name="montant" class="form-control" placeholder="Ex: 50000" required>
    </div>
    <button type="submit" class="btn btn-success w-100">
        💳 Payer maintenant
    </button>
</form>
                    @endif
                </div>
            </div>

            <!-- PAIEMENT & CONTACT -->
            <div class="col-md-4">

                <!-- WHATSAPP -->
                <div class="card paiement-card whatsapp p-4 mb-3 text-center">
                    <h5>💬 Contactez-nous sur WhatsApp</h5>
                    <p>Discutez de votre projet directement avec nous !</p>
                    <a href="https://wa.me/22990110114" target="_blank" class="btn btn-whatsapp">
                        Ouvrir WhatsApp
                    </a>
                    <p class="mt-2 mb-0"><strong>+229 01 90 11 01 14</strong></p>
                </div>

                <!-- MTN MOMO -->
                <div class="card paiement-card mtn p-4 mb-3 text-center">
                    <h5>💛 Paiement MTN MoMo</h5>
                    <p>Envoyez votre paiement sur :</p>
                    <h4 class="fw-bold">+229 01 90 11 01 14</h4>
                    <p class="mb-0">Au nom de : <strong>LAMBERT Agency</strong></p>
                </div>

                <!-- MOOV MONEY -->
                <div class="card paiement-card moov p-4 mb-3 text-center">
                    <h5>💙 Paiement Moov Money</h5>
                    <p>Envoyez votre paiement sur :</p>
                    <h4 class="fw-bold">+229 01 45 60 05 85</h4>
                    <p class="mb-0">Au nom de : <strong>LAMBERT Agency</strong></p>
                </div>

                <!-- INFO -->
                <div class="card border-0 shadow-sm p-4 text-center">
                    <h6>📍 Localisation</h6>
                    <p class="text-muted mb-0">Cotonou, Bénin</p>
                    <hr>
                    <h6>🕐 Disponibilité</h6>
                    <p class="text-muted mb-0">Lun - Sam : 8h à 20h</p>
                </div>

            </div>
        </div>
    </div>

    <footer class="text-center py-4 bg-dark text-white">
        <p>© {{ date('Y') }} LAMB Agency — Achetez Mieux, Vivez Mieux | Cotonou, Bénin</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>