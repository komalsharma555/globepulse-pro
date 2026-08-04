<?php
/**
 * Theme Footer
 *
 * @package GlobePulse_Pro
 */
?>

</div><!-- #content -->

<footer class="gp-footer">

    <div class="container">

        <div class="footer-top">

            <div class="footer-about">

                <h2><?php bloginfo( 'name' ); ?></h2>

                <p>
                    Smart News For Smart Readers. Get the latest updates on
                    Technology, Sports, Education, Politics, Business and Travel.
                </p>

            </div>

            <div class="footer-menu">

                <h3>Quick Links</h3>

                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'footer',
                        'container'      => false,
                        'menu_class'     => 'footer-links',
                    )
                );
                ?>

            </div>

            <div class="footer-social">

                <h3>Follow Us</h3>

                <a href="#" target="_blank">Facebook</a><br>
                <a href="#" target="_blank">X</a><br>
                <a href="#" target="_blank">Instagram</a><br>
                <a href="#" target="_blank">YouTube</a><br>
                <a href="#" target="_blank">LinkedIn</a><br>
                <a href="#" target="_blank">Telegram</a><br>
                <a href="#" target="_blank">WhatsApp</a>

            </div>

        </div>

        <hr>

        <div class="footer-bottom">

            <p>

                &copy; <?php echo date('Y'); ?>

                <?php bloginfo('name'); ?>

                | All Rights Reserved.

            </p>

            <button id="backToTop">

                ↑ Back To Top

            </button>

        </div>

    </div>

</footer>

<script>

const topButton=document.getElementById("backToTop");

if(topButton){

topButton.onclick=function(){

window.scrollTo({

top:0,

behavior:"smooth"

});

};

}

</script>

<?php wp_footer(); ?>

</body>
</html>
