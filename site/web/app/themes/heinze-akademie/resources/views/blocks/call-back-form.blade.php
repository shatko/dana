{{--
  Title: Call Back Form
  Description: Call Back Form
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
  $form = get_field('form_shortcode');
@endphp


<div class="call-back">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 call-back__form-wrapper">
        <h4>Rückruf-Service<span class="red">.</span></h4>
        @php echo do_shortcode( $form ); @endphp
      </div>
      <div class="col-lg-6 call-back__contact-persons-wrapper">
        <div class="call-back__contact-persons--top">
          <h4>Ihr Kontakt<span class="red">.</span></h4>

          @php
          if( have_rows('contact_persons') ):
            while( have_rows('contact_persons') ): the_row();
            $image = get_sub_field('image');
            $size = 'thumbnail';

            @endphp
            <div class="call-back__contact-single">

              @php
              if( $image ) {
                echo wp_get_attachment_image( $image, $size );
              }
              @endphp
              <p class="call-back__name-surname"><strong>{{ get_sub_field('vorname_nachname') }}</strong></p>
              <p class="call-back__position">{{ get_sub_field('position') }}</p>
              <p class="call-back__text">{{ the_sub_field('text') }}</p>
              <p class="call-back__tel">Tel.
                <a class="call-back__tel-link" href="{{ get_sub_field('telefon_href') }}" target="_blank">{{ get_sub_field('telefon_text') }}</a>
                <a class="call-back__whatsapp" data-action="open" data-phone="4917634202149" data-message="Hallo! Ich interessiere mich für" href="https://web.whatsapp.com/send?phone=4917634202149&amp;text=Hallo! Ich interessiere mich für" target="_blank"></a>
              </p>
              <div class="button-wrapper">
                <a class="button button__secondary button__enabled" href="mailto:{{ get_sub_field('contact_person_e_mail') }}">Schreiben Sie mir</a>
              </div>

            </div>
            @php
            endwhile;
          endif;
          @endphp

        </div>
        <div class="call-back__contact-persons--bottom">
          <div class="call-back__bottom-left">
            <p>Mo – Do</p>
            <p>Fr</p>
            <p>E-Mail</p>
          </div>

          <div class="call-back__bottom-right">
            <p>@php the_field('mo_do', 'option'); @endphp</p>
            <p>@php the_field('fr', 'option'); @endphp</p>
            <a class="link" href="mailto:@php the_field('e_mail_href'); @endphp">@php the_field('e_mail_text'); @endphp</a>
          </div>



        </div>
      </div>
    </div>
  </div>
</div>
