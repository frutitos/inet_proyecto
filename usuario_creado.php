<p class='success-message' id='success-message'>Registro exitoso. Redirigiendo al inicio...</p>
<!-- Parágrafo con el mensaje de éxito que se muestra cuando el registro es exitoso. 
    Tiene una clase 'success-message' y un identificador 'success-message'. -->

<script>
    document.getElementById('success-message').style.display = 'block';
    /* Línea de JavaScript que selecciona el elemento con el ID 'success-message' 
        y cambia su estilo de 'display' a 'block', lo que hace que el mensaje sea visible. */

    setTimeout(function() {
        window.location.href = 'index.php';
    }, 3000); // 3 segundos de espera
    /* Función de JavaScript que espera 3 segundos (3000 milisegundos) 
        y luego redirige al usuario a la página 'index.php'. */
</script>