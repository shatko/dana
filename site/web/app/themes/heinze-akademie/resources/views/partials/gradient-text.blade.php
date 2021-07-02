@php
if (get_field('text')) {
  $text = get_field('text');
} else {
  $text = get_sub_field('text');
}

if (get_field('settings_gradient_bottom_margin')) {
  $bottom_margin = get_field('settings_gradient_bottom_margin');
} else {
  $bottom_margin = get_sub_field('settings_gradient_bottom_margin');
}

if (get_field('settings_gradient_background_color')) {
  $background_color = get_field('settings_gradient_background_color');
} else {
  $background_color = get_sub_field('settings_gradient_background_color');
}

if (get_field('text_align')) {
  $text_align = get_field('text_align');
} else {
  $text_align = get_sub_field('text_align');
}
@endphp

<div class="gradient-text {{ $background_color }} {{ $bottom_margin }}">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <p class="{{ $text_align }}">{{ $text }}</p>
      </div>
    </div>
  </div>
</div>
