<?php
if (!defined('main')) {
  echo "<script>window.location.href='/index.php'</script>";
  exit();
};
?>

<link rel="stylesheet" type="text/css" href="<?= APP_URL;?>assets/css/variable.css">
<style type="text/css">
  /*--------------------------------------------------------------
# Header   with pc L
--------------------------------------------------------------*/
  #header {
    /* max-width: 1520px; */
    padding: 0 9%;
    margin: 0 auto;
    z-index: 999;
    background: #fff;
    box-shadow: 0 0 6px #a4a4a4;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
  }

  #header a.active {
    color: rgb(28, 200, 138) !important;
    position: relative !important;

  }



  #header .container {
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  #header .logo {
    height: 50px;
  }

  #header .logo img {
    width: 100%;
    height: 100%;
    object-fit: contain;
  }

  #header .navbar {
    padding: 0;
    margin: 0;
    display: flex;
    align-items: center;
  }

  #header .navbar ul {
    margin: 0 0 0 0;
    list-style: none;
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  #header .navbar ul li {
    margin: 0 5px;
    padding: 20px 5px;
    display: inline-block;
    /* background: rebeccapurple; */
  }

  #header .navbar ul li a {
    color: #6b6b6b;

  }

  #header .navbar ul li a:hover,
  #header .navbar ul li a:focus {
    color: rgb(28, 200, 138);
  }

  #header .navbar ul li.megamenu:hover ul {
    visibility: visible;
    opacity: 1;
  }

  #header .navbar ul li.megamenu ul {
    z-index: -1;
    visibility: hidden;
    opacity: 0;
    padding: 0;
    padding: 20px 0;
    overflow: hidden;
    position: absolute;
    left: 0;
    right: 0;
    top: 100%;
    background: white;
    box-shadow: 0 3px 3px #6b6b6b;
    display: block;
    border-bottom-left-radius: 4px;
    border-bottom-right-radius: 4px;
    /* width: 100%; */

    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));


    /* latest */
    width: 122%;
    padding: 10px 11% 10px 11%;
    margin-left: -11%;
  }

  #header .navbar ul li.megamenu ul li {
    /* flex: 1 1 180px; */
    display: block;
    /* background: blue; */
    margin: 0;
    padding: 0;
  }

  #header .navbar ul li.megamenu ul li a {
    padding: 10px 15px;
    display: block;
    color: #6b6b6b;
    /* background: red; */
    margin: 0;
  }

  #header .navbar ul li.megamenu ul li a:hover {
    color: #6b6b6b;
    background: #eee;
  }

  #search_toggle {
    display: none;
  }

  #search_btn {
    display: none;
  }

  .btns_icon {
    display: none;
  }

  /* *********************************
  * Under 1200px
  ************************************ */
  @media (max-width:1200px) {

    /* #header {
      display: flex;
      align-items: center;
      justify-content: space-between;
    } */
    #header .navbar {
      padding: 10px 0;
    }

    #header .navbar .primary_menu {
      clip-path: polygon(100% 0, 100% 0, 100% 100%, 100% 100%);
      padding: 5px;
      position: fixed;
      right: 0;
      bottom: 0;
      top: 60px;
      max-width: 280px;
      min-width: 250px;
      background: #fff !important;

      display: flex;
      flex-direction: column;
      align-items: flex-start;
      justify-content: flex-start;

      transition: 0.3s;
      transform-origin: right;
    }

    .mobile-nav-active {
      overflow: hidden;
    }

    .mobile-nav-active::after {
      content: '';
      display: block;
      clear: both;
      position: fixed;
      left: 0;
      right: 0;
      bottom: 0;
      top: 0;
      background: black;
      opacity: 0.8;
      z-index: 555;
    }

    .mobile-nav-active #header .navbar .primary_menu {
      clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);
      transform: scale(1);
      overflow-y: scroll;
    }

    .mobile-nav-active #header .navbar .primary_menu li {
      width: 100%;
      margin: 0;
      padding: 0;
    }

    .mobile-nav-active #header .navbar .primary_menu li a {
      padding: 10px 15px;
      width: 100%;
      display: block;
    }

    .mobile-nav-active #header .navbar .primary_menu li a:hover {
      background: #eee;
    }

    #header .mobile-nav-toggle {
      display: block !important;
      font-size: 22px;
      cursor: pointer;
    }

    /* megameu hide and show */
    #header .navbar .primary_menu .megamenu ul {
      /* width: 100%; */
      display: none;
      box-shadow: unset;
      border-left: 2px solid #a4a4a4;
      border-radius: unset;
      padding: 0 !important;
      position: relative;
      visibility: visible;
      opacity: 1;
      left: 0;
      top: 0;
      margin-left: 16px !important;
      transition: 0;
      z-index: unset;

      /* latest */

      width: auto;
    }

    #header .navbar .primary_menu .megamenu ul.dropdown-active {
      display: block;

    }

    #header .navbar .primary_menu .megamenu .dropdown-active li {
      width: 100%;
      margin: 0px;
      transition: 0;
      padding: 0;
    }

    #header .navbar .primary_menu .megamenu .dropdown-active li a {
      padding: 0;
      transition: 0;
      display: block;
      cursor: pointer;
      margin: 0;
      padding: 10px 15px;


    }

    #header .navbar .primary_menu .megamenu .dropdown-active li a:hover {
      color: rgb(28, 200, 138);
    }

    .btns_icon {
      display: block;
    }
  }


  @media (max-width:700px) {

    .search_bar {
      display: none;
      position: fixed;
      left: 0;
      right: 0;
      top: 70px;
      padding: 20px;
      width: 100%;
      height: 100px;
      background: white;
      border-bottom: 2px solid #a4a4a4;

    }

    #search_btn {
      display: block;
      cursor: pointer;
    }

    #search_btn i {
      color: #6b6b6b;
      font-size: 20px;
    }



    #search_toggle:checked~.search_bar {
      display: block;
    }

    .btns_icon {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 10px;
      flex-direction: row;
    }
  }
