<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Connexion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card shadow p-4 border-0 rounded-4">
                    <div class="text-center mb-3">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo" style="height:60px;">
                    </div>
                    <h5 class="text-center mb-4">🔐 Connexion Admin</h5>

                    @if(session('error'))
                        <div class="alert alert-danger text-center">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form method="POST" action="/admin/login">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Mot de passe</label>
                            <input type="password" name="password" class="form-control" placeholder="Entrez le mot de passe" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">
                            Se connecter
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>