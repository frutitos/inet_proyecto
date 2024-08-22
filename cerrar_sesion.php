<p class='success-message' id='success-message'>Cerrar sesión exitoso. Redirigiendo al inicio...</p>
<!-- Parágrafo que contiene un mensaje indicando que la sesión se cerró exitosamente. 
    El parágrafo tiene una clase 'success-message' y un identificador 'success-message'. -->

<script>
    document.getElementById('success-message').style.display = 'block';
    /*  Código JavaScript que selecciona el elemento con el ID 'success-message' 
        y cambia su estilo de 'display' a 'block', haciendo que el mensaje sea visible en la página. */

    setTimeout(function(){
        window.location.href = 'index.php';
    }, 3000); // 3 segundos de espera
    /* Función de JavaScript que espera 3 segundos (3000 milisegundos) 
        y luego redirige al usuario a la página principal ('index.php'). */
</script>
