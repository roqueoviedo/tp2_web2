<a>ESTE ES EL PANEL DE ADMINISTRADOR</a>

<div class="nuevaPelicula">
<h1>Nueva pelicula</h1>  
<form id="nuevaPelicula" action='nuevaPelicula' method="post">
    <input type="text" name="titulo" id="titulo" placeholder="Ingrese un titulo de una pelicula" required>
    <input type="text" name="anio" id="anio" placeholder="Ingrese el año" required>
    <input type="text" name="director" id="director" placeholder="Ingrese el director" required>
    <input type="text" name="clasificacion" id="clasificacion" placeholder="Ingrese la clasificacion" required>
    <input type="text" name="sinopsis" id="sinopsis" placeholder="Ingrese la sinopsis" required>

    <select name="fk_genero" required>
    <option value="">Seleccionar un genero</option>

    {foreach from = $genero item = $genre}
        
        <option value="{$genre->id_genero}"> {$genre->genero}</option>
        
        {/foreach}
    </select>

    <input type="submit" value="Enviar">


    <div class="borrarPelicula">
    <h1>Borrar pelicula</h1>  
    <form id="nuevaPelicula" action='nuevaPelicula' method="post">
        <input type="text" name="titulo" id="titulo" placeholder="Ingrese un titulo de una pelicula" required>
        <input type="text" name="anio" id="anio" placeholder="Ingrese el año" required>
        <input type="text" name="director" id="director" placeholder="Ingrese el director" required>
        <input type="text" name="clasificacion" id="clasificacion" placeholder="Ingrese la clasificacion" required>
        <input type="text" name="sinopsis" id="sinopsis" placeholder="Ingrese la sinopsis" required>
    
        <select name="fk_genero" required>
        <option value="">Seleccionar un genero</option>
    
        {foreach from = $genero item = $genre}
            
            <option value="{$genre->id_genero}"> {$genre->genero}</option>
            
            {/foreach}
        </select>
    
        <input type="submit" value="borrar">
    


</form>
</div>
