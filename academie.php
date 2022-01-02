<div class="academie">
        <div class="header">

          <div class="header_infos">
            <img class="img_company" src="image/academy.png">
            <div>
              <p class="text"> Cursus académique </p>
              <p class="text"><i> Diplomes et formations certifiantes </i></p>
            </div>
          </div>
          <img src="image/menu.png" class="img_menu">
        </div>

        <div class="Diplomes">
            <div>
                <p class="text1"><?php echo $acad->get_list1(); ?> <b><?php echo $acad->get_listA1(); ?> </b></p>
                <div class="Diplomes_year">
                  <p class="text1" style="color: #015f9f;"><?php echo $list2['list2']?> </p>
                  <i class="text1"><?php echo $list3['list3']?></i>
                </div>
                <hr class="ligne1">
              </div>
          <div>
            <p class="text1"><?php echo $list4['list4']?><b> <?php echo $list4['listA4']?></b>
              <div class="Diplomes_year">
                <p class="text1" style="color: #015f9f;"><?php echo $list5['list5']?></p>
                <i class="text1"><?php echo $list6['list6']?></i>
              </div>
              <hr class="ligne1">
          </div>

          <div>
            <p class="text1"><?php echo $list7['list7']?> <b><?php echo $list7['listA7']?></b></p>
            <div class="Diplomes_year">
              <p class="text1" style="color: #015f9f;"><?php echo $list8['list8']?> </p>
              <i class="text1"><?php echo $list9['list9']?></i>
            </div>
            <hr class="ligne1">
          </div>



        </div>
      </div>