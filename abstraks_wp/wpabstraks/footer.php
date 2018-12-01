
        <footer class="main-footer">
			<script src="./wp-content/themes/wpabstraks/js/main.js"></script>
            <script src="http://code.jquery.com/jquery.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
			<p>&copy; Copyright <?php echo date( 'Y' ); ?> Abstraks LLC. All Rights Reserved. </p>
            <?php
                
                    $args = array(
                        'menu' => 'footer-menu'
                    );
                    
                    wp_nav_menu( $args );
                ?>
		</footer>
		<?php wp_footer() ;?>
    </body>
</html>