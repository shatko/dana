@php
if (get_field('minititle')) {
  $minititle = get_field('minititle');
} else {
  $minititle = get_sub_field('minititle');
}

if (get_field('headline_minititle_color')) {
  $headline_minititle_color = get_field('headline_minititle_color');
} else {
  $headline_minititle_color = get_sub_field('headline_minititle_color');
}

if (get_field('text')) {
  $text = get_field('text');
} else {
  $text = get_sub_field('text');
}

if (get_field('headline_bottom_margin')) {
  $bottom_margin = get_field('headline_bottom_margin');
} else {
  $bottom_margin = get_sub_field('headline_bottom_margin');
}

if (get_field('headline_background_color')) {
  $background_color = get_field('headline_background_color');
} else {
  $background_color = get_sub_field('headline_background_color');
}
@endphp

<div class="headline {{ $background_color }} {{ $bottom_margin }}">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        @php if ($minititle) {
           @endphp
            <p class="headline__minititle big {{ $headline_minititle_color }}"><strong>{{ $minititle }}</strong></p>
          @php
        }

        echo $text;
        @endphp
      </div>
    </div>
  </div>
</div>
