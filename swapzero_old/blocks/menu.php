<?php
include ($_SERVER['DOCUMENT_ROOT']."/settings/config.php");

echo ' <div class="navbar-collapse navbar-sidenav fc-scroll ps collapse" id="navbarResponsive" style="">
      <ul class="navbar-nav" id="exampleAccordion">
        <li class="nav-item">
          <a class="nav-link" href="'.$site_url_shot.'">
            <i class="icon-refresh icons"></i>
            <span class="nav-link-text">Обмен валют</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="'.$site_url_shot.'pages/crypto.php">
            <i class="fab fa-bitcoin icons"></i>
            <span class="nav-link-text">Криптовалюта</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="'.$site_url_shot.'pages/forshop.php">
            <i class="icon-bag icons"></i>
            <span class="nav-link-text">Интернет-магазинам</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="'.$site_url_shot.'pages/plans.php">
            <i class="icon-star icons"></i>
            <span class="nav-link-text">Тарифы</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="'.$site_url_shot.'pages/faq.php">
            <i class="icon-question icons"></i>
            <span class="nav-link-text">F.A.Q</span>
          </a>
        </li>
        
    
      </ul>
        </div>';

?>