@php
  $global = rand(5, 2000);
@endphp

<div class="accordion">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div id="accordion{{ $global }}">

          @php
          if( have_rows('accordion_builder') ):
            while( have_rows('accordion_builder') ) : the_row();

              $index_number = get_sub_field('index_number');
              $title = get_sub_field('title');
              $content = get_sub_field('content');
              $rand = rand(5, 2000);

              @endphp
              <div class="accordion__card">
              <div class="accordion__card-header" id="heading{{ $rand }}">
                <div data-toggle="collapse" data-target="#collapse{{ $rand }}" aria-expanded="false" aria-controls="collapse{{ $rand }}">
                  <p class="big bold">
                    @php
                    if (!empty($index_number)) {
                      @endphp
                        <span class="red">{{$index_number}} </span>
                      @php
                    }
                    echo $title;
                    @endphp
                  </p>
                </div>
              </div>

              <div id="collapse{{ $rand }}" class="collapse" aria-labelledby="heading{{ $rand }}" data-parent="#accordion{{ $global }}">
                <div class="accordion__card-body">
                  @php echo $content; @endphp
                </div>
              </div>
              </div>
              @php

            endwhile;

          else :
              // Do something...
          endif;
          @endphp

        </div>
      </div>
    </div>
  </div>
</div>
