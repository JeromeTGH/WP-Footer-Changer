<?php
/**
 * @package WP-Footer-Changer
 * @version 1.0.0
 */
/*
Plugin Name: WP-Footer-Changer
Plugin URI: https://github.com/JeromeTGH/WP-Footer-Changer
Description: Filtre de remplacement de pied de page, pour Wordpress
Author: Jérôme TOMSKI
Version: 1.0.0
Author URI: https://github.com/JeromeTGH
*/

// ============================================
// Blocage des appels directs à cette extension
// ============================================
if (!function_exists('add_action')) {
	echo 'Ce plugin ne peut être appelé directement !';
	exit;
}

// =======================
// Retirer l'ancien footer
// =======================
add_filter('neve_filter_toggle_content_parts', 'retirerFooter');

function retirerFooter($contenu) {
    return;
}


// =========================
// Insérer le nouveau footer
// =========================
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