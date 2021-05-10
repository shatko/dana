{{--
  Title: Absolventen slider
  Description: absolventen Slider
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


<div class="absolventen-slider">
  <div class="container container__inner">
    <div class="row">
      <div class="col-lg-5 absolventen-slider__left">
        <div class="absolventen-slider__left-wrapper">
          {{ the_field('absolventen_title', 'option') }}
          <p class="absolventen-slider__left-text"><strong>{{ the_field('absolventen_text', 'option') }}</strong></p>
          <div class="button-wrapper absolventen-slider__left-first-link">
            <a class="button button__primary button__enabled" href="{{ get_field('absolventen_first_link_href', 'option') }}">{{ get_field('absolventen_first_link_text', 'option') }}</a>
          </div>
          <div class="button-wrapper">
            <a class="button button__tertiary button__enabled" href="{{ get_field('absolventen_second_link_href', 'option') }}">{{ get_field('absolventen_second_link_text', 'option') }}</a>
          </div>
        </div>
      </div>
      <div class="col-lg-7 absolventen-slider__right">
        <div class="absolventen-slider__right-wrapper">

          <h1>test</h1>
          <div class="absolventen-slider__slider">
            <div>your content</div>
            <div>your content</div>
            <div>your content</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
