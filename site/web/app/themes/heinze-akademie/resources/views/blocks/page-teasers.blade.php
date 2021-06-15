{{--
  Title: Page Teasers
  Description: Page Teasers
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


<div class="page-teasers">
  <div class="container">
    <div class="row row-eq-height no-gutters">
      @php
        if( have_rows('page_teasers') ):
            while ( have_rows('page_teasers') ) : the_row();
                if( get_row_layout() == 'teaser' ):

                  @endphp
                  <div class="page-teasers__wrapper gray">
                    <div class="page-teasers__image-wrapper">
                      @php
                        $image = get_sub_field('page_teasers_image');
                        $size = 'full';
                        if( $image ) {
                          echo wp_get_attachment_image( $image, $size );
                        }
                      @endphp
                    </div>

                    <div class="page-teasers__text">
                      <h5 class="page-teasers__title">@php echo get_sub_field('page_teasers_title') @endphp</h5>
                      <p class="page-teasers__subtitle">@php echo get_sub_field('page_teasers_subtitle') @endphp</p>
                    </div>

                    <div class="button-wrapper bottom-0">
                      <a class="button button__secondary button__enabled" href="@php echo get_permalink(get_sub_field('page_teasers_button') -> ID); @endphp">Mehr erfahren</a>
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
