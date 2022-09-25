<?php
  get_header();
?>

  <!-- ***** Main Banner Area Start ***** -->
    <?php
      get_template_part('template-part/content', 'mainbanner');
    ?>
  <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Features Area Start ***** -->
    <?php
      get_template_part('template-part/content', 'features');
    ?>
  <!-- ***** Features Area End ***** -->


  <!-- ***** Upcoming Course Area Start ***** -->
    <?php
      get_template_part('template-part/content', 'upcoming');
    ?>
  <!-- ***** Upcoming Course Area End ***** -->


  <!-- ***** Course Area Start ***** -->
    <?php
      get_template_part('template-part/content', 'courses');
    ?>
  <!-- ***** Course Area End ***** -->


  <!-- ***** Video Area Start ***** -->
    <?php
      get_template_part('template-part/content', 'video');
    ?>
  <!-- ***** Video Area End ***** -->


  <!-- ***** Contact Area Start ***** -->
    <?php
      get_template_part('template-part/content', 'contact');
    ?>
  <!-- ***** Contact Area End ***** -->


<?php
  get_footer();
?>