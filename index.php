<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Simples</title>
</head>
<body>
<h1>Informações sobre o Usuários</h1>
    <form action="store.php" method="POST">
        <label>Nome:</label>
        <input type="text" name="nome" required>
        <label>Endereço:</label>
        <input type="text" name="endereço" required>
        <label>Data de nascimento </label>
        <input type="date" name="nascimento" required>
        <label>Telefone:</label>
        <input type="tel" name="telefone" required>
        <input type="submit" value="Adicionar Usuário">
    </form>
    <hr>

    <h2>Lista de usuarios</h2>

    <div>
        <?php  include 'read.php'; ?>
    </div>
</body>
</html>