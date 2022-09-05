<?php
    echo "<table style='border: solid 1px black;'>";
    echo "<tr><th>Cursistnummer</th><th>FirstName</th><th>LastName</th><th>Straat</th><th>Postcode</th><th>Plaats</th><th>Geslacht</th><th>GeboorteDatum</th></tr>";

    class TableRows extends RecursiveIteratorIterator {
        function __construct($it){
            parent::__construct($it, self::LEAVES_ONLY);
        }

        function current(){
            return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
        }

        function beginChildren(){
            echo "<tr>";
        }

        function endChildren(){
            echo "</tr>" . "\n";
        }
    }

    $host = 'localhost';
    $user = 'root';
    $pass = 'B3gN4w8J';
    $db = 'phpschool';

try{
    $conn = new PDO('mysql:host=' .$host.';dbname='.$db, $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT cursistnr, roepnaam, naam, straat, postcode, plaats, geslacht, geb_datum FROM cursist");
    $stmt->execute();

        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

        foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
            echo $v;
        }
}

catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>



