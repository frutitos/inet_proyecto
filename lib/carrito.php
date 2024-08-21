<div id="paymentModal" class="modal">
    <!-- Contenedor para el modal (ventana emergente) de pago. Tiene un ID "paymentModal" y la clase "modal" -->
    <div class="modal-content">
        <!-- Contenido del modal -->
        <h2>Detalles del Pago</h2>
        <!-- Título del modal que indica que se mostrarán los detalles del pago -->
        <p id="paymentDetails"></p>
        <!-- Párrafo para mostrar los detalles del pago. Tiene el ID "paymentDetails" -->
        <button class="close-btn" onclick="closeModal()">Cerrar</button>
        <!-- Botón para cerrar el modal. Llama a la función JavaScript "closeModal()" cuando se hace clic -->
    </div>
</div>

<div class="cerrar_carrito hidden"></div>
<!-- Contenedor con la clase "cerrar_carrito" y "hidden", utilizado para ocultar elementos del carrito de compras -->

<div class="container_carrito hidden">
    <!-- Contenedor para el carrito de compras, inicialmente oculto con la clase "hidden" -->
    <h2 class="title__carrito">Productos Guardados</h2>
    <!-- Título de la sección del carrito de compras -->
    <div class="container">
        <!-- Contenedor para los productos guardados en el carrito -->
    </div>
    <div class="pagar-todo">
        <!-- Contenedor para los botones de pago -->
        <button class="card-pay-button" onclick="pagarTodo()">Pagar Todo</button>
        <!-- Botón para pagar todos los productos en el carrito. Llama a la función JavaScript "pagarTodo()" cuando se hace clic -->
        <div class="mostrar_precio">
            <!-- Contenedor para mostrar el precio total -->
            Precio Total: $<span id="total_precio">12314</span>
            <!-- Texto que muestra el precio total con un valor predeterminado de 12314. El valor real se actualizará dinámicamente -->
        </div>
    </div>
</div>

<button class="size-10 p-2 bg-red-500 absolute right-2 top-20 z-10" id="btn-carrito">
    <!-- Botón para abrir el carrito de compras. Tiene clases para el estilo y posicionamiento -->
    <ion-icon name="cart-outline" class="size-full"></ion-icon>
    <!-- Icono de carrito de compras de Ionicons, que se muestra dentro del botón -->
</button>
