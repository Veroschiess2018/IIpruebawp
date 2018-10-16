<?php get_header(); ?>
<body>
   <img src="<?php echo get_theme_file_uri()?>/assets/img/sitio/dimodena.jpg" class="dimodena"><div class="container">

<div class="jumbotron">

<section class="p-0" id="Carousel">
  <div class="container-fluid p-0">
    <h2 class="section-heading text-center p-2">Nuestro Servicio</h2>
    <hr class="my-4">
    <div class="row no-gutters popup-gallery">
      <?php
        $arg = array(
          'post_type'       => 'proyecto',
          'posts_per_page' => 6
        );
        $get_arg = new WP_Query( $arg );
        while ( $get_arg->have_posts() ) {
          $get_arg->the_post();
        ?>

          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="<?php the_post_thumbnail_url( 'large' ); ?>">
              <?php the_post_thumbnail( '', array( 'class' => 'img-fluid' ) ); ?>
              <div class="carousel-box-caption">
                  <div class="portfolio-box-caption-content">
                    <div class="project-category text-faded">
                      <?php the_title() ?>
                    </div>
                    <div class="project-name">
                      <?php the_content() ?>
                    </div>
                  </div>
              </div>
            </a>
          </div>

        <?php } wp_reset_postdata();
      ?>
    </div>
  </div>
</section>
</div>

 <div>
  <script type="text/javascript">
      $(document).ready(function(){
      $("#flip").click(function(){
      $("#panel").slideToggle("slow");
      });
      });
      </script>  
     <div id="flip" class="flip">Haz click aquí para ver NUESTRA CARTA</div>
