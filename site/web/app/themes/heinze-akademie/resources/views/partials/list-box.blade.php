@php
if (get_field('title')) {
  $title = get_field('title');
} else {
  $title = get_sub_field('title');
}

if (get_field('list')) {
  $list = get_field('list');
} else {
  $list = get_sub_field('list');
}

if (get_field('background_color_list')) {
  $background_color_list = get_field('background_color_list');
} else {
  $background_color_list = get_sub_field('background_color_list');
}

if (get_field('column_count')) {
  $column_count = get_field('column_count');
} else {
  $column_count = get_sub_field('column_count');
}

if (get_field('list_bottom_margin_bottom_margin')) {
  $list_bottom_margin = get_field('list_bottom_margin_bottom_margin');
} else {
  $list_bottom_margin = get_sub_field('list_bottom_margin_bottom_margin');
}

@endphp

<div class="list-box {{ $list_bottom_margin }}">
  <div class="container">
    <div class="row {{ $background_color_list }}">
      <div class="col-lg-12">
        <h5 class="list-box__title">@php echo $title; @endphp</h5>
      </div>
      <div class="col-lg-12 {{ $column_count }} column-gap-50">
        @php echo $list; @endphp
      </div>
    </div>
  </div>
</div>
