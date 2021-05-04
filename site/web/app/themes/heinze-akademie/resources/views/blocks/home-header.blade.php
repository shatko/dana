{{--
  Title: Home Header
  Description: Home Header
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
  $title = get_field('title');
  $dot_title = preg_replace('/\./', '<span class="red">.</span>', $title);
@endphp


<div class="home-header">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="home-header__content">
          <h1 class="home-header__title">
            @php
              echo $dot_title;
            @endphp
          </h1>
          <div class="home-header__text-wrapper">
            @php
              echo get_field('subtitle');
            @endphp
            <div class="button-wrapper">
              <a class="button button__secondary button__arrow-down button__enabled" href="{{ get_field('button_url') }}">{{ get_field('button_text') }}</a>
            </div>
          </div>
          <div class="home-header__image">
            @php
              $image = get_field('image');
              $size = 'full';
              if( $image ) {
                echo wp_get_attachment_image( $image, $size );
              }
            @endphp
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
