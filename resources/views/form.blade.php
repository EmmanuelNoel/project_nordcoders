<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

@if($errors->any())
    @foreach($errors->all() as $error)

<div>{{$error}}</div>
    @endforeach

    @endif

<form method="POST" action="{{route('post.store')}}" enctype="multipart/form-data">
    @csrf
<label for="">Titre</label>
<input type="text" name="title">
    <label for="">Contenu</label>
<textarea name="contenu" id="" cols="30" rows="10">

</textarea>
    <label for="avatar">Choose a profile picture</label>
    <input type="file" id="avatar" name="avatar" accept="*image/png, image/jpeg">
<input type="submit" value="Créer" name="creer">
</form>
</body>
</html>
