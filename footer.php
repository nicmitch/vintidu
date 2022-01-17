    </main>
    <footer class="">
        <div class="row align-right">
            <div class="column shrink">
                <small>© <?php echo get_bloginfo( 'sitename' ) . ' ' . date('Y'); ?></small>
            </div>
        </div>
    </footer>

    </div><!-- animsition -->
    
    <script>
      var ajaxUrl = "<?php echo admin_url('admin-ajax.php'); ?>";
      var tmp_url = "<?php echo get_template_directory_uri(); ?>";
    </script>
    <?php wp_footer(); ?>
  </body>
</html>