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
  <div class="container">
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
          <div class="col-xl-4 list-teasers__single-container">
            @php
            $num = get_sub_field('number');
            $title = get_sub_field('title');

            @endphp
            <div class="list-teasers__single">
              <div class="list-teasers__number">{{ $num }}</div>
              <h5 class="list-teasers__title small">{{ $title }}</h3>
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
    </div>
  </div>
</div>
