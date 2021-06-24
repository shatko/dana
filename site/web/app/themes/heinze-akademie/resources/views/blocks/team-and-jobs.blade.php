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

    <h1>test</h1>

    @php
    if( have_rows('select_team_member') ):
        while( have_rows('select_team_member') ) : the_row();

            $sub_value = get_sub_field('team_member');

            echo $sub_value . '<br />';

        endwhile;

    else :

    endif;
    @endphp
  </div>
</div>


<div class="team-member">
  <div class="team-member__icons-container">
    <a class="team-member__icon team-member__icon--info"></a>
    <a class="team-member__icon team-member__icon--linkedin"></a>
    <a class="team-member__icon team-member__icon--xing"></a>
  </div>
  <div class="team-member__hover-text">
    <p>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.</p>
  </div>
  <div class="team-member__info-container">
    <img src="http://heinze-akademie.test/app/uploads/2021/06/example-photo.jpg" />
    <div class="team-member__infos">
      <p class="team-member__name">Vorname Nachname</p>
      <p class="team-member__jobtitle">Jobtitle</p>
      <div class="row py-1">
        <div class="col-2">Tel.</div>
        <div class="col-10"><a href="tel:0406390291">040 63 90 29 - 1</a></div>
      </div>
      <div class="row py-1">
        <div class="col-2">E-Mail</div>
        <div class="col-10"><a href="nachname@heinze-akademie.de" class="underline-red">nachname@heinze-akademie.de</a></div>
      </div>
    </div>
  </div>
</div>
