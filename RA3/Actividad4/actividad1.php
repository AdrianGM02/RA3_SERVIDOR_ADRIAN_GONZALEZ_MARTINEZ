


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $sexo = $_POST["sexo"];
    $fecha_nacimiento = $_POST["fecha_nacimiento"];
    $experiencia = $_POST["experiencia"];
    $nivel_experiencia = $_POST["nivel_experiencia"];
    $habilidades = $_POST["habilidades"];
    $cv = $_FILES["cv"]["name"];
    $foto_perfil = $_FILES["foto_perfil"]["name"];

}
?>




<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Currículum</title>
</head>
<body>
    <h1>Formulario de Currículum</h1>

    <form action="procesar.php" method="post">
        <h2>Información Personal</h2>
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" ><br><br>

        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" ><br><br>

        <label>Sexo:</label>
        <input type="radio" name="sexo" value="Masculino" required> Masculino
        <input type="radio" name="sexo" value="Femenino" required> Femenino
        <input type="radio" name="sexo" value="Otro" required> Otro<br><br>

        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
        <input type="date" name="fecha_nacimiento" required><br><br>

        <h2>Experiencia Laboral</h2>
        <label for="experiencia">¿Tiene experiencia laboral?</label>
        <input type="checkbox" name="experiencia" value="Sí"> Sí
        <input type="checkbox" name="experiencia" value="No"> No<br><br>

        <label for="nivel_experiencia">Nivel de Experiencia:</label>
        <select name="nivel_experiencia">
            <option value="Principiante">Principiante</option>
            <option value="Intermedio">Intermedio</option>
            <option value="Experto">Experto</option>
        </select><br><br>

        <label for="habilidades">Habilidades:</label>
        <select name="habilidades[]" multiple>
            <option value="Programación">Programación</option>
            <option value="Diseño gráfico">Diseño gráfico</option>
            <option value="Gestión de proyectos">Gestión de proyectos</option>
        </select><br><br>

        <h2>Adjuntar Currículum Vitae (PDF o Word):</h2>
        <input type="file" name="cv" accept=".pdf,.doc,.docx"><br><br>

        <h2>Foto de Perfil:</h2>
        <input type="file" name="foto_perfil" accept="image/*"><br><br>

        <input type="submit" value="Enviar">
        <input type="reset" value="Limpiar">
    </form>
</body>
</html>
