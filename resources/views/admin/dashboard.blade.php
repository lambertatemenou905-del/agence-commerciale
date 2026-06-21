<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin - Lambert</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<nav class="navbar navbar-dark bg-dark px-3">
    <span class="navbar-brand">Dashboard - Lambert</span>
</nav>

<div class="container mt-5">

    <h2 class="mb-4">Messages reçus 📩</h2>

    <div class="alert alert-primary">
        Total messages : {{ count($messages) }}
    </div>

    <div class="card shadow">
        <div class="card-body">

            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Date</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($messages as $msg)
                        <tr>
                            <td>{{ $msg->name }}</td>
                            <td>{{ $msg->email }}</td>
                            <td>{{ $msg->message }}</td>
                            <td>{{ $msg->created_at }}</td>
                        </tr>
                    @endforeach
                </tbody>

            </table>

        </div>
    </div>

</div>

</body>
</html>