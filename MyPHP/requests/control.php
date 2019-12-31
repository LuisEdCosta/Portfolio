<?php

    // Retrieves current session
    session_start();

    // Return variable
    $myData = array();


    function setLang() {
        $_SESSION['lang'] = $_POST['lang'];
    }


    function display() {
        
        global $myData;
        $name = $_POST['name'];
        
        if($_SESSION['lang'] == 'fr') {
            switch($name) {
                case "HOME":
                    $myData['box-1'] = "";
                    
                    $myData['box-2'] =
                        "<h2>Description</h2>
                         <p>
                            Programmeur qui provient d'un milieu d'ing&eacute;nierie m&eacute;canique.
                         </p>
                         <p>
                            Depuis un cours en 2015 sur le logiciel MATLAB, j'ai fait un stage chez BRP 
                            <br>
                            en 2016-2017 en tant que d&eacute;veloppeur logiciel.
                         </p>
                         <p>
                            R&eacute;cemment j'ai compl&eacute;t&eacute; un certificat en informatique appliqu&eacute;e &agrave; l'Universit&eacute; de Montr&eacute;al
                            <br>
                            afin d'aprofondir mes connaissances des diff&eacute;rents languages de programmation.
                         </p>
                         <a href='https://admission.umontreal.ca/programmes/certificat-en-informatique-appliquee/'  target='_blank' style='color:black;font-weight:bold;'>
                            <i class='fa fa-external-link-square' aria-hidden='true'></i>
                            Lien vers le certificat.
                         </a>";
                    
                    $myData['box-3'] =
                        "<h2>Languages de programmation utilis&eacute;s</h2>
                         <ul style='list-style-type:none;text-align:right'>
                            <li>C/C++</li>
                            <li>Java</li>
                            <li>HTML</li>
                            <li>CSS</li>
                            <li>JavaScript</li>
                            <li>PHP</li>
                            <li>SQL</li>
                            <li>Visual Basic</li>
                            <li>MATLAB</li>
                            <li>Android Studio</li>
                         </ul>";
                         
                    $myData['box-4'] = "";
                    break;
                    
                case "BRP":
                    $myData['box-1'] = 
                        "<img src='../MyImages/brp.png' alt='Icon brp' style='width:250px;height:250px'>";
                        
                    $myData['box-2'] = 
                        "<h2>Description</h2>
                        <p>
                            D&eacute;veloppement d'une application windows (DART) par l'interm&eacute;diaire du logiciel MATLAB.
                        </p>
                        <p>
                            DART est un logiciel d'analyse de donn&eacute;es qui g&eacute;n&egrave;re des rapports automatis&eacute;s
                            <br>
                            afin d'am&eacute;liorer la standardization de ceux-ci au sein de l'entreprise.
                        </p>
                        <p>
                            Ce projet a requis de collaborer avec les ing&eacute;nieurs de plusieurs d&eacute;partements.
                            <br>
                            afin d'impl&eacute;menter les requis de chacun de ces d&eacute;partements.
                        </p>
                        <a href='https://www.brp.com/'  target='_blank' style='color:black;font-weight:bold;'>
                            <i class='fa fa-external-link-square' aria-hidden='true'></i>
                            web :: brp.com
                        </a>
                        <p>
                            Le code source de ce programme ne peut &ecirc;tre partag&eacute; &agrave; cause d'un contrat de confidentialit&eacute;.
                        </p>";
                    
                    $myData['box-3'] = 
                        "<h2>Languages de programmation</h2>
                         <ul style='list-style-type:none;text-align:right'>
                            <li>MATLAB</li>
                            <li>ActiveX® control pour Excel</li>
                         </ul>";
                        
                    $myData['box-4'] = 
                        "<h2>Exp&eacute;rience</h2>
                         <p>8 mois en tant qu'ing&eacute;nieur stagiaire en d&eacute;velopement logiciel.
                         </p>
                         <p>841, rue Cartier, Valcourt, Qu&eacute;bec
                            <br>
                            <i class='fa fa-mobile' aria-hidden='true'></i>
                            +1.450.532.5100
                         </p>";
                    break;
                    
                case "WEB":
                    $myData['box-1'] = 
                        "<img src='../MyImages/web.png' alt='web img' style='width:550px;height:300px'>";
                        
                    $myData['box-2'] = 
                        "<h2>Description</h2>
                        <p>D&eacute;veloppement web d'un service de location de films.</p>
                        <p>
                            Ce projet d'&eacute;cole a requis de produire une version client ainsi qu'une page 
                            <br>
                            de gestion  afin d'ajouter ou enlever des films de la base de donn&eacute;es.
                        </p>
                        <p>
                            Aucune requ&ecirc;te asynchrone a &eacute;t&eacute; utilis&eacute;e pour ce projet scolaire,
                            <br>
                            par contre ce portfolio en fait usage pour afficher son contenu.
                        </p>
                        <p>
                            <a href='https://github.com/LuisEdCosta/IFT1147-MovieRental'  target='_blank' style='color:black;font-weight:bold;'>
                                <i class='fa fa-external-link-square' aria-hidden='true'></i>
                                Code source pour le projet scolaire.
                            </a>
                        </p>
                        <p>
                            <a href='https://github.com/LuisEdCosta/Portfolio'  target='_blank' style='color:black;font-weight:bold;'>
                                <i class='fa fa-external-link-square' aria-hidden='true'></i>
                                Code source pour ce portfolio.
                            </a>
                        </p>";
                    
                    $myData['box-3'] = 
                        "<h2>Languages de programmation</h2>
                         <ul style='list-style-type:none;text-align:right'>
                            <li>HTML, CSS</li>
                            <li>JavaScript</li>
                            <li>PHP</li>
                            <li>Requ&ecirc;tes asynchrones en JSON</li>
                            <li>SQL</li>
                         </ul>";
                        
                    $myData['box-4'] = 
                        "<h2>Exp&eacute;rience</h2>
                         <p>
                            Projet scolaire dans le cadre d'un cours de 
                            <br>
                            d&eacute;velopement web pour l'obtention du certificat (IFT1147).
                         </p>
                         <p>2900, &Eacute;douard-Montpetit, Montr&eacute;al (Québec)
                            <br>
                            <i class='fa fa-mobile' aria-hidden='true'></i>
                            +1.514.343.6111
                         </p>";
                    break;
                    
                case "ANDROID" :
                    $myData['box-1'] = 
                        "<img src='../MyImages/tictactoe.jpg'
                            alt='tictactoe' style='width:400px;height:500px'>";
                            
                    $myData['box-2'] = 
                        "<h2>Description</h2>
                        <p>Un jeu de Tic Tac Toe game pour un appareil android.</p>
                        <p>
                            Ce projet scolaire a requis la possibilit&eacute; de changer l'orientation de l'appareil,
                            <br>
                            et autres r&eacute;glages tel que le choix de langue de l'appareil ce qui affecte l'affichage du jeu.
                        </p>
                        <p>
                            Le joueur adverse ne peut pas perdre (&eacute;galit&eacute; dans le pire des cas).
                        </p>
                        <p>
                            <a href='https://github.com/LuisEdCosta/IFT1135-AndroidTicTacToe'  target='_blank' style='color:black;font-weight:bold;'>
                                <i class='fa fa-external-link-square' aria-hidden='true'></i>
                                Code source pour ce projet scolaire         
                            </a>
                        </p>";
                    
                    $myData['box-3'] = 
                        "<h2>Languages de programmation</h2>
                         <ul style='list-style-type:none;text-align:right'>
                            <li>D&eacute;velopp&eacute; &agrave; partir de Android Studio</li>
                            <li>Java</li>
                         </ul>";
                         
                    $myData['box-4'] = 
                        "<h2>Exp&eacute;rience</h2>
                         <p>
                            Projet universitaire pour un cours de d&eacute;veloppement androide (IFT1135).
                         </p>
                         <p>2900, &Eacute;douard-Montpetit, Montr&eacute;al (Québec)
                            <br>
                            <i class='fa fa-mobile' aria-hidden='true'></i>
                            +1.514.343.6111
                         </p>";
                    break;
                    
                case "RACING" :
                    $myData['box-1'] = 
                        "<img src='../MyImages/karting.jpg'
                        alt='karting' style='width:550px;height:350px'>";
                        
                    $myData['box-2'] = 
                        "<h2>Ing&eacute;nieur de course/m&eacute;canicien</h2>
                         <p>
                            Travailler avec un pilote afin d'am&eacute;liorer les r&eacute;glages du kart et en extraire
                            <br>
                            une vitesse moyenne sup&eacute;rieure tout en assurant une bonne maintenance du mat&eacute;riel.
                         </p>
                         <p>
                            Combiner mes connaissances d'ing&eacute;nierie m&eacute;canique et de programmation afin de
                            <br>
                            simplifier l'analyse des donn&eacute;es de t&eacute;l&eacute;m&eacute;trie.
                         </p>";
                         
                    $myData['box-3'] = "<img src='../MyImages/sae.jpg' alt='sae car' style='width:550px;height:350px'>";
                    
                    $myData['box-4'] = 
                        "<h2>Pilote de formule SAE pour l'&eacute;quipe de Formule &Eacute;TS</h2>
                         <p>Pilote et membre d'&eacute;quipe durant 4 saisons.</p>
                         <p>
                            Participation dans la fabrication, les &eacute;v&eacute;nements de relations publiques
                            <br>
                            ainsi que le d&eacute;veloppement continue de la voiture et le pilotage de la formule
                            <br>
                            durants les comp&eacute;titions internationales.
                         </p>
                         <p>
                            <a href='https://formuleets.ca/'  target='_blank' style='color:black;font-weight:bold;'>
                                <i class='fa fa-external-link-square' aria-hidden='true'></i>
                                Lien au site de la Formule &Eacute;TS.
                            </a>
                         </p>";
                    
                    
                    break;
                    
            }
        }else {
            switch($name) {
                case "HOME":
                    $myData['box-1'] = "";
                    
                    $myData['box-2'] =
                        "<h2>Description</h2>
                         <p>
                            Now programmer with a background in mechanical engineering prior to making the switch.
                         </p>
                         <p>
                            First introduced to coding in 2015 using MATLAB, which led to an internship 
                            <br>
                            at BRP in 2016-2017 as a software developer.
                         </p>
                         <p>
                            I have since then completed a certificate at l'Universit&eacute; de Montr&eacute;al
                            <br>
                            to further my knowledge the different languages currently used.
                         </p>
                         <a href='https://admission.umontreal.ca/programmes/certificat-en-informatique-appliquee/'  target='_blank' style='color:black;font-weight:bold;'>
                            <i class='fa fa-external-link-square' aria-hidden='true'></i>
                            Link to certificate credentials
                         </a>";
                    
                    $myData['box-3'] =
                        "<h2>Programming languages I've worked with</h2>
                         <ul style='list-style-type:none;text-align:right'>
                            <li>C/C++</li>
                            <li>Java</li>
                            <li>HTML</li>
                            <li>CSS</li>
                            <li>JavaScript</li>
                            <li>PHP</li>
                            <li>SQL</li>
                            <li>Visual Basic</li>
                            <li>MATLAB</li>
                            <li>Android Studio</li>
                         </ul>";
                         
                    $myData['box-4'] = "";
                    break;
                    
                case "BRP":
                    $myData['box-1'] = 
                        "<img src='../MyImages/brp.png' alt='Icon brp' style='width:250px;height:250px'>";
                        
                    $myData['box-2'] = 
                        "<h2>Description</h2>
                        <p>
                            Development of a windows application (DART) using MATLAB.
                        </p>
                        <p>
                            DART is a data analysis tool which generates automatic reports for standardization
                            <br> 
                            purposes accross the company departments.
                            <br>
                        </p>
                        <p>
                            This project required working in collaboration with the engineers of various departments
                            <br>
                            in order to implement their requirements for the software.
                        </p>
                        <a href='https://www.brp.com/'  target='_blank' style='color:black;font-weight:bold;'>
                            <i class='fa fa-external-link-square' aria-hidden='true'></i>
                            web :: brp.com
                        </a>
                        <p>
                            Code can't be shared due to a confidentiality contract.
                        </p>";
                    
                    $myData['box-3'] = 
                        "<h2>Programming languages</h2>
                         <ul style='list-style-type:none;text-align:right'>
                            <li>MATLAB</li>
                            <li>ActiveX® control for Excel</li>
                         </ul>";
                        
                    $myData['box-4'] = 
                        "<h2>Experience</h2>
                         <p>8 months as an engineering intern in software development.</p>
                         <p>841, rue Cartier, Valcourt, Qu&eacute;bec
                            <br>
                            <i class='fa fa-mobile' aria-hidden='true'></i>
                            +1.450.532.5100
                         </p>";
                    break;
                    
                case "WEB":
                    $myData['box-1'] = 
                        "<img src='../MyImages/web.png' alt='web img' style='width:550px;height:300px'>";
                        
                    $myData['box-2'] = 
                        "<h2>Description</h2>
                        <p>Web development of a movie rental service.</p>
                        <p>
                            This school project required a layout for its clients and a 
                            <br>
                            manager only hub to add/remove movies from the database.
                        </p>
                        <p>
                            Although asynchronous requests weren't used for this project,
                            <br>
                            this current website is built enterily around that concept.
                        </p>
                        <p>
                            <a href='https://github.com/LuisEdCosta/IFT1147-MovieRental'  target='_blank' style='color:black;font-weight:bold;'>
                                <i class='fa fa-external-link-square' aria-hidden='true'></i>
                                Code for this school project
                            </a>
                        </p>
                        <p>
                            <a href='https://github.com/LuisEdCosta/Portfolio'  target='_blank' style='color:black;font-weight:bold;'>
                                <i class='fa fa-external-link-square' aria-hidden='true'></i>
                                Code for this current website
                            </a>
                        </p>";
                    
                    $myData['box-3'] = 
                        "<h2>Programming languages</h2>
                         <ul style='list-style-type:none;text-align:right'>
                            <li>HTML, CSS</li>
                            <li>JavaScript</li>
                            <li>PHP</li>
                            <li>JSON asynchronous requests</li>
                            <li>SQL</li>
                         </ul>";
                        
                    $myData['box-4'] = 
                        "<h2>Experience</h2>
                         <p>
                            School project required for a web 
                            <br>
                            development class towards the certificate (IFT1147).
                         </p>
                         <p>2900, &Eacute;douard-Montpetit, Montr&eacute;al (Québec)
                            <br>
                            <i class='fa fa-mobile' aria-hidden='true'></i>
                            +1.514.343.6111
                         </p>";
                    break;
                    
                case "ANDROID" :
                    $myData['box-1'] = 
                        "<img src='../MyImages/tictactoe.jpg'
                            alt='tictactoe' style='width:400px;height:500px'>";
                            
                    $myData['box-2'] = 
                        "<h2>Description</h2>
                        <p>A Tic Tac Toe game for an android device.</p>
                        <p>
                            This school project required to be able to change the orientation of the device,
                            <br>
                            and other settings such as device language to affect the display of the application.
                        </p>
                        <p>
                            AI was required to never lose (at worst draw with the player).
                        </p>
                        <p>
                            <a href='https://github.com/LuisEdCosta/IFT1135-AndroidTicTacToe'  target='_blank' style='color:black;font-weight:bold;'>
                                <i class='fa fa-external-link-square' aria-hidden='true'></i>
                                Code for this school project
                            </a>
                        </p>";
                    
                    $myData['box-3'] = 
                        "<h2>Programming languages</h2>
                         <ul style='list-style-type:none;text-align:right'>
                            <li>Developed using Android Studio</li>
                            <li>Java</li>
                         </ul>";
                         
                    $myData['box-4'] = 
                        "<h2>Experience</h2>
                         <p>
                            School project required for an android 
                            <br>
                            development class towards the certificate (IFT1135).
                         </p>
                         <p>2900, &Eacute;douard-Montpetit, Montr&eacute;al (Québec)
                            <br>
                            <i class='fa fa-mobile' aria-hidden='true'></i>
                            +1.514.343.6111
                         </p>";
                    break;
                    
                case "RACING" :
                    $myData['box-1'] = 
                        "<img src='../MyImages/karting.jpg'
                        alt='karting' style='width:650px;height:400px'>";
                        
                    $myData['box-2'] = 
                        "<h2>Racing engineer/mechanic</h2>
                         <p>
                            Working with a driver to develop setups that improve the kart's balance and 
                            <br>
                            overall speed while ensuring proper maintenance.
                         </p>
                         <p>
                            Combining my knowledge of mechanical engineering and programming to
                            <br>
                            facilitate in telemetry analysis.
                         </p>";
                    
                    $myData['box-3'] = "<img src='../MyImages/sae.jpg' alt='sae car' style='width:650px;height:400px'>";
                    
                    $myData['box-4'] = 
                        "<h2>Formula SAE driver for Formule &Eacute;TS</h2>
                         <p>Driver and team member for four seasons.</p>
                         <p>
                            Roles included manufacturing, attending PR events, 
                                as well as developing 
                            <br>
                            and piloting the formula car around various international competitions.
                         </p>
                         <p>
                            <a href='https://formuleets.ca/'  target='_blank' style='color:black;font-weight:bold;'>
                                <i class='fa fa-external-link-square' aria-hidden='true'></i>
                                Link to Formule &Eacute;TS website.
                            </a>
                         </p>";
                    break;
                    
            }
        }
    }

 
    // Control
    $action = $_POST['action'];
    switch($action) {
        case "setLang" :
    	    setLang();
    	    break;
    
        case "display" :
            display();
    	    echo json_encode($myData);
    	    break;
    }
?>