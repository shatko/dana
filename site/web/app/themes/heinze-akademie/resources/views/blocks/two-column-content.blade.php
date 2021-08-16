{{--
  Title: Two Column Content
  Description: Two Column Content
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
  $bottom_margin    = get_field('bottom_margin');
  $padding_top    = get_field('padding_top');

  if (!empty(get_field('align_items_vertically'))) {
    $align = '';
  } else {
    $align = 'align-items-center';
  }

  if (!empty(get_field('no_gutters'))) {
    $no_gutters = 'no-gutters';
  } else {
    $no_gutters = '';
  }
@endphp


<div class="two-column-content {{ $background_color }} {{ $bottom_margin }} {{ $padding_top }}">
  <div class="container">
    <div class="row {{ $align }} {{ $no_gutters }}">

      @php
      if ( get_field('smaller_columns') === 'both-columns' ) {
        @endphp
        <div class="col-xl-5">
        @php
      } else if (get_field('smaller_columns') === 'left-column-small' ) {
        @endphp
        <div class="col-xl-5">
        @php
      } else if (get_field('smaller_columns ') === 'right-column-small' ) {
        @endphp
        <div class="col-xl-6">
        @php
      } else {
        @endphp
        <div class="col-xl-6">
        @php
      }
      @endphp


        @php
          if( have_rows('content_left') ):
            while ( have_rows('content_left') ) : the_row();

              // Case: Gradient Text
              if( get_row_layout() == 'gradient_text' ):
                @endphp
                  @include('partials.gradient-text')
                @php

              // Case: Button
              elseif( get_row_layout() == 'button' ):
                @endphp
                  @include('partials.button-sub-field')
                @php

              // Case: Image
              elseif( get_row_layout() == 'image' ):
                @endphp
                  @include('partials.image')
                @php

              // Case: Headline
              elseif( get_row_layout() == 'headline' ):
                @endphp
                  @include('partials.headline')
                @php

              // Case: Download layout
              elseif( get_row_layout() == 'downloads' ):
                @endphp
                  @include('partials.downloads')
                @php

              // Case: Accordion
              elseif( get_row_layout() == 'accordion' ):
                @endphp
                  @include('partials.accordion')
                @php

              // Case: List Box
              elseif( get_row_layout() == 'list_box' ):
                @endphp
                  @include('partials.list-box')
                @php

              // Case: List Box
              elseif( get_row_layout() == 'author' ):
                @endphp
                  @include('partials.author')
                @php

              endif;
            endwhile;
          else :
              // Do something...
          endif;
        @endphp

        @php
        if (get_field('smaller_columns') === 'both-columns' ) {
          @endphp
          </div>
          <div class="col-xl-1"></div>
          <div class="col-xl-5">
          @php
        } else if (get_field('smaller_columns') === 'left-column-small' ) {
          @endphp
          </div>
          <div class="col-xl-1"></div>
          <div class="col-xl-6">
          @php
        } else if (get_field('smaller_columns') === 'right-column-small' ) {
          @endphp
          </div>
          <div class="col-xl-1"></div>
          <div class="col-xl-5">
          @php
        } else {
          @endphp
          </div>
          <div class="col-xl-6">
          @php
        }
        @endphp

        @php
          if( have_rows('content_right') ):
            while ( have_rows('content_right') ) : the_row();

              // Case: Gradient Text
              if( get_row_layout() == 'gradient_text' ):
                @endphp
                  @include('partials.gradient-text')
                @php

              // Case: Button
              elseif( get_row_layout() == 'button' ):
                @endphp
                  @include('partials.button-sub-field')
                @php

              // Case: Image
              elseif( get_row_layout() == 'image' ):
                @endphp
                  @include('partials.image')
                @php

              // Case: Headline
              elseif( get_row_layout() == 'headline' ):
                @endphp
                  @include('partials.headline')
                @php

              // Case: Download layout
              elseif( get_row_layout() == 'download' ):
                $file = get_sub_field('file');

              // Case: Accordion
              elseif( get_row_layout() == 'accordion' ):
                @endphp
                  @include('partials.accordion')
                @php

              // Case: List Box
              elseif( get_row_layout() == 'list_box' ):
                @endphp
                  @include('partials.list-box')
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
