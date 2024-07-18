<?php
//Captura de datos
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$consult = $_POST['consult'];

$message = " 
<ul>
    <li><strong>Nombre: </strong> $name</li>
    <li><strong>Correo: </strong> $email</li>
    <li><strong>Asunto: </strong> $subject</li>
    <li><strong>Consulta: </strong> $consult</li>
</ul>";
//generacion del mensaje
mail(
    "usuario@ihosting.com",
    $subject,
    $consult,
    "From: $name<$email>"
);

//redireccionamiento
//header("location: ../community.html")
echo $message
?>

<h1>Fundamentos Web</h1>
<p>
    Le agradecemos por confiar en nosotros, su consulta sera contestada a la brevedad. Mientras puede <a href="../community.html">Volver a la pagina anterior</a> para ver mas novedades.
</p>
<a href="../community.html">Volver a la pagina anterior</a>