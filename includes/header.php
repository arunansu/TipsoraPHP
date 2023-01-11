<?php 


  if ($_SERVER['HTTP_HOST'] == "localhost") {
      $folder_name = ""; $path = 'https://localhost/Tipsora/'.$folder_name;
  } else {
    $folder_name = ""; $path = 'https://'.$_SERVER['HTTP_HOST'].''.$folder_name.'/';
  }

  ?>



<noscript>
<div id="jqcheck"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAB60lEQVQ4T2NkwAHePzrxf3ebL1jWp/0oA5egGiM2pVgFQQq31uj/N/ANZvj+8T3D7aNHGDwbTxNvwKtbO/9f3dLHYJ+axfDn5w+GI/NnMRhFtTEISJtjGIIh8Pv39/87ak0ZzCLiGMRUNMCufnLxDMOlrZsY3JtOMrCwsKPowTDg3tGZ/59f2sVgFRvPkO+bAzZgwsZJDEcXzWNQtIlikDGIwG3Az+9v/+9qsGOwTc1h4JeQhhswcfMUhrcP7zEcXzyXwb3xMAMbuwDcEBTTzi7P/s/M8IFB3zccbDPMBSADQODs2sUMzFwyDIah/ZgGfHt/7/+BvmAGm+RsBl4RMawGfHr5jOHowlkMjiUbGDj55MCGwE060Of1X0RZi0Hb2Q4e3eguAElc2X2A4e2DmwwOhVsRBnx6cfH/yXm5DFZxyQxcAoJ4Dfj24T3DsUVzGcwSJjLwSxkygk3ZVmv4X805gkHZRBNXwkQRv3/+NsP1nUsYvFvOMzI+PLXo/73DSxgsouIYOHj5UBRi8wJIwY8vnxlOLV/CIGcewsC4vkDhv01yLoOIoiqG7bgMACn88Owxw8HpvQyMGwqV/vs19TMwQnxDEthYW8DAeGCC3/9XN46TpBGmWEzDkoHx06dP/z9//kyWAby8vAwAcza2SBMOSCMAAAAASUVORK5CYII=" alt="No Script" /> Javascript is disabled. Please enable it for better working experience.</div>
</noscript>
<div class="mobile-nav"> <a href="<?php echo $path;?>" class="logo-main"> <img src="<?php echo $basesurl;?>images/logo.png" alt="*" /></a>
  <nav>

    <ul class="unstyled mainnav pbpx-15">
      <li><a href="<?php echo $path;?>">Home</a></li>
      <li><a href="javascript:;">Services <i class="xicon icon-angle-down"></i></a>
        <ul class="firstlevel unstyled">
          <li class="ser">
              <a href="<?php echo $path;?>consulting">Consulting</a>
            </li>
          <li>
                            <a href="<?php echo $path;?>app-modernization">App Modernization</a>
                          </li>
                          <li>
                            <a href="<?php echo $path;?>cloud-migration">Cloud Migration</a>
                          </li>    
        </ul>
      <li>
              <a href="<?php echo $path;?>training">Training</a>
            </li>            
            <li>
              <a href="<?php echo $path;?>recruitment">Recruitment</a>
            </li>
            <li>
              <a href="<?php echo $path;?>about-us">About Us</a>
            </li>
            <li>
              <a href="<?php echo $path;?>contact">Contact Us</a>
            </li>
    </ul>

    


  </nav>
</div>
<main class="app-container">
<!-- Mobile Navigation Button Start-->
<div class="mobile-nav-btn"> <span class="lines"></span> </div>
<!-- Mobile Navigation Button End-->

<header class="header-main">
  <div class="container">
    <div class="row">
      <div class="col-md-2">
        <div class="logowrp">
           
           
          <a class="" href="javascript:;">
             <img class="lgo-drk terms" src="assets/images/logo.png" alt="logo-dark">          
          </a>
        </div>
      </div>
      <div class="col-md-7 my-auto">
        <div class="navwrp">
          <ul>
            <li>
              <a href="<?php echo $path;?>">Home</a>
            </li>
            <li class="ser">
              <a href="<?php echo $path;?>consulting">Consulting<i class="fa fa-caret-down" aria-hidden="true"></i></a>
                <div class="dropwrep">
                  <div class="row">                    
                    <div class="col-md-12">
                      <div class="row">
                       
                          <div class="manuwrp">
                        <ul>
                          <li>
                            <a href="<?php echo $path;?>app-modernization">App Modernization</a>
                          </li>
                          <li>
                            <a href="<?php echo $path;?>cloud-migration">Cloud Migration</a>
                          </li>                      
                        </ul>
                      </div>
                       
                      </div>
                    </div>
                  </div>
                </div>
            </li>
            <li>
              <a href="<?php echo $path;?>training">Training</a>
            </li>            
            <li>
              <a href="<?php echo $path;?>recruitment">Recruitment</a>
            </li>
            <li>
              <a href="<?php echo $path;?>about-us">About Us</a>
            </li>
            <li>
              <a href="<?php echo $path;?>contact">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-3">
        <div class="iconwrp">
            <ul>
              <li>
                <a href="https://www.facebook.com/tipsorallc" target="_blank" rel="noopener">
                <i class="fa-brands fa-facebook-f"></i>
                </a>
              </li>
              <li>
                <a href="https://www.instagram.com/tipsora" target="_blank" rel="noopener">
                <i class="fa-brands fa-instagram insta-icon"></i>
                </a>
              </li>
              <li>
                <a href="https://twitter.com/TipsoraLLC" target="_blank" rel="noopener">
                <i class="fa-brands fa-twitter twitter-icon"></i>
                </a>
              </li>
              <li>
                <a href="https://www.linkedin.com/company/tipsorallc" target="_blank" rel="noopener">
                <i class="fa-brands fa-linkedin link-icon"></i>
                </a>
              </li>
            </ul>  
        </div>
      </div>
    </div>
  </div>
  




</header>


