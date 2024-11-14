
    // Função para esconder a mensagem de sucesso após 3 segundos
    setTimeout(() => {
        const message = document.getElementById('success-message');
        if (message) {
            message.style.opacity = '0'; // Transição suave
            setTimeout(() => message.remove(), 500); // Remove o elemento após a transição
        }
    }, 3000);

    // Função para ocultar a mensagem imediatamente ao clicar no 'X'
    function hideMessage() {
        const message = document.getElementById('success-message');
        if (message) {
            message.style.opacity = '0';
            setTimeout(() => message.remove(), 500);
        }
    }

