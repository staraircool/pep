<?php
if (!is_active_sidebar('sidebar-1')) {
    return;
}
?>
<aside class="bg-zinc-50 border-2 border-black p-6">
    <?php dynamic_sidebar('sidebar-1'); ?>
</aside>
