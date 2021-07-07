{{--
  Title: Submenu Teaser
  Description: Submenu Teaser
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
  $submenu_taser_main = get_field('submenu_teaser_main');
  $submenu_taser_text = get_field('submenu_teaser_text');
  $submenu_teaser_links_title = get_field('submenu_teaser_links_title');
  $submenu_taser_links = get_field('submenu_teaser_links');
@endphp


<div class="submenu-teaser">
  <div class="container">
    <div class="row">
      <div class="col-xl-6 gray submenu-teaser__left-wrapper">
        <div class="submenu-teaser__left-wrapper-title">
          <h5 class="submenu-teaser__title">@php echo $submenu_taser_main -> post_title; @endphp</h5>
        </div>
        <div class="submenu-teaser__text">
          <p>@php echo $submenu_taser_text; @endphp</p>
        </div>
        <div class="button-wrapper bottom-0">
          <a class="button button__secondary button__enabled" href="@php echo get_permalink($submenu_taser_main -> ID); @endphp">Mehr erfahren</a>
        </div>
      </div>
      <div class="col-xl-6 gray submenu-teaser__right-wrapper">
        <div class="submenu-teaser__right-wrapper-title links">
          <p class="big">@php echo $submenu_teaser_links_title; @endphp</p>
        </div>
        @php
        foreach ($submenu_taser_links as $submenu_taser_link) {
          @endphp
            <a class="submenu-teaser__right-wrapper-links" href="@php echo get_permalink($submenu_taser_link -> ID); @endphp"><span>@php echo $submenu_taser_link -> post_title; @endphp</span></a>
            <br />
          @php
        }
        @endphp
      </div>
    </div>
  </div>
</div>
