<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Ubah Data User</title>
</head>
<body>
    <form action="/user/ubah_simpan/{{$data->user_id}}" method="post">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
        <label>Username</label>
        <input type="text" name="username" value="{{$data->username}}">
        <br>
        <label>Nama</label>
        <input type="text" name="nama" value="{{$data->nama}}">
        <br>
        <label>Password</label>
        <input type="password" name="password" value="{{$data->password}}">
        <br>
        <label>Level ID</label>
        <input type="number" name="level_id" value="{{$data->level_id}}">
        <br><br>
        <input type="submit" class="btn btn-success" value="Ubah">
    </form>
</body>
</html>