</style>
<?php
$active_status = str_replace("/", "", $_SERVER['REQUEST_URI']);

?>


<header id="header" class="header" data-scrollto-offset="0">
  <div class="">
    <nav id="navbar" class="navbar">
      <a href="<?= APP_URL;?>" class="logo">
        <img src="<?= APP_URL;?>assets/img/latest_logo.png" title="D Engr Web" alt="D Engr Logo">
      </a>
      <ul class="primary_menu">
        <li><a class="nav-link 
            <?php if ($active_status == '') {
              echo 'active';
            } ?>" href="<?= APP_URL;?>">Home</a>
        </li>

        <!-- dropdown megamenu -->
        <li class=" megamenu ">
          <a class="tg_link
                <?php if ($active_status == 'demo') {
                  echo 'active';
                } ?>
            " href="<?= APP_URL;?>demo/">
            <span>Templates</span>
            <i class="bi bi-chevron-down dropdown-indicator"></i>
          </a>
          <!--megamenu menucontetn -->
          <ul>

            <?php
            if (isset($_GET['catagory'])) {
            }
            ?>
            <li><a class="" href="<?= APP_URL;?>demo/">All</a></li>
            <?php

            $i_cata_count = 0;
            $select_cata = $con->query("SELECT * FROM `project_catagory`");
            while ($row_cata = $select_cata->fetch_assoc()) {
              echo ' <li><a href="'.APP_URL.'demo/?catagory=' . $row_cata['catagory'] . '">' . ucfirst($row_cata['catagory']) . '</a>  </li>';
            } ?>
          </ul>
        </li>


        <li><a class="<?php if ($active_status == 'blog') {
                        echo 'active';
                      } ?>" href="<?= APP_URL;?>blog/"><span>Blog</span></a>
        </li>

        <li>
          <a class="nav-link  <?php if ($active_status == 'about') {
                                echo 'active';
                              } ?>" href="<?= APP_URL;?>about/">Contacts</a>
        </li>

        <li><a class="nav-link  <?php if ($active_status == 'faq') {
                                  echo 'active';
                                } ?>" href="<?= APP_URL;?>faq/">FAQ</a>
        </li>

        <li><a class="nav-link  <?php if ($active_status == 'my_profile') {
                                  echo 'active';
                                } ?>" href="<?= APP_URL;?>profile/"><i class="bi bi-person"></i>&nbsp;Profile</a>
        </li>



      </ul>

      <!-- search -->
      <input type="checkbox" name="" id="search_toggle">

      <div class="search_bar">
        <form action="<?= APP_URL;?>search/">
          <div class="input-group me-auto" id='serach_input'>
            <input required list="search_suggession" type="search" name='query' class="form-control" placeholder="Enter your Keyword" aria-label="Recipient's username" aria-describedby="basic-addon2">
            <button type='submit' class="input-group-text " id="basic-addon2"><i class="bi bi-search"></i></button>
          </div>

          <datalist id="search_suggession"> </datalist>

        </form>
      </div>
      <div class="btns_icon">
        <label id="search_btn" for="search_toggle">
          <i class="bi bi-search"></i>
        </label>
        <i class="bi bi-list mobile-nav-toggle d-none"></i>
      </div>
  </div>
  <!-- serch -->
  </nav><!-- .navbar -->


  </div>
</header><!-- End Header -->


<script>
  // load search keyword load
  setTimeout(() => {
    const serach_keyword_load = new XMLHttpRequest;
    serach_keyword_load.onload = function() {
      document.querySelector('#search_suggession').innerHTML = this.responseText;
    }
    serach_keyword_load.open("GET", "<?= APP_URL;?>assets/custom/search_keyword.php");;
    serach_keyword_load.send();

  })
</script>