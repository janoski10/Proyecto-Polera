<?php
    include 'template/header.php';
?>


    <!--contenido Servicios-->
    <main class="contenedor sombra">
        <div>
            <h2>Contacto</h2>
            <form action="#" method="POST">
                <div>

                    <label>Nombre</label>
                    <input type="text" name="nombre" placeholder="Nombre" required>

                    <label>Correo</label>
                    <input type="mail" name="email" placeholder="email" required>

                    <label>Mensaje</label>
                    <textarea name="nombre" id="Mensaje" cols="30" rows="10"></textarea>

                </div>
                <div>
                    <input type="submit" value="Enviar">
                </div>
            </form>

        </div>
    </main>
    <!--contenido Contacto-->


    <?php
    include 'template/footer.php';
?>
