@php
  $layout           = get_sub_field('layout');
  $button_text      = get_sub_field('button_text');
  $button_url       = get_sub_field('button_url');
  $negative_layout  = get_sub_field('negative_layout');
  $insert_icon      = get_sub_field('insert_icon');
  $background_color = get_sub_field('background_color');
  $orientation      = get_sub_field('orientation');
  $bottom_margin    = get_sub_field('bottom_margin');
  $disabled         = get_sub_field('disabled');

  if ($button_url === 'page') {
    $link = get_sub_field('page');
    $target = 'target="_self"';

  } else if ($button_url === 'external') {
    $link = get_sub_field('external');
    $target = 'target="_blank"';

  } else if ($button_url === 'pdf') {
    $link = 'pdf';
    $target = 'pdf';
  }

  if ($disabled === 'button__disabled') {
    $link = 'javascript:void(0)';
  }
@endphp

<div class="button-wrapper {{ $background_color }} {{ $bottom_margin }}">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 {{ $orientation }}">
        <a class="button {{ $layout }} {{ $insert_icon }} {{ $disabled }}" href="{{ $link }}" {{ $target }}>{{ $button_text }}</a>
      </div>
    </div>
  </div>
</div>
