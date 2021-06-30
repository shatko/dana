{{--
  Title: Team and Jobs
  Description: Team and Jobs
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


<div class="team-and-jobs">
  <div class="container">
    <div class="row">
      @php
      $members = get_field( 'select_team_member' );

      if( $members ):
        foreach ($members as &$member_id) {
          @endphp
          <div class="col-xl-3 col-lg-4 col-md-12 team-and-jobs__members">
            <div class="team-member">
              <div class="team-member__icons-container">
                <a class="team-member__icon team-member__icon--info"></a>
                <span class="team-member__icon--seperator"></span>
                @php
                  if (get_field('linkedin', $member_id)) {
                    @endphp
                      <a class="team-member__icon team-member__icon--linkedin" href="@php echo get_field('linkedin', $member_id); @endphp"></a>
                    @php
                  }
                  if (get_field('linkedin', $member_id)) {
                    @endphp
                      <a class="team-member__icon team-member__icon--xing" href="@php echo get_field('xing', $member_id); @endphp"></a>
                    @php
                  }
                @endphp
              </div>
              <div class="team-member__hover-text">
              <p>
                @php
                echo the_field('text_contact_jobs', $member_id);
                @endphp
              </p>
              </div>
              <div class="team-member__info-container">
                @php
                $image = get_field('image', $member_id);
                $size = 'large';
                if( $image ) {
                  echo wp_get_attachment_image( $image, $size );
                }
                @endphp
                <div class="team-member__infos">
                  <p class="team-member__name">@php echo get_the_title($member_id); @endphp</p>
                  <p class="team-member__jobtitle">@php echo get_field('position', $member_id); @endphp</p>
                  <div class="row py-1">
                    <div class="col-3">Tel.</div>
                    <div class="col-9">
                      <a href="tel:@php echo get_field('telefon_href', $member_id); @endphp">@php echo get_field('telefon_text', $member_id); @endphp</a>
                    </div>
                  </div>
                  <div class="row py-1">
                    <div class="col-3">E-Mail</div>
                    <div class="col-9">
                      <a href="mailto:@php echo get_field('contact_person_e-mail', $member_id); @endphp" class="underline-red">@php echo get_field('contact_person_e-mail', $member_id); @endphp</a>
                      </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          @php
        }
      endif;
      @endphp
      <div class="col-xl-6 col-lg-12 col-md-12 team-and-jobs__open-positions">
        @php
        echo get_field('text');

        if( have_rows('open_positions') ):
          while( have_rows('open_positions') ) : the_row();

          $item = get_sub_field('insert_pdf');
          $file_size = round( $item['filesize']  / 1024 / 1024, 1);
          @endphp
            <div class="team-and-jobs__link-wrapper">
              <a class="downloads__download-pdf-first" href="@php echo $item['url']; @endphp" download></a>
              <a class="downloads__download-pdf" href="@php echo $item['url']; @endphp"><span class="downloads__download-title">@php echo $item['title']; @endphp</span><span class="downloads__download-size">@php echo $file_size; @endphp MB PDF</span></a>
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
