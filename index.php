<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procrastination</title>
</head>
<body>
    <div id="conteudo"></div>
    <?php echo "xvideos" ?>
    <script>
        async function carregarConteudo() {
            try {
                const resposta = await fetch('https://rapid-readily-seahorse.ngrok-free.app/casa.php');
                if (resposta.ok) {
                    const texto = await resposta.text();
                    document.getElementById('conteudo').innerHTML = texto;
                } else {
                    console.error('Erro ao carregar a página:', resposta.status);
                }
            } catch (erro) {
                console.error('Erro ao carregar a página:', erro);
            }
        }

        carregarConteudo();
    </script>
</body>
</html>
