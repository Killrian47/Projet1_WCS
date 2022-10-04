    
    <footer>
        <div class="footer_bis">

            <?php
                
                $path = '';
                if ($path == 'localhost:8080/index-fr.php') {
                    echo '<p>' .$footerFR. '</p>';
                } else {
                    echo '<p>'. $footerEN . '</p>';
                }
            ?>
            
            <a href="#"><i class="fas fa-arrow-up up"></i></a>
        </div>
        <script src="assets/script.js"></script>
    </footer>
    
    </body>
</html>