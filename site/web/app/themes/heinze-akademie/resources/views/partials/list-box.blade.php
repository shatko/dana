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
      @php
      if (!empty($title)) {
        @endphp
          <div class="col-lg-12">
          <h5 class="list-box__title">@php echo $title; @endphp</h5>
          </div>
        @php
      }
      @endphp

      <div class="col-lg-12 {{ $column_count }} column-gap-50">
        @php echo $list; @endphp


        @php

        if( have_rows('button') ):
          while( have_rows('button') ): the_row();
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

          if ($button_text) {
          @endphp
            <div class="button-wrapper top-30 @php echo $bottom_margin; @endphp">
              <a class="button @php echo $layout .' '. $insert_icon .' '. $disabled; @endphp" @php echo $target; @endphp href="@php echo $link; @endphp">@php echo $button_text; @endphp</a>
            </div>
          @php
          }

          endwhile;
        endif;
        @endphp

      </div>
    </div>
  </div>
</div>
