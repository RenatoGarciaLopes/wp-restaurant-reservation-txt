/*
Plugin Name: Meu Plugin de Reservas
Description: Um plugin para gerenciar reservas de restaurante.
Version: 1.0
Author: Seu Nome
Plugin URI: https://exemplo.com/meu-plugin
Author URI: https://exemplo.com/
License: GPL v2 or later
Text Domain: meu-plugin
Domain Path: /languages
*/

function formulario_reserva_shortcode() {
    ob_start();
    // Coloque aqui o código HTML para o formulário de reserva.
    ?>
    <form id="formulario-reserva" method="post" action="">
    <!-- Etapa 1: Nome da Reserva -->
    <label for="nome">Nome da Reserva:</label>
    <input type="text" id="nome" name="nome" required><br><br>

    <!-- Etapa 2: Crianças de 0 a 8 anos -->
    <label for="criancas-0-8">Crianças de 0 a 8 anos:</label>
    <input type="checkbox" id="criancas-0-8-sim" name="criancas-0-8-sim">
    <label for="criancas-0-8-sim">Sim</label>
    <input type="checkbox" id="criancas-0-8-nao" name="criancas-0-8-nao">
    <label for="criancas-0-8-nao">Não</label><br><br>

    <div id="criancas-0-8-inputs" style="display: none;">
        <label for="quantidade-criancas-0-8">Quantidade de crianças de 0 a 8 anos:</label>
        <input type="number" id="quantidade-criancas-0-8" name="quantidade-criancas-0-8" step="0.1"><br><br>
    </div>

    <!-- Etapa 3: Crianças de 8 a 12 anos -->
    <label for="criancas-8-12">Crianças de 8 a 12 anos:</label>
    <input type="checkbox" id="criancas-8-12-sim" name="criancas-8-12-sim">
    <label for="criancas-8-12-sim">Sim</label>
    <input type="checkbox" id="criancas-8-12-nao" name="criancas-8-12-nao">
    <label for="criancas-8-12-nao">Não</label><br><br>

    <div id="criancas-8-12-inputs" style="display: none;">
        <label for="quantidade-criancas-8-12">Quantidade de crianças de 8 a 12 anos:</label>
        <input type="number" id="quantidade-criancas-8-12" name="quantidade-criancas-8-12" step="0.1"><br><br>
    </div>

    <!-- Etapa 4: Reservas Inteiras -->
    <label for="quantidade-inteiras">Quantidade de reservas inteiras necessárias:</label>
    <input type="number" id="quantidade-inteiras" name="quantidade-inteiras" required><br><br>

    <!-- Etapa 5: Escolher Data -->
    <label>Escolher Data:</label><br>
    <input type="radio" id="data-1" name="data" value="data-1">
    <label for="data-1">Dia 6/10/23, 19h00, sex (restam 100 vagas)</label><br>
    <!-- Adicione mais opções de data conforme necessário -->

    <br><br>

    <!-- Etapa 6: Exibir Preço Total -->
    <div id="preco-total" style="display: none;">
        <label>Preço Total:</label>
        <span id="valor-total"></span><br><br>
    </div>

  <!-- Etapa 7: Exibir QR Code do PIX (QR code estático) -->
<div id="qr-code" style="display: none;">
    <img src="caminho-para-o-seu-qr-code.png" alt="QR Code do PIX" />
</div>


    <!-- Etapa 8: Botão para Enviar via WhatsApp -->
    <div id="botao-whatsapp" style="display: none;">
        <a id="enviar-whatsapp" href="https://wa.me/5544999068798?text=" target="_blank">
            Enviar mensagem via WhatsApp
        </a>
    </div>

    <!-- Botão para Enviar o Formulário -->
    <input type="submit" value="Confirmar Reserva">
</form>

<script>
    // Lógica para mostrar/ocultar campos com base nas escolhas do usuário

    // Função para atualizar o preço total
    function atualizarPrecoTotal() {
        // Implemente a lógica para calcular o preço total aqui
        // e atualizar o elemento "valor-total" com o resultado.
    }

    // Função para atualizar o QR Code do PIX (adicione a lógica aqui)

    // Quando o formulário é enviado
    document.getElementById('formulario-reserva').addEventListener('submit', function (e) {
        e.preventDefault(); // Evita o envio padrão do formulário

        // Implemente a lógica para calcular o preço total, gerar o QR Code e atualizar o WhatsApp aqui

        // Mostrar o preço total, o QR Code e o botão do WhatsApp
        document.getElementById('preco-total').style.display = 'block';
        document.getElementById('qr-code').style.display = 'block';
        document.getElementById('botao-whatsapp').style.display = 'block';
    });

    // Lógica para mostrar/ocultar campos com base nas escolhas do usuário
    // (você precisará implementar isso)
</script>

    </form>
    <?php
    return ob_get_clean();
}
add_shortcode('formulario_reserva', 'formulario_reserva_shortcode');
