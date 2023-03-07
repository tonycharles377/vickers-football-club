<?php
  
    
	
	/*To get the standings excecue the line below*/
    $responseA = get_standings('vickers');
	  $standings_men = $responseA['standings'];
    ///echo'<pre>'; print_r($standings); echo'</pre>';

    /*To get the standings excecue the line below*/
    $responseA = get_standings('vickers queens');
	  $standings_wemen = $responseA['standings'];
    ///echo'<pre>'; print_r($standings); echo'</pre>';
?>

<?php $this->view("vickers/header",$data); ?>

<body>
    <div class="hero overlay" style="background-image: url('<?=ASSETS?>vickers/images/bg_3.jpg');">
      
    </div>

    
    
    <div class="container">

      <div class="row">
        <div class="col-lg-12">
          
          <div class="d-flex team-vs">
            <span class="score">VS</span>
            <div class="team-1 w-50">
              <div class="team-details w-100 text-center">
                <img src="<?=ASSETS?>vickers/images/Logo_edited-removebg-preview.png" alt="Image" class="img-fluid">
                <h3>VICKERS FC <span></span></h3>
              </div>
            </div>
            <div class="team-2 w-50">
              <div class="team-details w-100 text-center">
                <img src="<?=ASSETS?>vickers/images/logo_2.png" alt="Image" class="img-fluid">
                <h3>TOTAL SPURS<span></span></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  

    <div class="latest-news">
      <div class="container">
        <div class="row">
          <div class="col-12 title-section">
            <h2 class="heading">Latest News</h2>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-md-4">
            <div class="post-entry">
              <a href="#">
                <img src="<?=ASSETS?>vickers/images/Vickers news.jpg" alt="Image" class="img-fluid">
              </a>
              <div class="caption">
                <div class="caption-inner">
                  <h3 class="mb-3">Vickers FC signs new players.</h3>
                  <div class="author d-flex align-items-center">
                    <div class="img mb-2 mr-3">
                      <img src="<?=ASSETS?>vickers/images/my logo.png" alt="">
                    </div>
                    <div class="text">
                      <h4>Charles omondi</h4>
                      <span>Jan 02, 2023 &bullet; Sports</span>
                    </div>
                  </div>
                </div>
              </div> 
            </div>
          </div>
          <div class="col-md-4">
            <div class="post-entry">
              <a href="#">
                <img src="<?=ASSETS?>vickers/images/news 2.jpg" alt="Image" class="img-fluid">
              </a>
              <div class="caption">
                <div class="caption-inner">
                  <h3 class="mb-3">The big awaited match day at Afraha stadium-Nakuru.</h3>
                  <div class="author d-flex align-items-center">
                    <div class="img mb-2 mr-3">
                      <img src="<?=ASSETS?>vickers/images/my logo.png" alt="">
                    </div>
                    <div class="text">
                      <h4>Charles omondi</h4>
                      <span>Feb 19, 2023 &bullet; Sports</span>
                    </div>
                  </div>
                </div>
              </div> 
            </div>
          </div>
          <div class="col-md-4">
            <div class="post-entry">
              <a href="#">
                <img src="<?=ASSETS?>vickers/images/news 3.jpg" alt="Image" class="img-fluid">
              </a>
              <div class="caption">
                <div class="caption-inner">
                  <h3 class="mb-3">Div II finals, Vickers FC vs Vegpro FC.</h3>
                  <div class="author d-flex align-items-center">
                    <div class="img mb-2 mr-3">
                      <img src="<?=ASSETS?>vickers/images/my logo.png" alt="">
                    </div>
                    <div class="text">
                      <h4>Charles omondi</h4>
                      <span>Feb 05, 2023 &bullet; Sports</span>
                    </div>
                  </div>
                </div>
              </div> 
            </div>
          </div>
        </div>

      </div>
    </div>
    
    <div class="site-section bg-dark">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="col-6 title-section">
              <h2 class="heading">Men Table</h2>
            </div>
            <div class="widget-next-match">
            <table class="table custom-table">
                <thead>
                  <tr>
                    <th>P</th>
                    <th>Team</th>
                    <th>W</th>
                    <th>D</th>
                    <th>L</th>
                    <th>PTS</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($standings_men AS $row){ ?>
                    <tr>
                      <th scope="row"><?php echo $row['position'];?></th>
                      <td><img src="https://www.fkfleagues.co.ke/assets/img/logos/<?php echo $row['teamId']?>.jpg" height="20" width="20" /> <?php echo $row['teamName'];?></td>
                      <td class="text-center"><?php echo $row['won'];?></td>
                      <td class="text-center"><?php echo $row['drawn'];?></td>
                      <td class="text-center"><?php echo $row['lost'];?></td>
                      <td class="text-center"><?php echo $row['points'];?></td>
                    </tr>
                  <?php } ?>
				        </tbody>
              </table>

            
            </div>
          </div>

          
          <div class="col-lg-6">
            <div class="col-6 title-section">
              <h2 class="heading">Women Table</h2>
            </div>
            
            <div class="widget-next-match">
              <table class="table custom-table">
                <thead>
                  <tr>
                    <th>P</th>
                    <th>Team</th>
                    <th>W</th>
                    <th>D</th>
                    <th>L</th>
                    <th>PTS</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($standings_wemen AS $row){ ?>
                    <tr>
                      <th scope="row"><?php echo $row['position'];?></th>
                      <td><img src="https://www.fkfleagues.co.ke/assets/img/logos/<?php echo $row['teamId']?>.jpg" height="20" width="20" /> <?php echo $row['teamName'];?></td>
                      <td class="text-center"><?php echo $row['won'];?></td>
                      <td class="text-center"><?php echo $row['drawn'];?></td>
                      <td class="text-center"><?php echo $row['lost'];?></td>
                      <td class="text-center"><?php echo $row['points'];?></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>

          </div>
        </div>
      </div>
    </div> 

    <!-- .site-section -->

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-6 title-section">
            <h2 class="heading">pictures</h2>
          </div>
          <div class="col-6 text-right">
            <div class="custom-nav">
            <a href="#" class="js-custom-prev-v2"><span class="icon-keyboard_arrow_left"></span></a>
            <span></span>
            <a href="#" class="js-custom-next-v2"><span class="icon-keyboard_arrow_right"></span></a>
            </div>
          </div>
        </div>


        <div class="owl-4-slider owl-carousel">
          <div class="item">
            <div class="video-media">
              <img src="<?=ASSETS?>vickers/images/img_2.jpg" alt="Image" class="img-fluid">
              
            </div>
          </div>
          <div class="item">
            <div class="video-media">
              <img src="<?=ASSETS?>vickers/images/img_2.jpg" alt="Image" class="img-fluid">
            </div>
          </div>
          <div class="item">
            <div class="video-media">
              <img src="<?=ASSETS?>vickers/images/img_3.jpg" alt="Image" class="img-fluid">
            </div>
          </div>

          <div class="item">
            <div class="video-media">
              <img src="<?=ASSETS?>vickers/images/img_1.jpg" alt="Image" class="img-fluid">
              
            </div>
          </div>
          <div class="item">
            <div class="video-media">
              <img src="<?=ASSETS?>vickers/images/img_2.jpg" alt="Image" class="img-fluid">
            </div>
          </div>
          <div class="item">
            <div class="video-media">
              <img src="<?=ASSETS?>vickers/images/img_3.jpg" alt="Image" class="img-fluid">
            </div>
          </div>

        </div>

      </div>
    </div>

    <div class="container site-section">

    </div>

    <?php $this->view("vickers/footer",$data); ?>
      
      
    



    