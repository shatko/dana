{{--
  Title: Three Page Teasers
  Description: Three Page Teasers
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

@endphp


<div class="three-page-teasers">
  <div class="container">
    <div class="row">
      <div class="col-xl-4">
        @php
          $image = get_field('three_page_teasers_image_1');
          $size = 'full';
          if( $image ) {
            echo wp_get_attachment_image( $image, $size );
          }
        @endphp
        <h5>@php echo get_field('three_page_teasers_title_1') @endphp</h5>
        <p>@php echo get_field('three_page_teasers_subtitle_1') @endphp</p>
        <div class="button-wrapper bottom-0">
          <a class="button button__secondary button__enabled" href="@php echo get_permalink(get_field('three_page_teasers_button_1') -> ID); @endphp">Mehr erfahren</a>
        </div>
      </div>
      <div class="col-xl-4">
        @php
          $image = get_field('three_page_teasers_image_2');
          $size = 'full';
          if( $image ) {
            echo wp_get_attachment_image( $image, $size );
          }
        @endphp
        <h5>@php echo get_field('three_page_teasers_title_2') @endphp</h5>
        <p>@php echo get_field('three_page_teasers_subtitle_2') @endphp</p>
        <div class="button-wrapper bottom-0">
          <a class="button button__secondary button__enabled" href="@php echo get_permalink(get_field('three_page_teasers_button_2') -> ID); @endphp">Mehr erfahren</a>
        </div>
      </div>
      <div class="col-xl-4">
        @php
          $image = get_field('three_page_teasers_image_3');
          $size = 'full';
          if( $image ) {
            echo wp_get_attachment_image( $image, $size );
          }
        @endphp
        <h5>@php echo get_field('three_page_teasers_title_3') @endphp</h5>
        <p>@php echo get_field('three_page_teasers_subtitle_3') @endphp</p>
        <div class="button-wrapper bottom-0">
          <a class="button button__secondary button__enabled" href="@php echo get_permalink(get_field('three_page_teasers_button_3') -> ID); @endphp">Mehr erfahren</a>
        </div>
      </div>
    </div>
  </div>
</div>
