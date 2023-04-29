<?php
/**
 * @package WP-Footer-Filter
 * @version 1.0.0
 */
/*
Plugin Name: WP-Footer-Filter
Plugin URI: https://github.com/JeromeTGH/WP-Footer-Filter
Description: Filtre de remplacement de pied de page, pour Wordpress
Author: Jérôme TOMSKI
Version: 1.0.0
Author URI: https://github.com/JeromeTGH
*/


// ====================================
// Retirer l'ancien footer
// ====================================
add_filter('neve_filter_toggle_content_parts', 'retirerFooter');

function retirerFooter($contenu) {
    return;
}


// ====================================
// Insérer le nouveau footer
// ====================================
add_filter('wp_footer', 'ajouterNouveauFooter');

function ajouterNouveauFooter() {
    $footerPersonnalise = '<p>Mon footer personnalisé ici !</p>';

    $structureFooter = '
<footer class="site-footer" id="site-footer">
    <div class="container">'.$footerPersonnalise.'</div>
</footer>
    ';

    echo $structureFooter;
}