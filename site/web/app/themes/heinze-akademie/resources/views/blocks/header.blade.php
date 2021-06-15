{{--
  Title: Header
  Description: Header
  Category: sections
  Icon: admin-comments
  Keywords:
  Mode: edit
  Align: left
  PostTypes:
  SupportsAlign: false
  SupportsMode: false
  SupportsMultiple: true
--}}

@php
  $minititle = get_field('minititle');
  $title = get_field('title');
  $subtitle = get_field('subtitle');
  $text = get_field('text');
  $ytcode = get_field('youtube_code');
  $contentSelect = get_field('select_content');

@endphp


<div class="header-ce gray">
  <div class="container">
    <div class="row">
      <div class="col-xl-6 col-lg-12 header-ce__text-area">
          @php
            echo do_shortcode( '[seopress_breadcrumbs]' );
          @endphp
        <div class="header-ce__text-wrapper">
          @php
            if(!empty($minititle)) {
              @endphp
              <p class="header-ce__minititle bold">{{ $minititle  }}</p>
              @php
            }
          @endphp
          @php
            if(!empty($title)) {
              @endphp
              <h1 class="header-ce__title">{{ $title  }}</h1>
              @php
            }
          @endphp
          <h4 class="header-ce__subtitle">{{ $subtitle }}</h4>
          <p class="header-ce__text">@php echo $text; @endphp</p>
        </div>
      </div>
      <div class="col-xl-6 col-lg-12 header-ce__content-area">
        @php
          if ($contentSelect === 'yt_video') {
            if(!empty($ytcode)) {
              @endphp
              <div class="header-ce__youtube"><iframe src="https://www.youtube.com/embed/{{ $ytcode }}?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen=""></iframe></div>
              @php
            }
          } elseif ($contentSelect === 'image') {
            @endphp
              <div class="header-ce__image-wrapper">
              @php
              $image = get_field('image');
              $size = 'full';
              if( $image ) {
                echo wp_get_attachment_image( $image, $size );
              }
              @endphp
            </div>
          @php
          } elseif ($contentSelect === 'image_slider') {
            $images = get_field('image_slider');
            $size = 'full';
            @endphp
            <div class="header-ce__slider-wrapper">
              <div class="header-ce__slider">
              @php
              if( $images ):
                foreach( $images as $image_id ):
                  @endphp
                  <div class="header-ce__slider--slide">
                    <div  class="header-ce__slider--slide-content">
                      @php
                        echo wp_get_attachment_image( $image_id['ID'], $size );
                      @endphp
                      <div class="header-ce__slider--slide-description">
                        <p>@php echo esc_html($image_id['caption']); @endphp</p>
                      </div>
                    </div>
                  </div>
                  @php
                endforeach;
              endif;
              @endphp
              </div>
              <div class="header-ce__slider-second">
              @php
              if( $images ):
                foreach( $images as $image_id ):
                  @endphp
                  <div class="header-ce__slider-second--slide">
                    <p>@php echo esc_html($image_id['description']); @endphp</p>
                  </div>
                  @php
                endforeach;
              endif;
              @endphp
              </div>
            </div>
            @php
          }
        @endphp
      </div>
    </div>
  </div>
    <div class="questions">
      <div class="questions__button-wrapper">
        <div class="button-wrapper bottom-0">
          <a class="button button__tertiary button__enabled" href="javascript:void(0)">Schreiben Sie uns.</a>
        </div>
      </div>

      <div class="questions__first-contact">
        <img width="150" height="150" src="https://heinze.grand-digital.de/app/uploads/2021/04/BW-Alien-Skin-exposure-150x150.jpeg" class="attachment-thumbnail size-thumbnail" alt="BW-Alien-Skin-exposure" loading="lazy" title="BW-Alien-Skin-exposure">
        <p class="bold">Jan Eike Reinhardt</p>
        <p><a href="tel:+494063902990">Tel: <span class="bold">040 63 90 29 – 90</span></a></p>
        <p><a class="questions__whatsapp" data-action="open" data-phone="4917634202149" data-message="Hallo! Ich interessiere mich für" href="https://web.whatsapp.com/send?phone=4917634202149&amp;text=Hallo! Ich interessiere mich für" target="_blank">Whatsapp</a></p>
      </div>

      <div class="questions__second-contact">
        <img width="150" height="150" src="https://heinze.grand-digital.de/app/uploads/2021/04/BW-Alien-Skin-exposure-150x150.jpeg" class="attachment-thumbnail size-thumbnail" alt="BW-Alien-Skin-exposure" loading="lazy" title="BW-Alien-Skin-exposure">
        <p class="bold">Jan Eike Reinhardt</p>
        <p><a href="tel:+494063902990">Tel: <span class="bold">040 63 90 29 – 90</span></a></p>
        <p><a class="questions__whatsapp" data-action="open" data-phone="4917634202149" data-message="Hallo! Ich interessiere mich für" href="https://web.whatsapp.com/send?phone=4917634202149&amp;text=Hallo! Ich interessiere mich für" target="_blank">Whatsapp</a></p>
      </div>

      <div class="questions__trigger">
        <div class="arrow"></div>
        <div class="text">
          <p class="bold">Sie haben Fragen?</p>
          <p>Wir helfen weiter.</p>
        </div>
      </div>
    </div>
</div>
