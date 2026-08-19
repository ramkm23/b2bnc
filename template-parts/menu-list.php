
<?php 
wp_nav_menu( array(
  'theme_location' => 'header-menu',
  'container' => 'nav',
  'container_class' => 'main-navigation',
  'container_id' => 'nav-menu-container',
  'menu_class' => 'nav-menu',
  'fallback_cb' => false
) ); ?>

<script>
    document.querySelectorAll('.menu-item').forEach(item => {
  item.addEventListener('mouseenter', () => {
    const submenu = item.querySelector('.sub-menu');
    if (submenu) {
      submenu.style.display = 'block';
      const rect = submenu.getBoundingClientRect();
      submenu.style.display = '';

      if (rect.right > window.innerWidth) {
        item.classList.add('flip-left');
      } else {
        item.classList.remove('flip-left');
      }
    }
  });
});

</script>