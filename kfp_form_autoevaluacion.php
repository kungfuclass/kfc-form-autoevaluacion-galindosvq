<?php
/**
 * Plugin Name:  KFP Formulario Autoevaluación
 * Description:  Formulario para valorar el nivel de partida de los usuarios en distintos temas. 
 * Utiliza el shortcode [kfp_aspirante_form] para que el formulario 
 * aparezca en la página o el post que desees.
 * Version:      0.1.1
 * Author:       Pequeño Saltamontes
 * Author URI:   https://kungfupress.com/
 * PHP Version:  5.6
 *
 * @category Form
 * @package  KFP
 * @author   Pequeño Saltamontes <pequesalta@gmail.com>
 * @license  GPLv3 http://www.gnu.org/licenses/gpl-3.0.txt
 * @link     https://kungfupress.com
 */
 
 // Activación del plugin
 
 // Creación del shortcode

 add_shortcode( 'kfp_aspirante_form', 'Kfp_Aspirante_form' );


/**
 *  Funcion que ejecutará el shortcode, 
 *  pinta el formulario que no hace nada
 *  @return string
 */


 function Kfp_Aspirante_form() 
{
    // Esta función de PHP activa el almacenamiento en búfer de salida (output buffer)
    // Cuando termine el formulario lo imprime con la función ob_get_clean
    ob_start();
    ?>
    <form action="<?php get_the_permalink(); ?>" method="post" id="form_aspirante"class="cuestionario">
        <div class="form-input">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" required>
        </div>
        <div class="form-input">
            <label for='correo'>Correo</label>
            <input type="email" name="correo" id="correo" required>
        </div>
        <div class="form-input">
            <label for="nivel_html">¿Cuál es tu nivel de HTML?</label>
            <input type="radio" name="nivel_html" value="1" required> Nada
            <br><input type="radio" name="nivel_html" value="2" required> Estoy 
                aprendiendo
            <br><input type="radio" name="nivel_html" value="3" required> Tengo 
                experiencia
            <br><input type="radio" name="nivel_html" value="4" required> Lo 
                domino al dedillo
        </div>
        <div class="form-input">
            <label for="nivel_css">¿Cuál es tu nivel de CSS?</label>
            <input type="radio" name="nivel_css" value="1" required> Nada
            <br><input type="radio" name="nivel_css" value="2" required> Estoy 
                aprendiendo
            <br><input type="radio" name="nivel_css" value="3" required> Tengo 
                experiencia
            <br><input type="radio" name="nivel_css" value="4" required> Lo 
                domino al dedillo
        </div>
        <div class="form-input">
            <label for="nivel_js">¿Cuál es tu nivel de JavaScript?</label>
            <input type="radio" name="nivel_js" value="1" required> Nada
            <br><input type="radio" name="nivel_js" value="2" required> Estoy 
                aprendiendo
            <br><input type="radio" name="nivel_js" value="3" required> Tengo 
                experiencia
            <br><input type="radio" name="nivel_js" value="4" required> Lo domino 
al dedillo
        </div>
        <div class="form-input">
            <label for="aceptacion">La información facilitada se tratará 
            con respeto y admiración.</label>
            <input type="checkbox" id="aceptacion" name="aceptacion" 
value="1" required> Entiendo y acepto las condiciones
        </div>
        <div class="form-input">
            <input type="submit" value="Enviar">
        </div>
    </form>
    <?php
    
    // Devuelve el contenido del buffer de salida
    return ob_get_clean();
}
 
 // Creación del menú de administración
 
 // Creación de la tabla de resultados

 // Función auxiliar para capturar la IP del usuario 
