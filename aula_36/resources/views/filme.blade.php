<?php
$filmes = [
  1 => "Toy Story",
  2 => "Procurando Nemo",
  3 => "Avatar",
  4 => "Star Wars: Episódio V",
  5 => "Up",
  6 => "Mary e Max"
];

?>

@for ($i=1; $i <= 6; $i++)
  {{$filmes[$i]}}<br>
@endfor
