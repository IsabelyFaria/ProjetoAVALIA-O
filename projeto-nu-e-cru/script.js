document.addEventListener("DOMContentLoaded", () => {
    fetch("multiverso.php")
        .then(response => response.json())
        .then(data => {
            
            document.body.style.backgroundColor = data.cor;

            
            function mostrarFeedback(tipo) {
                const msg = document.createElement("div");
                msg.textContent = tipo === "sucesso" ? data.sucesso : data.erro;
                msg.className = "feedback " + tipo;
                document.body.appendChild(msg);

                setTimeout(() => msg.remove(), 3000);
            }

            
            document.getElementById("btnSucesso").addEventListener("click", () => mostrarFeedback("sucesso"));
            document.getElementById("btnErro").addEventListener("click", () => mostrarFeedback("erro"));
        });
});
