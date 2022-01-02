<div class="contenu">
         <div class="cv_info">
          <div class="localisation">
             <img class="anniv" src="image/birth.png">
            <div class="over_all">
              <label for="" class="text"><?php echo $locali->get_infoNais(); ?> </label><br>
              <label for="" class="text"><?php echo $locali->get_infoOrigine(); ?></label><br>
              <label for="" class="text"><?php echo $locali->get_infoEtat(); ?></label>
              <hr class="Separateur">
            </div>

          </div>

          <div class="localisation">
             <img class="anniv" src="image/map.png">
            <div class="over_all">
              <label for="" class="text"><?php echo $gps->get_infoLieu(); ?> </label><br>
              <label for="" class="text"><?php echo $gps->get_infoVille(); ?> </label><br>
               <hr class="Separateur">
            </div>

          </div>
          

          <div class="localisation">
             <img class="anniv" src="image/tel.png">
            <div class="over_all">
                <label for="" class="text"><?php echo $tel->get_infoNumero(); ?></label><br>
                <label for="" class="text"><?php echo $tel->get_infoApp(); ?></label>
              <hr class="Separateur">
            </div>

          </div>

          <div class="localisation">
             <img class="anniv" src="image/mail.png">
            <div class="over_all">
                <label for="" class="text"><?php echo $mail->get_infoEmail(); ?> </label><br>
                <label for="" class="text"><?php echo $mail->get_infoSite(); ?></label>
              <hr class="Separateur">
            </div>

          </div>
          
          <div class="recap">
            <label for="" class="text" style="margin-left: 10%;"><?php echo $Pro->get_infoProjet(); ?> </label>
            <label for="" class="text" style="margin-left: 15%;"><?php echo $Pro->get_infoContrat(); ?> </label>
            <label for="" class="text" style="margin-left: 10%;"><?php echo $Pro->get_infoExperience(); ?> </label>
        </div>
  </div>
      </div>
        