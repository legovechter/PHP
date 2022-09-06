<?php
    include_once('auto.php');
    //include_once('autooverzicht.php');


    //$autoKeuze = new AutoKeuze();
    //$autoKeuze->setNaam("1");

    //foreach($autoKeuze->getAutoKeuze() as $a){
    //    echo $a."<br>";
    //}

    $autos = [
        new auto('opel','rond',5, 'www.url.com'),
        new Auto('bmw', 'vierkant', 6, 'url.nl'),
        new Auto('kia', 'rond', 6, 'url.nl'),
        new Auto('renault', 'vierkant', 4, 'url.nl')
    ];


    //$autoKeuze->addAuto($autos);

    foreach($autos as $auto){
        if($_POST['merk'] == null){
            if($auto->getPrijs() <= $_POST['maxPrijs'] && $auto->getPrijs() >= $_POST['minPrijs'] ){
                echo $auto->getMerk() .'-'. $auto->getType() .'-'. $auto->getPrijs() .'-'. $auto->getUrl() .'<br>';
            }
        }
        if($auto->getMerk() == $_POST['merk']){
            echo $auto->getMerk() .'-'. $auto->getType() .'-'. $auto->getPrijs() .'-'. $auto->getUrl() .'<br>';
        }
    }

    

    $minPrijs = $_POST['minPrijs'];
    $maxPrijs = $_POST['maxPrijs'];
    
?>
<html>
    
    
    
    <body>
        <br>
        
        <br>
        <form method="post">
            <select name="merk" id="merk">
                <option value="">--- Kies een merk ---</option>
                <option value="opel">Opel</option>
                <option value="bmw">BMW</option>
                <option value="kia">Kia</option>
                <option value="renault">Renault</option>
            </select>
            <div>
                <h3>MinPrijs: </h3>
            <input type="range" min="1" max="9" value="2" class="slider" id="myrange" name="minPrijs">
            </div>
            <div>
                <h3>MaxPrijs: </h3>
            <input type="range" min="2" max="10" value="6" class="slider" id="myrange" name="maxPrijs">
            </div>
            <div>
                <button type="submit">Submit</button>
            </div>
        </form>
    </body>
</html>


