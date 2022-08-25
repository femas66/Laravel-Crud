<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar laravel</title>
</head>
<body>
    <h1>Data</h1>
    @foreach ($belajar_sendiri as $a)
    <h5>{{$a['id']}}</h5>
    <h5>{{$a['nama']}}</h5>
    <h5>{{$a['sekolah']}}</h5>
    @endforeach
    <br>
    <form method="post" action="/belajar_sendiri/store">
        <input type="text" name="nama" placeholder="Nama" id="">
        <input type="text" name="usia" placeholder="Usia" id="">
        <input type="text" name="sekolah" placeholder="sekolah" id="">
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>