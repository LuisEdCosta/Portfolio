<!-- 

   Luis Costa
   
   21/12/2019
   
   navbar.php

-->

<link rel="stylesheet" type="text/css" href="../MyCSS/navbar.css" />
<script src="../MyJS/setLang.js"></script>
<script src="../MyJS/displayContent.js"></script>

<nav id="navbar">
    <ul class="navbar-container">
        <li class="navbar-elements" style="float:left">
            <a href="javascript:void(0)" onClick="displayContent('HOME')" id="HOME">
                <?php
                    if($_SESSION['lang'] == 'fr') {
                        echo "Acceuil";
                    }else{
                        echo "Home";
                    }
                ?>
            </a>
        </li>
        
        <li class="navbar-elements" style="float:left">
            <a href="javascript:void(0)" onClick="displayContent('BRP')" id="BRP">
                <?php
                    if($_SESSION['lang'] == 'fr') {
                        echo "D&eacute;veloppement :: Logiciel";
                    }else{
                        echo "Software :: Development";
                    }
                ?>
            </a>
        </li>
        
        <li class="navbar-elements" style="float:left">
            <a href="javascript:void(0)" onClick="displayContent('WEB')" id="WEB">
                <?php
                    if($_SESSION['lang'] == 'fr') {
                        echo "D&eacute;veloppement :: Web";
                    }else{
                        echo "Web :: Development";
                    }
                ?>
            </a>
        </li>
        
        <li class="navbar-elements" style="float:left">
            <a href="javascript:void(0)" onClick="displayContent('ANDROID')" id="ANDROID">
                <?php
                    if($_SESSION['lang'] == 'fr') {
                        echo "D&eacute;veloppement :: Android";
                    }else{
                        echo "Android :: Development";
                    }
                ?>
            </a>
        </li>
        
        <li class="navbar-elements" style="float:left">
            <a href="javascript:void(0)" onClick="displayContent('RACING')" id="RACING">
                <?php
                    if($_SESSION['lang'] == 'fr') {
                        echo "Autres projets";
                    }else{
                        echo "Other projects";
                    }
                ?>
            </a>
        </li>
        
        <li class="navbar-elements" style="float:right">
            <a href="javascript:void(0)" onClick="setLang('en')"
                <?php
                    if($_SESSION['lang'] == 'en') {
                        echo "style='color:#2c87f0;background-color:#f6fdff;'";
                    }
                ?>
            >
                en
            </a>
        </li>
        
        <li class="navbar-elements" style="float:right">
            <a href="javascript:void(0)" onClick="setLang('fr')"
                <?php
                    if($_SESSION['lang'] == 'fr') {
                        echo "style='color:#2c87f0;background-Color:#f6fdff;'";
                    }
                ?>
            >
                fr
            </a>
        </li>
    </ul>
</nav>

   


   
      
   





     
   
  
  

