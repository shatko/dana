@php
if (get_field('text')) {
  $text = get_field('text');
} else {
  $text = get_sub_field('text');
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

<div class="gradient-text {{ $background_color }} {{ $bottom_margin }}">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <p>{{ $text }}</p>
      </div>
    </div>
  </div>
</div>