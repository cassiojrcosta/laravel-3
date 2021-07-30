<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Produto</title>
</head>
<body>
  <h1>Produto</h1>
  <ul>
  <li>Nome: {{ $product->name }}</li>
  <li>Descrição: {{ $product->description }}</li>
  <li>Preço: R$ {{ $produtc->price }}</li>
  </ul>
  <a href="/products/edit/{{ $product ->id }}">
     Editar
  </a>
</body>
</html>
