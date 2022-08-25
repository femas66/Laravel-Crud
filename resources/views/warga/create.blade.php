<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat warga</title>
</head>
<body>
    <form action="/warga/store" method="post">
        @csrf
        <input type="text" name="nama" placeholder="nama" required>
        <input type="number" name="usia" placeholder="usia" required>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>