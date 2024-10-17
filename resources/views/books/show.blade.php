<!-- resources/views/books/show.blade.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Livro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>{{ $book->titulo }}</h1>
        <p><strong>Autor:</strong> {{ $book->autor }}</p>
        <p><strong>ISBN:</strong> {{ $book->isbn }}</p>
        <p><strong>Editora:</strong> {{ $book->editora }}</p>
        <p><strong>Ano de Publicação:</strong> {{ $book->ano_publicacao }}</p>
        <a href="{{ route('books.index') }}" class="btn btn-primary">Voltar</a>
    </div>
</body>
</html>
