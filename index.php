<?php
session_start();
?>
<!DOCTYPE html>
<html>
<?php include 'views/head.php'; ?>

<body>
    <?php

    if (isset($_SESSION['id'])) {
        include 'views/navbar.php';
    ?>
        <div class="main">
            <?php
            if (isset($_REQUEST['page'])) {
                $path = "controllers/" . $_REQUEST['page'] . ".php";
                if (file_exists($path)) {
                    include_once $path;
                } else {
                    echo "Page inexistante.";
                }
            } else {
                include 'controllers/home.php';
            }
            ?>
        </div>
    <?php
    } else {
        include 'controllers/login.php';
    }

    ?>
</body>

</html>
<script>
    // Responsive navbar
    $(document).ready(function() {

        // Check for click events on the navbar burger icon
        $(".navbar-burger").click(function() {

            // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
            $(".navbar-burger").toggleClass("is-active");
            $(".navbar-menu").toggleClass("is-active");

        });

        if($( document ).height() > $( window ).height())
        {
            $('#footer').css('position', 'relative');
        }
    });

</script>