<!DOCTYPE html>
<?php
/*
 * File: home.php
 * Desc: Entry point for the Single Page Application (SPA). This file initializes configurations, handles routing, and loads the main structure of the SPA, including the header, content container, and footer. The page also includes necessary CSS and JS resources.
 * Deps: _var.php, _common.php, _functions.php, _plugin.php, _routes.php, _router.php
 * Copyright (c) 2025 Andrés Trujillo [Mateus] byUwUr
 */
ini_set('display_errors', 0);
// Sets a flag to enable the inclusion of local storage variables in the HTML output
$setLocalStorage = true;
// Include the main variable configuration file
require_once "./_var.php";
// Include common functions and initializations
require_once "{$TO_HOME}/spa.php/_common.php";
// Include utility functions
require_once "{$TO_HOME}/spa.php/_functions.php";
//require_once "{$TO_HOME}/_functions.php";
// Include composer libraries
//require_once "{$TO_HOME}/spa.php/_plugins.php";
require_once "{$TO_HOME}/_plugins.php";
// Include database connections
//require_once "{$TO_HOME}/_config.php";
// Load the routes configuration
require_once "{$TO_HOME}/_routes.php";
// Route the request based on the URI
require_once "{$TO_HOME}/spa.php/_router.php";
// Include auth management
//require_once "{$TO_HOME}/spa.php/_auth.php";
//require_once "{$TO_HOME}/_auth.php";
// Include common functions and initializations that may require "/_routes.php"
require_once "{$TO_HOME}/_common.php";

// --- PHP ---
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>FGC Tourney | byUwUr</title>
    <link rel="icon" id="page-icon" type="image/png" href="<?= "{$HOME_PATH}/img/favicon.png" ?>" />
    <link rel="apple-touch-icon" href="<?= "{$HOME_PATH}/img/favicon.png" ?>" />
    <link rel="stylesheet" href="<?= "{$HOME_PATH}/spa.php/css/swiper.min.css" ?>" />
    <link rel="stylesheet" href="<?= "{$HOME_PATH}/spa.php/css/bootstrap.min.css" ?>" />
    <link rel="stylesheet" href="<?= "{$HOME_PATH}/spa.php/css/fontawesome.min.css" ?>" />
    <link rel="stylesheet" href="<?= "{$HOME_PATH}/spa.php/_common.css" ?>" />
    <script src="<?= "{$HOME_PATH}/spa.php/js/swiper.min.js" ?>" defer></script>
    <script src="<?= "{$HOME_PATH}/spa.php/js/jquery.min.js" ?>" defer></script>
    <script src="<?= "{$HOME_PATH}/spa.php/js/popper.min.js" ?>" defer></script>
    <script src="<?= "{$HOME_PATH}/spa.php/js/bootstrap.min.js" ?>" defer></script>
    <script src="<?= "{$HOME_PATH}/spa.php/_functions.js" ?>" defer></script>
    <script src="<?= "{$HOME_PATH}/spa.php/_common.js" ?>" defer></script>
    <script src="<?= "{$HOME_PATH}/spa.php/_spa.js" ?>" defer></script>
    <script src="https://www.google.com/recaptcha/api.js" defer></script>
    <style>
        :root {
            --primary-color: #100;
        }

        #spa-loader {
            background: var(--primary-color);
        }
    </style>
</head>

<body>
    <!-- byuwur/spa.php | Copyright (c) 2025 Andrés Trujillo [Mateus] byUwUr -->
    <div id="spa-loader">
        <div class="load-circle-back"></div>
        <div class="load-circle-fore"></div>
        <div class="load-text">
            <?= "{$_v}" ?><br><br><br>
            <?= "{$_load}" ?><br>
            <a class="btn btn-tertiary" href='javascript:location.reload();'><?= "{$_reload}" ?></a>
        </div>
    </div>
    <div id="bywr-accessibility">
        <a href="javascript:byCommon.accessibilityToggle();" data-bs-toggle="tooltip" data-bs-title="Accesibilidad" title="Accesibilidad">
            <i class="fas fa-universal-access"></i>
        </a>
        <div id="bywr-accessibility-buttons" class="hide">
            <a href="javascript:byCommon.accessibilityText('plus');" data-bs-toggle="tooltip" data-bs-title="Aumentar tamaño de texto" title="Aumentar tamaño de texto">
                <i class="fas fa-magnifying-glass-plus"></i>
            </a>
            <a href="javascript:byCommon.accessibilityText();" data-bs-toggle="tooltip" data-bs-title="Reiniciar tamaño de texto" title="Reiniciar tamaño de texto">
                <i class="fas fa-magnifying-glass"></i>
            </a>
            <a href="javascript:byCommon.accessibilityText('minus');" data-bs-toggle="tooltip" data-bs-title="Disminuir tamaño de texto" title="Disminuir tamaño de texto">
                <i class="fas fa-magnifying-glass-minus"></i>
            </a>
            <a href="javascript:byCommon.accessibilityMotion();" data-bs-toggle="tooltip" data-bs-title="Alternar animaciones" title="Alternar animaciones">
                <i class="fas fa-wind"></i>
            </a>
            <a href="javascript:byCommon.accessibilityDyslexia();" data-bs-toggle="tooltip" data-bs-title="Apto para dislexia" title="Apto para dislexia">
                <i class="fas fa-font"></i>
            </a>
            <a href="javascript:byCommon.accessibilityWordSpacing();" data-bs-toggle="tooltip" data-bs-title="Texto espaciado" title="Texto espaciado">
                <i class="fas fa-text-width"></i>
            </a>
            <a href="javascript:byCommon.accessibilityHighlightLinks();" data-bs-toggle="tooltip" data-bs-title="Resaltar enlaces" title="Resaltar enlaces">
                <i class="fas fa-link"></i>
            </a>
            <a href="javascript:byCommon.accessibilityHighContrast();" data-bs-toggle="tooltip" data-bs-title="Alto contraste" title="Alto contraste">
                <i class="fas fa-circle-half-stroke"></i>
            </a>
            <a href="javascript:byCommon.accessibilityHighContrast('invertchropia');" data-bs-toggle="tooltip" data-bs-title="Invertir colores" title="Invertir colores">
                <i class="fas fa-droplet"></i>
            </a>
            <a href="javascript:byCommon.accessibilityHighContrast('monochropia');" data-bs-toggle="tooltip" data-bs-title="Escala de grises" title="Escala de grises">
                <i class="fas fa-droplet-slash"></i>
            </a>
            <a href="javascript:byCommon.accessibilityHighContrast('protanopia');" data-bs-toggle="tooltip" data-bs-title="Protanopia" title="Protanopia">
                <i class="fas fa-eye"></i>
            </a>
            <a href="javascript:byCommon.accessibilityHighContrast('deuteranopia');" data-bs-toggle="tooltip" data-bs-title="Deuteranopia" title="Deuteranopia">
                <i class="fas fa-eye-slash"></i>
            </a>
            <a href="javascript:byCommon.accessibilityHighContrast('tritanopia');" data-bs-toggle="tooltip" data-bs-title="Tritanopia" title="Tritanopia">
                <i class="fas fa-eye-low-vision"></i>
            </a>
        </div>
    </div>
    <nav id="spa-nav"></nav>
    <main id="spa-content"></main>
    <footer id="spa-foot"></footer>
</body>

</html>
<?php
while (ob_get_level() > 0) ob_end_flush();
?>