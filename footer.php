<section class="contact box-min bg--blue-dark">
      <div class="max-width text--center">
        <div class="contact__box grid-1_1-medium-2">
          <div class="contact__left text--p1 text--white"><img src="<?php bloginfo('template_directory') ?>/img/logo-nuevasemana.png" alt=""/>
            <p>LA NUEVA SEMANA, INC.  </p>
            <p>PO BOX 2344 Paletine, IL 60078 </p>
            <p>Telefono (847) 239-4815</p>
            <p>Fax (847) 890-6327 </p>
            <p>info@lanuevasemana.com</p>
          </div>
          <div id="suscribete" class="contact__form">
            <div class="contact__information">
              <h2 class="title--sub2 text--white">Contáctanos</h2>
              <p class="text--p1 text--white">Queremos escuchar lo que tienes que decir</p>
            </div>
            <div class="contact__formulario">
              <form action="enviamail1.php" method="post" class="funcionesform">
                <div class="form__group">
                  <label for="nombre">Nombre</label>
                  <input id="nombre" type="text" name="nombre" placeholder="Tu nombre" required="required" class="form__control"/>
                </div>
                <div class="form__group">
                  <label for="email">Email</label>
                  <input id="email" type="email" name="email" placeholder="Tu correo" required="required" class="form__control"/>
                </div>
                <div class="form__group">
                  <label mensaje="mensaje">Mensaje</label>
                  <textarea id="mensaje" name="mensaje" placeholder="Tu mensaje" required="required" class="form__control"></textarea>
                </div>
                <div class="form__submit">
                  <input id="submit" type="submit" name="submit" value="Enviar Mensaje"/>
                </div>
                <div id="form-messages"></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer class="bg--blue-light text--center">
    <p class="text--p1 text--white">Diseñado por Dilo Digital</p>
  </footer>

</body>