@php
$activate = get_field('activate', 'option');
if (!empty($activate)) {
  @endphp
  <div class="marquee">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="justify-content-between align-items-center">
            <marquee class="marquee__text" behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
              <span>
                {{ get_field('text', 'option') }}
              </span>
            </marquee>
          </div>
        </div>
      </div>
    </div>
  </div>
  @php
}
@endphp

<header class="banner">
  <div class="container">
    <div class="row banner__row">
      <div class="col-xl-12 banner__wrapper">
        <a class="brand" href="{{ home_url('/') }}"></a>
        <nav class="nav-primary">
          @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
          @endif
        </nav>

        <div class="button-wrapper-outer">
        @php
          if( have_rows('header_buttons', 'option') ):
            while ( have_rows('header_buttons', 'option') ) : the_row();

              // Case: Button
              if( get_row_layout() == 'buttons' ):

              @endphp
                @include('partials.button-sub-field')
              @php

              endif;
            endwhile;
          else :
              // Do something...
          endif;
        @endphp
        </div>
      </div>
    </div>
  </div>
</header>
