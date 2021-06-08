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
</div>
