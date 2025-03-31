<?php


include_once 'vliegkostenfunctions.php';


$vluchten = [
    [3722, 2.05, 20, 'Economy class'],
    [9276, 3.11, 10, 'Economy class'],
    [803, 2.83, 0, 'Business class'],
];

echo "<div style=' color: white; padding: 20px;'>";
echo "<h2>Controle</h2>";
echo "<ul>";
foreach ($vluchten as $index => $vlucht) {
    list($afstand, $kerosinePrijs, $bagageKilo, $klasse) = $vlucht;
    $kosten = vliegkosten($afstand, $kerosinePrijs, $bagageKilo, $klasse);

    echo "<li style='margin-bottom: 10px; padding: 10px; border: 1px solid #ddd; background-color: #383c44;'>";
    echo "Vlucht van <span style='font-weight: bold;'>" . $afstand . " km</span>, Kerosine <span style='color: blue;'>€" . $kerosinePrijs . "</span>, Bagage <span style='color: green;'>" . $bagageKilo . " kg</span>, Klasse: <span style='color: orange;'>" . $klasse . "</span>: <span style='color: red; font-weight: bold;'>€" . number_format($kosten, 2) . "</span>";
    echo "</li>";


    if ($index === 0) {
        echo "<li style='margin-bottom: 10px; padding: 10px; border: 1px solid #ddd; background-color: #383c44;'>Uitkomst: 3722 km: €354.34</li>";
    } elseif ($index === 1) {
        echo "<li style='margin-bottom: 10px; padding: 10px; border: 1px solid #ddd; background-color: #383c44;'>Uitkomst: 9276 km: €1,011.61</li>";
    } elseif ($index === 2) {
        echo "<li style='margin-bottom: 10px; padding: 10px; border: 1px solid #ddd; background-color: #383c44;'>Uitkomst: 803 km + business: €113.62</li>";
    }
}
echo "</ul>";
echo "</div>";