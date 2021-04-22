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



        @php
          if( have_rows('header_buttons', 'option') ):
            while ( have_rows('header_buttons', 'option') ) : the_row();

              // Case: Button
              if( get_row_layout() == 'buttons' ):
                @endphp


                @php
                  $layout           = get_sub_field('layout');
                  $button_text      = get_sub_field('button_text');
                  $button_url       = get_sub_field('button_url');
                  $negative_layout  = get_sub_field('negative_layout');
                  $insert_icon      = get_sub_field('insert_icon');
                  $background_color = get_sub_field('background_color');
                  $orientation      = get_sub_field('orientation');
                  $bottom_margin    = get_sub_field('bottom_margin');
                  $disabled         = get_sub_field('disabled');

                  if ($button_url === 'page') {
                    $link = get_field('page');
                    $target = 'target="_blank"';
                  } else if ($button_url === 'external') {
                    $link = get_field('external');
                    $target = 'target="_self"';
                  } else if ($button_url === 'pdf') {
                    $link = 'pdf';
                    $target = 'pdf';
                  }

                  if ($disabled === 'button__disabled') {
                    $link = 'javascript:void(0)';
                  }

                @endphp

                <div class="button-wrapper {{ $background_color }}">
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-12">
                        <a class="button {{ $layout }} {{ $insert_icon }} {{ $disabled }}" href="{{ $link }}">{{ $button_text }}</a>
                      </div>
                    </div>
                  </div>
                </div>



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
</header>
