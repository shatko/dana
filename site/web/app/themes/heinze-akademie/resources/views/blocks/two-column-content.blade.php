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


<div class="two-column-content">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        @php
          if( have_rows('content_left') ):
            while ( have_rows('content_left') ) : the_row();

              // Case: Gradient Text
              if( get_row_layout() == 'gradient_text' ):
                if( have_rows('gradient_text') ):
                  while( have_rows('gradient_text') ): the_row();
                    @endphp
                    <div class="gradient-text">
                      @php
                        echo get_sub_field('text');
                      @endphp
                    </div>
                    @php
                  endwhile;
                endif;

              // Case: Button
              elseif( get_row_layout() == 'button' ):
                @endphp
                <div class="button">
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-12">
                        <a class="button-secondary arrow" href="{{ get_sub_field('page') }}">{{ get_sub_field('button_text') }}</a>
                      </div>
                    </div>
                  </div>
                </div>
                @php

              // Case: Download layout.
              elseif( get_row_layout() == 'download' ):
                $file = get_sub_field('file');

              endif;
            endwhile;
          else :
              // Do something...
          endif;
        @endphp

      </div>
      <div class="col-lg-6">
        <h1>test</h1>
      </div>
    </div>
  </div>
</div>
