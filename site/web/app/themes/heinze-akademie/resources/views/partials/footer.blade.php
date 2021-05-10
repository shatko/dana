<footer class="content-info">
  <div class="footer-top">
    <div class="container container__inner">
      <div class="row">
        <div class="col-xl-4">
          <p class="footer-top__title"><strong>Kontakt</strong></p>
          <div class="footer-top__address footer-top__address--left">
            <p><strong>Adresse</strong></p>
            <p><strong>Tel. Zentrale</strong></p>
            <p><strong>Tel. Beratung</strong></p>
            <p><strong>Mo – Do</strong></p>
            <p><strong>Fr</strong></p>
            <p><strong>E-Mail</strong></p>
          </div>
          <div class="footer-top__address footer-top__address--right">
            @php the_field('adresse', 'option'); @endphp
            <p><a href="tel:@php the_field('tel_zentrale_href', 'option'); @endphp">@php the_field('tel_zentrale_text', 'option'); @endphp</a></p>
            <p><a href="tel:@php the_field('tel_beratung_href', 'option'); @endphp">@php the_field('tel_beratung_text', 'option'); @endphp</a></p>
            <p>@php the_field('mo_do', 'option'); @endphp</p>
            <p>@php the_field('fr', 'option'); @endphp</p>
            <p><a class="footer-navigation" href="mailto:@php the_field('e-mail_href', 'option'); @endphp">@php the_field('e-mail_text', 'option'); @endphp</a></p>
          </div>
        </div>
        <div class="col-xl-4">
          <div class="footer-top__info-text">
            @php the_field('info_text', 'option'); @endphp
          </div>
        </div>
        <div class="col-xl-2">
          <p class="footer-top__title">folgen sie uns</p>

          @php
          if( have_rows('socials', 'option') ):
            while( have_rows('socials', 'option') ): the_row();
            @endphp
              <p><a class="footer-navigation" href="@php the_sub_field('link_href'); @endphp" target="_blank">@php the_sub_field('link_text'); @endphp</a></p>
            @php
            endwhile;
          endif;
          @endphp
        </div>
        <div class="col-xl-2">
          <p class="footer-top__title">rechtliches</p>
          <nav class="nav-footer">
            @if (has_nav_menu('footer_navigation'))
              {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav-footer']) !!}
            @endif
          </nav>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container container__inner">
      <div class="row">
        <div class="col-xl-12">
          <p class="footer-bottom__copyright">
          <span class="footer-bottom__copyright--regular">&copy; @php echo date('Y'); @endphp</span><span class="footer-bottom__copyright--bold"> Heinze Akademie GmbH</span>
          </p>
          <div class="footer-bottom__to-top"></div>
        </div>
      </div>
    </div>
  </div>
</footer>
