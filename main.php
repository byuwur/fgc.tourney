<?php
require_once "./_var.php";
require_once "{$TO_HOME}/spa.php/_common.php";
//require_once "{$TO_HOME}/spa.php/_functions.php";
//require_once "{$TO_HOME}/_functions.php";
//require_once "{$TO_HOME}/spa.php/_plugins.php";
//require_once "{$TO_HOME}/_plugins.php";
//require_once "{$TO_HOME}/_config.php";
require_once "{$TO_HOME}/_routes.php";
//require_once "{$TO_HOME}/spa.php/_router.php";
//require_once "{$TO_HOME}/spa.php/_auth.php";
//require_once "{$TO_HOME}/_auth.php";
//require_once "{$TO_HOME}/_common.php";
// --- PHP ---
?>
<div>
    Hello, world.
</div>
<script>
    $(() => {
        byCommon.init();
    });
</script>
<?php
while (ob_get_level() > 0) ob_end_flush();
?>