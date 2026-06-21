<!DOCTYPE html>
<html>
<head>
    <title>Messages Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<h1>Messages reçus 📩</h1>

<table border="1" cellpadding="10">
    <tr>
        <th>Nom</th>
        <th>Email</th>
        <th>Message</th>
        <th>Date</th>
    </tr>

    @foreach($messages as $msg)
    <tr>
        <td>{{ $msg->name }}</td>
        <td>{{ $msg->email }}</td>
        <td>{{ $msg->message }}</td>
        <td>{{ $msg->created_at }}</td>
    </tr>
    @endforeach

</table>

</body>
</html>