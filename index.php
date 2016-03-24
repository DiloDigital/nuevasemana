<?php get_header(); ?> <!-- header -->

  <main id="main" role="main">
    <section class="banner bg--blue box">
      <div class="max-width text--center">
        <h1 class="title--main text--white">La Nueva Semana</h1>
        <p class="text--p2 text--white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam magni, optio quidem nesciunt dolores velit consectetur</p>
        <a href="#suscribete" class="btn__suscribete">Suscríbete</a>
      </div>
    </section>
    <section class="noticias bg--white box">
      <div class="max-width text--center">
        <h2 class="title--sub2">Ultimas Noticias</h2>
        <div class="noticias__box grid-2-medium-4">
          <div class="noticias__item">
               <a href="#">
                 <img src="<?php bloginfo('template_directory') ?>/img/imagen.jpg" alt="" class="img-responsive"/>
                </a>
          </div>
          <div class="noticias__item"><a href="#"><img src="<?php bloginfo('template_directory') ?>/img/imagen.jpg" alt="" class="img-responsive"/></a></div>
          <div class="noticias__item"><a href="#"><img src="<?php bloginfo('template_directory') ?>/img/imagen.jpg" alt="" class="img-responsive"/></a></div>
          <div class="noticias__item"><a href="#"><img src="<?php bloginfo('template_directory') ?>/img/imagen.jpg" alt="" class="img-responsive"/></a></div>
          <div class="noticias__item"><a href="#"><img src="<?php bloginfo('template_directory') ?>/img/imagen.jpg" alt="" class="img-responsive"/></a></div>
          <div class="noticias__item"><a href="#"><img src="<?php bloginfo('template_directory') ?>/img/imagen.jpg" alt="" class="img-responsive"/></a></div>
          <div class="noticias__item"><a href="#"><img src="<?php bloginfo('template_directory') ?>/img/imagen.jpg" alt="" class="img-responsive"/></a></div>
          <div class="noticias__item"><a href="#"><img src="<?php bloginfo('template_directory') ?>/img/imagen.jpg" alt="" class="img-responsive"/></a></div>
        </div><a href="#suscribete" class="btn__suscribete">Suscríbete</a>
      </div>
    </section>
    <section class="ediciones bg--blue-dark box">
      <div class="max-width text--center">
        <h2 class="title--sub3 text--white">Ediciones Impresas</h2>
        <div class="ediciones__box grid-2-medium-4">
          <div class="ediciones__item"><img src="<?php bloginfo('template_directory') ?>/img/imagen2.jpg" alt="" class="img-responsive"/></div>
          <div class="ediciones__item"><img src="<?php bloginfo('template_directory') ?>/img/imagen2.jpg" alt="" class="img-responsive"/></div>
          <div class="ediciones__item"><img src="<?php bloginfo('template_directory') ?>/img/imagen2.jpg" alt="" class="img-responsive"/></div>
          <div class="ediciones__item"><img src="<?php bloginfo('template_directory') ?>/img/imagen2.jpg" alt="" class="img-responsive"/></div>
        </div>
        <div class="sort text--p1 grid-2-medium-4 text--white">
          <div class="collection-sort">
            <label>Año</label>
            <select>
              <option value="var">Año</option>
              <option value="var">2016</option>
              <option value="var">2015</option>
              <option value="var">2014</option>
              <option value="var">2013</option>
            </select>
          </div>
          <div class="collection-sort">
            <label>Mes</label>
            <select>
              <option value="var">Mes</option>
              <option value="var">Dic</option>
              <option value="var">Ago</option>
              <option value="var">Abril</option>
              <option value="var">Ene</option>
            </select>
          </div>
          <div class="collection-sort">
            <label>Dia</label>
            <select>
              <option value="var">Dia</option>
              <option value="var">31</option>
              <option value="var">16</option>
              <option value="var">08</option>
              <option value="var">01</option>
            </select>
          </div><a href="#" class="btn__descarga">Descarga</a>
        </div>
      </div>
    </section>
    <section class="suscribe wrap--small bg--white box">
      <div class="max-width text--center">
        <h2 class="title--sub2 text--black">¿Por que Suscribirte?</h2>
        <div class="suscribe__box grid-2-medium-3">
          <div class="suscribe__item"><img src="<?php bloginfo('template_directory') ?>/img/imagen3.jpg" alt="" class="img-responsive"/></div>
          <div class="suscribe__item"><img src="<?php bloginfo('template_directory') ?>/img/imagen3.jpg" alt="" class="img-responsive"/></div>
          <div class="suscribe__item"><img src="<?php bloginfo('template_directory') ?>/img/imagen3.jpg" alt="" class="img-responsive"/></div>
        </div><a href="#suscribete" class="btn__suscribete">Suscríbete</a>
      </div>
    </section>
    <?php get_footer(); ?>