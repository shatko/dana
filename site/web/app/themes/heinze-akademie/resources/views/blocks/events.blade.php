{{--
  Title: Events
  Description: Events
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
  if (!empty(get_field('gray_background'))) {
    $background = 'gray';
  } else {
    $background = '';
  }
@endphp

<div class="events @php echo $background;  @endphp">
  <div class="container">
    <div class="row">
      <div class="col-lg-12" id="events">
        @php
          $increment  = 0;

          if( have_rows('events', 'option') ):
            while( have_rows('events', 'option') ): the_row();

            $empty_slots = get_sub_field('free_slots');
            $zoom_invitation = get_sub_field('zoom_invitation');

            @endphp

            <div class="events__card">
              <div class="events__card-header collapsed" id="events-heading-{{ $increment }}" data-toggle="collapse" data-target="#events-collapse-{{ $increment }}" aria-expanded="true" aria-controls="events-collapse-{{ $increment }}">
                <div class="events__card-header-text-wrapper">
                  <p class="events__card-header-date big bold">@php echo get_sub_field('date'); @endphp</p>
                  <div class="events__card-header-arrow-wrapper">
                    <div class="events__card-header-arrow"></div>
                    <p class="events__card-header-title big bold">@php echo get_sub_field('title'); @endphp</p>
                  </div>
                  <p class="events__card-header-time big bold">@php echo get_sub_field('time_span'); @endphp</p>
                </div>

                <div class="events__card-header-button-wrapper">
                  <div class="events__card-header-button-enlist button-wrapper bottom-0">
                    <a class="button button__secondary button__zoom" href="{{ $zoom_invitation }}" target="_blank">Per Zoom teilnehmen</a>
                  </div>
                </div>
              </div>

              <div id="events-collapse-{{ $increment }}" class="events__card-content collapse" aria-labelledby="events-heading-{{ $increment }}" data-parent="#events">
                <div class="events__card-content-wrapper">
                  @php echo the_sub_field('content'); @endphp
                </div>
              </div>
            </div>

            @php
              $increment++;
            endwhile;
        endif;

        @endphp
      </div>

      <div class="col-lg-12 center">
        <div class="button-wrapper white bottom-0">
          <a class="events__show-all-trigger button button__tertiary button__plus button__enabled" href="javascript:void(0)">Mehr anzeigen</a>
        </div>
      </div>
    </div>
  </div>
</div>
