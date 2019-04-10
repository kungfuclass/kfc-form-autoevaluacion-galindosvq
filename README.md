# kfp_form_autoevaluacion
Plugin de WordPress para implementar un formulario de autoevaluación para usuarios

## Requisitos
En este ejercicio debes desarrollar un plugin que implemente un shortcode que permita añadir un formulario de autoevalución a una entrada o página.

El formulario debe solicitar, al menos: 
 * nombre y apellidos
 * correo electrónico
 * nivel de conocimientos en varias materias (evaluado a de 0 a 5)
 * conformidad con el tratamiento de datos

El plugin debe comprobar en el momento de su activación si existe la tabla para recoger los datos en la base de datos de WordPress y crearla en caso de que no exista.

También debe implementar un nuevo menú en el panel de administración que dará acceso a una tabla con los datos recogidos a través del formulario.

El plugin debe implementar medidas para comprobar que el usuario ha rellenado todos los datos, filtrar los datos antes de grabarlos en la base de datos y escaparlos antes de mostrarlos en el panel de administración.

## Propuestas de mejora
  * Enviar un correo al administrador del sitio cuando se envíe un formulario.
  * Generar las preguntas de conocimientos a través de un array y un bucle que vaya creando los inputs del formulario.
  * Cuando el usuario envíe el formulario llevarlo a una nueva página de confirmación.
