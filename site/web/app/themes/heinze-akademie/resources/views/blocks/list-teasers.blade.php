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

@php
  $background_color = get_field('background_color');
  $teaser_box_background = get_field('teaser_box_background');
@endphp

<div class="list-teasers {{ $background_color }}">
  <div class="container">
    <div class="row">
      @php
      if (get_field('title')) {
      @endphp
        <div class="col-lg-12 list-teasers__title-main">
          @php
            echo get_field('title');
          @endphp
        </div>
      @php
      }
      @endphp
      @php
        if( have_rows('teasers') ):
          while( have_rows('teasers') ) : the_row();

          @endphp
          <div class="col-xl-4 list-teasers__single-container">
            @php
            $num = get_sub_field('number');
            $title = get_sub_field('title');

            @endphp
            <div class="list-teasers__single {{ $teaser_box_background }}">
              @php
              if ($title) {
              @endphp
                <div class="list-teasers__number">{{ $num }}</div>
                <h5 class="list-teasers__title small">@php echo html_entity_decode($title); @endphp</h5>
                <hr />
              @php
                }
              @endphp
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
    </div>
  </div>
</div>
