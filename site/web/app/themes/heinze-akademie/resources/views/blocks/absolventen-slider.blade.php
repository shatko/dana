{{--
  Title: Absolventen slider
  Description: Absolventen Slider
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


<div class="absolventen-slider">
  <div class="container container__inner">
    <div class="row">
      <div class="col-xl-5 absolventen-slider__left">
        <div class="absolventen-slider__left-wrapper">
          {{ the_field('absolventen_title', 'option') }}
          <p class="absolventen-slider__left-text"><strong>{{ the_field('absolventen_text', 'option') }}</strong></p>
          <div class="button-wrapper absolventen-slider__left-first-link">
            <a class="button button__primary button__enabled" href="{{ get_field('absolventen_first_link_href', 'option') }}">{{ get_field('absolventen_first_link_text', 'option') }}</a>
          </div>
          <div class="button-wrapper">
            <a class="button button__tertiary button__enabled" href="{{ get_field('absolventen_second_link_href', 'option') }}">{{ get_field('absolventen_second_link_text', 'option') }}</a>
          </div>
        </div>
      </div>
      <div class="col-xl-7 absolventen-slider__right">
        <div class="absolventen-slider__right-wrapper">
          <div class="absolventen-slider__dots-wrapper"></div>
          <div class="absolventen-slider__slider">
            @php

            if( have_rows('absolventen_slider', 'option') ):
               while( have_rows('absolventen_slider', 'option') ): the_row();
               $image           = get_sub_field('image');
               $size            = 'thumbnail';
               $name            = get_sub_field('vorname_nachname');
               $position        = get_sub_field('position');
               $additional_text = get_sub_field('additional_text');
               $linkedin        = get_sub_field('linkedin');
               $xing            = get_sub_field('xing');
               $text            = get_sub_field('text');

               @endphp
               <div class="absolventen-slider__slide-single">
                  @php
                    if( $image ) {
                      echo wp_get_attachment_image( $image, $size );
                    }
                  @endphp
                  <p class="absolventen-slider__name">{{ $name }}</p>
                  <p class="absolventen-slider__position">{{ $position }}</p>
                  <p class="absolventen-slider__additional">@php echo $additional_text; @endphp</p>
                  <div class="absolventen-slider__socials">
                    @if ($linkedin) <a href="{{ $linkedin }}" target="_blank"></a>@endif
                    @if ($xing) <a href="{{ $xing }}" target="_blank"></a>@endif
                  </div>
                  <p class="absolventen-slider__text">{{$text}}</p>
               </div>
              @php

              endwhile;
            endif;
            @endphp
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
