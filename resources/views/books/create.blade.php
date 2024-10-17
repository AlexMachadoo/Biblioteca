<!-- resources/views/books/create.blade.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Livro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Criar Novo Livro</h1>
        <form action="{{ route('books.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="titulo" class="form-label">Título</label>
                <input type="text" class="form-control" id="titulo" name="titulo" required>
            </div>
            <div class="mb-3">
                <label for="autor" class="form-label">Autor</label>
                <input type="text" class="form-control" id="autor" name="autor" required>
            </div>
            <div class="mb-3">
                <label for="isbn" class="form-label">ISBN</label>
                <input type="text" class="form-control" id="isbn" name="isbn" required>
            </div>
            <div class="mb-3">
                <label for="editora" class="form-label">Editora</label>
                <input type="text" class="form-control" id="editora" name="editora" required>
            </div>
            <div class="mb-3">
                <label for="ano_publicacao" class="form-label">Ano de Publicação</label>
                <input type="text" class="form-control" id="ano_publicacao" name="ano_publicacao" required>
            </div>
            <button type="submit" class="btn btn-success">Adicionar Livro</button>
            <a href="{{ route('books.index') }}" class="btn btn-secondary">Voltar</a>
        </form>
    </div>
</body>
</html>
