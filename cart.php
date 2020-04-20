<?php
require 'inc/head.php';
if (!isset($_SESSION['name'])) {
    header('Location: index.php');
}
?>
<section class="cookies container-fluid">
    <div class="row">
        <?php
        foreach ($_SESSION['cart'] as $cookieName => $name) {
            foreach ($name as $item) {
                echo $item.'<br/>';
            }
        }
        ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
