<footer style="background-color: #0B0D0E;" class="pt-4 pb-4">
        <div class="container">
            <div class="container-fluid">
                <div class="row">
                    <div class="copyright text-center">
                        <p class="copyright__paragraph">COPYRIGHT © 2022 BY <strong> ROGGER PALOMINO </strong>THEME ALL RIGHT RESERVED</p>
                    </div>
                </div>
            </div>
        </div>  
    </footer>
    <?php wp_footer(); ?>
</body>
<script>
    $(window).scroll(function() {
    if ($(".header").offset().top > 56) {
        $("header").addClass("active-submenu");
  
    } else {
        $("header").removeClass("active-submenu");
    }   
    });
    const currentLocation = location.href;
    const menuItem = document.querySelectorAll('#primary-menu a');
    const menuLenght = menuItem.length
    for (let i = 0; i < menuLenght; i++) {
        if (menuItem[i].href === currentLocation) {
            menuItem[i].className = "active"
        }
    }
</script>
</html>