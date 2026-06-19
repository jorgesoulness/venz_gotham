	    <?php get_template_part( 'template-parts/footer/footer-main' ); ?>
      <a href="#" class="scrollToTop scroll-btn"><i class="far fa-arrow-up"></i></a>
    <?php wp_footer(); ?>
    <script>
      document.addEventListener('wpcf7mailsent', function(event) {
        const modalEl = document.getElementById('contactModal');
        if (!modalEl) {
          return;
        }
        const modal = bootstrap.Modal.getInstance(modalEl);
        if (modal) {
          modal.hide();
        }
      });
    </script>
  </body>
</html>
