{{--
  Title: Header
  Description: Header
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

@endphp


<div class="header-ce">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 header-ce__text-area">
        @php
          echo do_shortcode( '[seopress_breadcrumbs]' );
        @endphp

        <div class="header-ce__text-wrapper">
          <p class="header-ce__minititle bold">Die Akademie</p>
          <h1 class="header-ce__title">TVET</h1>
          <h4 class="header-ce__subtitle">Technical and Vocational Education and Training</h4>
          <p class="header-ce__text">Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
        </div>
      </div>
      <div class="col-lg-6 header-ce__content-area">
        <div class="header-ce__youtube"><iframe src="https://www.youtube.com/embed/4z2PyfaoiYk?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen=""></iframe></div>
      </div>
    </div>
  </div>

  <div class="questions">

    <div class="questions__button-wrapper">
      <div class="button-wrapper bottom-0">
        <a class="button button__tertiary button__enabled" href="javascript:void(0)">Schreiben Sie uns.</a>
      </div>
    </div>

    <div class="questions__first-contact">
      <img width="150" height="150" src="//localhost:3000/app/uploads/2021/04/BW-Alien-Skin-exposure-150x150.jpeg" class="attachment-thumbnail size-thumbnail" alt="BW-Alien-Skin-exposure" loading="lazy" title="BW-Alien-Skin-exposure">
      <p class="bold">Jan Eike Reinhardt</p>
      <p><a href="tel:+494063902990">Tel: <span class="bold">040 63 90 29 – 90</span></a></p>
      <p><a class="questions__whatsapp" data-action="open" data-phone="4917634202149" data-message="Hallo! Ich interessiere mich für" href="https://web.whatsapp.com/send?phone=4917634202149&amp;text=Hallo! Ich interessiere mich für" target="_blank">Whatsapp</a></p>
    </div>

    <div class="questions__second-contact">
      <img width="150" height="150" src="//localhost:3000/app/uploads/2021/04/BW-Alien-Skin-exposure-150x150.jpeg" class="attachment-thumbnail size-thumbnail" alt="BW-Alien-Skin-exposure" loading="lazy" title="BW-Alien-Skin-exposure">
      <p class="bold">Jan Eike Reinhardt</p>
      <p><a href="tel:+494063902990">Tel: <span class="bold">040 63 90 29 – 90</span></a></p>
      <p><a class="questions__whatsapp" data-action="open" data-phone="4917634202149" data-message="Hallo! Ich interessiere mich für" href="https://web.whatsapp.com/send?phone=4917634202149&amp;text=Hallo! Ich interessiere mich für" target="_blank">Whatsapp</a></p>
    </div>

    <div class="questions__trigger">
      <div class="arrow"></div>
      <div class="text">
        <p class="bold">Sie haben Fragen?</p>
        <p>Wir helfen weiter.</p>
      </div>
    </div>
  </div>
</div>