<div id="panel"> 
   <!-- Galería de platos y/o Menú -->
 <div id="galeria"> 
   <div id="imagen1"> 
      <img src="<?php echo get_theme_file_uri()?>/assets/img/platos/polenta_frita.jpg"> 
      <p>Polenta F.Salsa Arrabiata $5.600</p>
      <p>Palitos de polenta frita con salsa de</p>
   </div>   
   <div id="imagen2"> 
      <img src="<?php echo get_theme_file_uri()?>/assets/img/platos/peperonata.jpg"> 
      <p>Peperonata $4.600</p>
      <p>Láminas de pan de campo al ajo</p>
       
   </div>   
   <div id="imagen3"> 
      <img src="<?php echo get_theme_file_uri()?>/assets/img/platos/provoleta_oregano.jpg">
      <p>Provoleta Al Oreganato $5.200</p> 
      <p>Fundido con tomates al oregano</p>
      
   </div>   
   <div id="imagen4"> 
      <img src="<?php echo get_theme_file_uri()?>/assets/img/platos/melazane_e_prosciuto.jpg">
      <p>Melazane e Prosciuto $7.900</p> 
      <p>Timbal de láminas de berenjena</p>
      
   </div>   
   <div id="imagen5"> 
      <img src="<?php echo get_theme_file_uri()?>/assets/img/platos/insalatta_danubio.jpg"> 
      <p>Insalatta Danubio $6.200</p>
      <p>Selección de berenjenas, alcac</p>
       
   </div>   
   <div id="imagen6"> 
      <img src="<?php echo get_theme_file_uri()?>/assets/img/platos/insalatta_pilarre.jpg"> 
      <p>Insalatta Pilarre $6.500</p>
      <p>Espinacas, panceta crujiente, </p>
       
   </div>  
   <div id="imagen7"> 
      <img src="<?php echo get_theme_file_uri()?>/assets/img/platos/insalatta_andree.jpg"> 
      <p>Insalatta Andree $7.000</p>
      <p>Selección de lechugas, rúcula </p>
       
   </div>
   <div id="imagen8"> 
      <img src="<?php echo get_theme_file_uri()?>/assets/img/platos/zuppa_di_chef.jpg">
      <p>Zuppa Di Chef $5.300</p> 
      <p>Sopa del día seleccionada por el chef</p>
       
   </div>
   <div id="imagen9"> 
      <img src="<?php echo get_theme_file_uri()?>/assets/img/platos/ministrone_genovese.jpg">
      <p>Ministrone Genovese $5.300</p>
      <p>Sopa tradicional Italiana a base</p> 
       
   </div> 
   <div id="imagen10"> 
      <img src="<?php echo get_theme_file_uri()?>/assets/img/platos/marguerita.jpg">
      <p>Margherita $7.200</p> 
      <p>Mozzarella, pomodoro, albahaca</p>
       
   </div> 
   
   <div id="imagen11"> 
      <img src="<?php echo get_theme_file_uri()?>/assets/img/platos/marinara.jpg"> 
      <p>Marinara $5.900</p>
      <p>Pomodoro, láminas de ajo,aceite</p>
       
   </div> 
   <div id="imagen12"> 
      <img src="<?php echo get_theme_file_uri()?>/assets/img/platos/caprissiosa.jpg"> 
      <p>Caprissiosa $7.100</p>
      <p>Mozzarella, pomodoro, champiñ</p>
       
   </div> 
   <div id="imagen13"> 
      <img src="<?php echo get_theme_file_uri()?>/assets/img/platos/cinque_formaggi.jpg"> 
      <p>Cinque Formaggi $7.100</p>
      <p>Mozzarella, queso azul, ricot</p>
       
   </div> 
   <div id="imagen14"> 
      <img src="<?php echo get_theme_file_uri()?>/assets/img/platos/pepperoni.jpg"> 
      <p>Pepperoni $6.200</p>
      <p>Mozzarella, pomodoro, peppero</p>
       
   </div> 
   <div id="imagen15"> 
      <img src="<?php echo get_theme_file_uri()?>/assets/img/platos/putannesca.jpg">
      <p>Putannesca $6.500</p> 
      <p>Mozarella, pomodoro, ajo, pepperoncino</p>
       
          </div> 
   <div id="imagen16"> 
      <img src="<?php echo get_theme_file_uri()?>/assets/img/platos/mediterranea.jpg"> 
      <p>Mediterránea $5.300</p>
      <p>Mozarella, pomodoro,queso de c</p>
       
   </div> 
   <div id="imagen17"> 
      <img src="<?php echo get_theme_file_uri()?>/assets/img/platos/mediterranea.jpg">
      <p>Mediterranea $5.300</p> 
      <p>Mozarella, pomodoro,queso de c</p>
       
   </div> 
   <div id="imagen18"> 
      <img src="<?php echo get_theme_file_uri()?>/assets/img/platos/torino.jpg"> 
      <p>Torino $5.300</p>
      <p>Mozarella, pomodoro, pepperoni</p>
       
   </div> 
   <div id="imagen19"> 
      <img src="<?php echo get_theme_file_uri()?>/assets/img/platos/vegetariana.jpg"> 
      <p>Veggetarianna $7.000</p>
      <p>Mozarella, pomodoro, esparragos</p>
       
   </div> 
   <div id="imagen20"> 
      <img src="<?php echo get_theme_file_uri()?>/assets/img/platos/griega.jpg">
      <p>Griegga $5.300</p> 
      <p>Mozarella, pomodoro,queso de c</p>
       
   </div> 
   <div id="imagen21"> 
      <img src="<?php echo get_theme_file_uri()?>/assets/img/platos/gelato.jpg"> 
      <p>Gelato $2.500</p>
      <p>3 Bolas de helado</p>
       
   </div>
   <div id="imagen22"> 
      <img src="<?php echo get_theme_file_uri()?>/assets/img/platos/gelato_di_ciocolatto.jpg">
      <p>Gelato Di Ciocolatto $2.500</p> 
      <p>3 Bolas de helado</p>
       
   </div>
   <div id="imagen23"> 
      <img src="<?php echo get_theme_file_uri()?>/assets/img/platos/panna_cotta.jpg"> 
      <p>Panna Cotta $3.500</p>
      <p>Postre de crema y manjar</p>
       
   </div> 
   <div id="imagen24"> 
      <img src="<?php echo get_theme_file_uri()?>/assets/img/platos/tiramisu.jpg">
      <p>Tiramisu $3.500</p> 
      <p>Tradicional tiramisú de es</p>
       
   </div> 
   <div id="imagen25"> 
      <img src="<?php echo get_theme_file_uri()?>/assets/img/platos/infusiones.jpg"> 
      <p>Infusiones $1.100</p>
       
   </div> 
   <div id="imagen26"> 
      <img src="<?php echo get_theme_file_uri()?>/assets/img/platos/espresso.jpg"> 
      <p>Caffe Espresso $1.200</p>
       
   </div>  
   <div id="imagen27"> 
      <img src="<?php echo get_theme_file_uri()?>/assets/img/platos/latte.jpg"> 
      <p>Latte $2.100</p>
       
   </div> 
   <div id="imagen28"> 
      <img src="<?php echo get_theme_file_uri()?>/assets/img/platos/moccaccino.jpg"> 
      <p>Moccaccino $2.000</p>
       
   </div>  
</div>
</div> 
</div> 
</body> 
     <?php get_footer (); ?>



