<h1 class="nombre-pagina">Login</h1>
<p class="descripcion-pagina">Inicia sesión con tus datos</p>

<?php include_once __DIR__. '/../templates/alertas.php' ?>

<form action="/" class="formulario" method="POST">
    <div class="campo">
        <label for="email">Email</label>
        <input type="email" id="email" placeholder="Tu Email" name="email">
    </div>
    
    <div class="campo">
        <label for="email">Password</label>
        <input type="password" id="password" placeholder="Tu Password" name="password">
    </div>
    <div style="display: flex; justify-content:end;">
    <input type="submit" class="boton" value="Iniciar Sesion">
    </div>

   
</form>


<div class="acciones">
    <a href="/crear-cuenta">¿Aún no tienes una cuenta? Crear una</a>
    <a href="/olvide">¿Olvidaste tu password?</a>
</div>