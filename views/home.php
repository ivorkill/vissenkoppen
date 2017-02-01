<?php
echo "<div class='container'>";
$max = (empty($_GET['amount'])) ? 5 : $_GET['amount'];
if (sizeof($articles) > $max){
  $amount = $max;

}
else{
  $amount = sizeof($articles);
}
for ($i=1; $i < $amount + 1; $i++) {
  $image = getImage($articles[$i - 1]['id'], $mysqli);
  echo "<div class='article' data-container=".$i.">
    <div class='img hidden' data-content=".$i." style='background-image:url(".$image[0]['image'].")'>
    </div>
    <div class='text hidden' data-content=".$i.">
      <h1>".$articles[$i - 1]["title"]."</h1>
      <p>".$articles[$i - 1]["summary"]."</p>
      <a href='?action=full_page&id=".$articles[$i - 1]["id"]."'><img width='50%' src='images/leesmeer_button.png' alt='Lees meer'></a>
    </div>
  </div>";
}
echo "</div>";
echo "<div class='fishTail'></div>";
if (sizeof($articles) > $max){
  echo "<a class='fishy' href='?page=home&amount=".($max+5)."'><div></div></a>";
}
?>
