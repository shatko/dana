{{--
  Title: Starttermine
  Description: Starttermine
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
  if (get_field('gray_background')[0] == 'yes') {
    $background = 'gray';
  } else {
    $background = '';
  }
@endphp

<div class="starttermine @php _e($background); @endphp @php _e(get_field('starttermine_bottom_margin')); @endphp">
  <div class="container">
    <div class="row">
      <div class="col-lg-12" id="starttermine">
        @php
          $category   = 'starttermine_' . get_field('select_category');
          $increment  = 0;

          if( have_rows($category, 'option') ):
            while( have_rows($category, 'option') ): the_row();

            $empty_slots = get_sub_field('free_slots');
            $form = get_sub_field('contact_form_shortcode');

            if ($empty_slots <= 4 && $empty_slots >= 2) {
              $slots_button_text = 'Noch ' . $empty_slots . ' Plätze verfügbar';
              $enlist_button_text = 'Anmelden';
              $status = 'enable';
              $button_state = 'button__enabled';

            } else if ($empty_slots >= 5) {
              $slots_button_text = 'Startgarantie';
              $enlist_button_text = 'Anmelden';
              $status = 'enable';
              $button_state = 'button__enabled';

            } else if ($empty_slots == 1) {
              $slots_button_text = 'Noch ' . $empty_slots . ' Platz verfügbar';
              $enlist_button_text = 'Anmelden';
              $status = 'enable';
              $button_state = 'button__enabled';

            } else {
              $slots_button_text = 'Keine freien Plätze';
              $enlist_button_text = 'Ausgebucht';
              $status = 'disable';
              $button_state = 'button__disabled';

            }
            @endphp

            <div class="starttermine__card">

              @php
                if ($empty_slots != 0) {
              @endphp
              <!-- Button trigger modal -->
              <div class="starttermine__card-header-button-modal starttermine__card-header-button-enlist button-wrapper bottom-0" data-toggle="modal" data-target="#starttermineModalCenter{{ $increment }}">
                <a class="button button__secondary {{ $button_state }}" href="javascript:void(0)">{{ $enlist_button_text }}</a>
              </div>

              <!-- Modal -->
              <div class="modal fade" id="starttermineModalCenter{{ $increment }}" tabindex="-1" role="dialog" aria-labelledby="starttermineModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">@php echo get_sub_field('title'); @endphp</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      @php echo do_shortcode( $form ); @endphp
                    </div>
                  </div>
                </div>
              </div>

              @php
              }
              @endphp

              <div class="starttermine__card-header collapsed" id="heading-{{ $increment }}" data-toggle="collapse" data-target="#collapse-{{ $increment }}" aria-expanded="true" aria-controls="collapse-{{ $increment }}">
                {{-- <div class="starttermine__card-trigger"></div> --}}
                <div class="starttermine__card-header-text-wrapper">
                  <p class="starttermine__card-header-date big bold {{ $status }}">@php echo get_sub_field('date'); @endphp</p>
                  <div class="starttermine__card-header-arrow-wrapper">
                    <div class="starttermine__card-header-arrow"></div>
                    <p class="starttermine__card-header-title big bold {{ $status }}">@php echo get_sub_field('title'); @endphp</p>
                  </div>
                </div>

                <div class="starttermine__card-header-button-wrapper">
                  <div class="starttermine__card-header-button-slots button-wrapper bottom-0">
                    <a class="button button__tertiary {{ $button_state }}" href="javascript:void(0)">{{ $slots_button_text }}</a>
                  </div>
                  <div class="starttermine__card-header-button-enlist button-wrapper bottom-0">
                    <a class="button button__secondary {{ $button_state }}" href="javascript:void(0)">{{ $enlist_button_text }}</a>
                  </div>
                </div>
              </div>

              <div id="collapse-{{ $increment }}" class="starttermine__card-content collapse" aria-labelledby="heading-{{ $increment }}" data-parent="#starttermine">
                <div class="starttermine__card-content-wrapper">
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
          <a class="starttermine__show-all-trigger button button__tertiary button__plus button__enabled" href="javascript:void(0)">Mehr anzeigen</a>
        </div>
      </div>
    </div>
  </div>
</div>
