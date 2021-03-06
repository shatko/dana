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

  if ($contentSelect === 'image_slider' || $contentSelect === 'none') {
    $bg = 'white';
  } else {
    $bg = 'gray';
  }

  if ($contentSelect === 'none') {
    $rows = 'col-xl-8 col-lg-12';
  } else {
    $rows = 'col-xl-6 col-lg-12';
  }

  if (!empty(get_field('title_smaller_for_long_titles'))) {
    $title_smaller = 'title-smaller';
  } else {
    $title_smaller = '';
  }

  if (!empty(get_field('follow_the_content_size'))) {
    $follow_the_content_size = 'follow-the-content-size';
  } else {
    $follow_the_content_size = '';
  }
@endphp


<div class="header-ce {{ $bg }}">
  <div class="container">
    <div class="row">
      <div class="{{ $rows }} header-ce__text-area">
          @php
            echo do_shortcode( '[seopress_breadcrumbs]' );
          @endphp
        <div class="header-ce__text-wrapper {{ $title_smaller }}">
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
              <h1 class="header-ce__title {{ $title_smaller }}">{!! $title !!}</h1>
              @php
            }
          @endphp
          @php
            if (!empty($subtitle)) {
              @endphp
              <h4 class="header-ce__subtitle {{ $title_smaller }}">{{ $subtitle }}</h4>
              @php
            }
          @endphp
          <div class="header-ce__text">@php echo get_field('text'); @endphp</div>


          @php
            if (!empty(get_field('insert_button'))) {
             if( have_rows('button') ):
                while( have_rows('button') ): the_row();
                  @endphp
                    @include('partials.button-sub-field')
                  @php

                endwhile;
              endif;
            }
          @endphp


        </div>
      </div>
      <div class="col-xl-6 col-lg-12 header-ce__content-area">
        @php
          if ($contentSelect === 'yt_video') {
            if(!empty($ytcode)) {
              @endphp
              <div class="header-ce__video-wrapper {{ $follow_the_content_size }}">
                <!-- Button trigger modal -->
                <div class="header-ce__image-wrapper" data-toggle="modal" data-target="#header-video">
                  @php
                    $image = get_field('video_cover');
                    $size = 'full';
                    if( $image ) {
                      echo wp_get_attachment_image( $image, $size,"", ["class" => $follow_the_content_size]  );
                    }
                  @endphp

                  <div class="play"></div>
                </div>

                <!-- Modal -->
                <div class="modal fade header-ce__video-modal" id="header-video" tabindex="-1" role="dialog" aria-labelledby="starttermineModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-body">
                        <iframe class="video-if" src="https://www.youtube.com/embed/{{ $ytcode }}?version=3&enablejsapi=1" frameborder="0" allowfullscreen=""></iframe>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @php
            }
          } elseif ($contentSelect === 'image') {
            @endphp
              <div class="header-ce__image-wrapper {{ $follow_the_content_size }}">
              @php
              $image = get_field('image');
              $size = 'full';
              if( $image ) {
                echo wp_get_attachment_image( $image, $size,"", ["class" => $follow_the_content_size] );
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
  @php
    if (empty(get_field('disable_contact_element'))) {
      @endphp
      <div class="questions">
        <div class="questions__button-wrapper">
          <div class="button-wrapper bottom-0">
            <a class="button button__tertiary button__enabled" href="mailto:info@heinze-akademie.de">Schreiben Sie uns.</a>
          </div>
        </div>

        <div class="questions__first-contact">
          @php
            echo wp_get_attachment_image( get_field('image_first', 'option'), 'medium', '', array( "class" => "attachment-thumbnail size-thumbnail" ));
          @endphp
          <p class="bold">@php echo get_field('name_and_surname_first', 'option'); @endphp</p>
          <p><a href="tel:@php echo get_field('telephone_href_first', 'option'); @endphp">Tel: <span class="bold">@php echo get_field('telephone_text_first', 'option'); @endphp</span></a></p>
          <p><a class="questions__whatsapp" data-action="open" data-phone="@php echo get_field('whatsapp_number_first', 'option'); @endphp" data-message="Hallo! Ich interessiere mich f??r" href="https://web.whatsapp.com/send?phone=@php echo get_field('whatsapp_number_first', 'option'); @endphp&amp;text=Hallo! Ich interessiere mich f??r" target="_blank">Whatsapp</a></p>
        </div>

        <div class="questions__second-contact">
          @php
            echo wp_get_attachment_image( get_field('image_second', 'option'), 'medium', '', array( "class" => "attachment-thumbnail size-thumbnail" ));
          @endphp
          <p class="bold">@php echo get_field('name_and_surname_second', 'option'); @endphp</p>
          <p><a href="tel:@php echo get_field('telephone_href_second', 'option'); @endphp">Tel: <span class="bold">@php echo get_field('telephone_text_second', 'option'); @endphp</span></a></p>
          <p><a class="questions__whatsapp" data-action="open" data-phone="@php echo get_field('whatsapp_number_second', 'option'); @endphp" data-message="Hallo! Ich interessiere mich f??r" href="https://web.whatsapp.com/send?phone=@php echo get_field('whatsapp_number_second', 'option'); @endphp&amp;text=Hallo! Ich interessiere mich f??r" target="_blank">Whatsapp</a></p>
        </div>

        <div class="questions__trigger">
          <div class="arrow"></div>
          <div class="text">
            <p class="bold">Sie haben Fragen?</p>
            <p>Wir helfen weiter.</p>
          </div>
        </div>
      </div>
      @php
    }
  @endphp
</div>
