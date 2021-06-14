{{--
  Title: List box
  Description: List box
  Category: assets
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
@endphp

<div class="list-box gray-3">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h5 class="list-box__title">@php echo $title; @endphp</h5>
      </div>
      <div class="col-lg-12 column-count-1 column-gap-50">
        @php echo $list; @endphp
      </div>
    </div>
  </div>
</div>
