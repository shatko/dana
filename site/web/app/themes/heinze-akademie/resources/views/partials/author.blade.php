@php
  if (get_field('quote')) {
    $quote = get_field('quote');
  } else {
    $quote = get_sub_field('quote');
  }

  if (get_field('name_and_position')) {
    $name_and_position = get_field('name_and_position');
  } else {
    $name_and_position = get_sub_field('name_and_position');
  }

  if (get_field('image')) {
    $image = get_field('image');
  } else {
    $image = get_sub_field('image');
  }
@endphp

<div class="konzept__author-wrapper">
  @php
    if( $image ) {
      echo wp_get_attachment_image( $image, 'medium', '', array( "class" => "konzept__author-image" ));
    }
  @endphp
  <div class="konzept__author-text-wrapper">
    <p class="konzept__author-testimonial">@php echo $quote; @endphp</p>
    <p class="konzept__author-name-position">@php echo $name_and_position; @endphp</p>
  </div>
</div>
