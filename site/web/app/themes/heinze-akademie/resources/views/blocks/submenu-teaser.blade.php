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

@endphp


<div class="submenu-teaser">
  <div class="container">
    <div class="row">
      <div class="col-xl-6 gray">
        <h1>shatko 1</h1>
        @php



        echo get_field('submenu_taser_list');




        @endphp
      </div>
      <div class="col-xl-6 gray">
        <h1>shatko 2</h1>
      </div>
    </div>
  </div>
</div>
