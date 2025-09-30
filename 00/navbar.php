<nav>
    <nav style="border:2px solid #007bff; border-radius:8px; padding:0.5em 1em; margin-bottom:1.5em; background:#f8f9fa;">
        <?php
        $current = basename($_SERVER['PHP_SELF']);
        function navLink($file, $label) {
            global $current;
            $active = ($current === $file);
            $style = $active ? 'font-weight:bold; color:#007bff;' : '';
            echo "<a href='$file' style='$style'>$label</a>";
        }
        navLink('home.php', '首頁'); echo ' | ';
        navLink('about.php', '新生茶會'); echo ' | ';
        navLink('contact.php', '宿營');

    ?>
</nav>