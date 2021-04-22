{{--
  Title: List Teasers
  Description: List Teasers
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


<div class="list-teasers">
  <div class="container container__inner">
    <div class="row">
      <div class="col-lg-12 list-teasers__title-main">
        @php
          echo get_field('title');
        @endphp
      </div>
      @php
        if( have_rows('teasers') ):
          while( have_rows('teasers') ) : the_row();

          @endphp
          <div class="col-lg-4">
            @php
            $num = get_sub_field('number');
            $title = get_sub_field('title');

            @endphp
            <div class="list-teasers__single">
              <div class="list-teasers__number">{{ $num }}</div>
              <h3 class="list-teasers__title">{{ $title }}</h3>
              <hr>
              <div class="list-teasers__text">@php echo get_sub_field('list'); @endphp</div>
            </div>
          </div>
          @php

          endwhile;

        // No value.
        else :
          // Do something...
        endif;
      @endphp

      <div class="col-lg-12 list-teasers__button-wrapper">
        <a class="button-secondary" href="@php echo esc_url(get_permalink( get_field('button_link'))); @endphp">@php echo get_field('button_text') @endphp</a>
      </div>
    </div>
  </div>
</div>
