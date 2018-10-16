<footer>
	<!-- Dirección y ubicación -->
  <div class="direccion">
    <ul>
      <li-2>Av. Colón 161, Providencia </li>
      <li-2>Teléfono: +56 2 2345 4653</li>
      <li-2>Facebook: ilfontidimodena</li>
      <li-2>twitter: @ilfontidimodena</li>
      <li-2>instagram: ilfontidimodena</li>
       
    </ul>
    <?php if ( is_active_sidebar( 'widget_footer' ) ) {
    dynamic_sidebar( 'widget_footer' );
}; ?>
  </div>
    <div class="container-contenedor">
    <div class="row">
      <div class="col-6">

      <?php echo do_shortcode('[contact-form-7 id="20" title="Formulario de contacto 1"]') ?>
     
  </div> 
<div>
	<!-- Google Maps -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3330.2409800959836!2d-70.56362048520921!3d-33.41696120317951!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662cefaab864c33%3A0xe0f0903e7a8e6fd4!2sAv.+Cristobal+Colon%2C+Las+Condes%2C+Regi%C3%B3n+Metropolitana!5e0!3m2!1ses!2scl!4v1536875812442" width="900" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    <?php wp_footer() ?>
</div>
</div>
</div>
</footer>