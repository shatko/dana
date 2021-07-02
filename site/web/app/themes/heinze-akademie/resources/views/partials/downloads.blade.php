<div class="downloads">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 downloads__left">
        <div class="downloads__links">
          <h4 Class="downloads__links-title">downloads<span class="red">.</span></h4>
          @php
            if( have_rows('downloads_list') ):
              while( have_rows('downloads_list') ) : the_row();

                $item = get_sub_field('item');
                $file_size = round(filesize( get_attached_file( $item -> ID )) / 1024 / 1024, 1);
                @endphp
                  <div>
                    <a class="downloads__download-pdf-first" href="@php echo wp_get_attachment_url($item -> ID); @endphp" download></a>
                    <a class="downloads__download-pdf" href="@php echo wp_get_attachment_url($item -> ID); @endphp"><span class="downloads__download-title">@php echo $item -> post_title; @endphp</span><span class="downloads__download-size">@php echo $file_size; @endphp MB PDF</span></a>
                  </div>
                @php
              endwhile;
            else :
                // Do something...
            endif;
          @endphp

        </div>
        <div class="downloads__share">
          <h5 class="small">Diese Seite teilen</h5>

          @php
            echo do_shortcode( '[erechtshare]' );
          @endphp

        </div>
      </div>
      {{-- <div class="col-lg-6 downloads__right">
        <h3>International Courses at <span class="red">Heinze Academy</span></h3>
        <div class="downloads__youtube"><iframe src="https://www.youtube.com/embed/4z2PyfaoiYk?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen=""></iframe></div>
        <div class="gradient-text {{ $background_color }} {{ $bottom_margin }}">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <p>Stet clita kasd no sea takimata</p>
              </div>
            </div>
          </div>
        </div>
      </div> --}}
    </div>
  </div>
</div>
