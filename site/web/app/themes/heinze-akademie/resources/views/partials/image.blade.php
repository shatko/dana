@php
if (get_field('image')) {
  $image = get_field('image');
  $size  = 'large';
} else {
  $image = get_sub_field('image');
  $size  = 'large';
}

if (get_field('bottom_margin')) {
  $bottom_margin = get_field('bottom_margin');
} else {
  $bottom_margin = get_sub_field('bottom_margin');
}

if (get_field('background_color')) {
  $background_color = get_field('background_color');
} else {
  $background_color = get_sub_field('background_color');
}
@endphp

<div class="image {{ $background_color }}  {{ $bottom_margin }}">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        @php
          if( $image ) {
            echo wp_get_attachment_image( $image, $size );
          }
        @endphp
      </div>
    </div>
  </div>
</div>
