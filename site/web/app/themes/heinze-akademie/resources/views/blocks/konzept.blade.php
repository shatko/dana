{{--
  Title: Konzept
  Description: Konzept
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
  $text = get_field('text');
@endphp


<div class="konzept">
  <div class="container">
    <div class="row">
      <div class="col-xl-12">
        <div Class="konzept__title">@php echo $title; @endphp</div>
      </div>
      <div class="col-xl-8 konzept__left">
        <div class="konzept__text">
          @php echo $text; @endphp

          <div class="konzept__author-wrapper">
            @php
              if( get_field('image') ) {
                echo wp_get_attachment_image( get_field('author_image'), 'large', '', array( "class" => "konzept__author-image" ));
              }
            @endphp
            <div class="konzept__author-text-wrapper">
              <p class="konzept__author-testimonial">@php echo get_field('author_quote'); @endphp</p>
              <p class="konzept__author-name-position">@php echo get_field('author_name_and_position'); @endphp</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 konzept__right">
        @php
          if( get_field('image') ) {
            echo wp_get_attachment_image( get_field('image'), 'large', '', array( "class" => "konzept__image" ));
          }
        @endphp
      </div>
    </div>
  </div>
</div>
