<?php

$number = 8;

$text = <<<DEMO
  Lorem ipsum "dolor" sit 'amet', consectetur adipisicing elit.
  Maxime fugiat dolores fugit quibusdam amet ipsam aspernatur dolor
  assumenda quo atque, quaerat voluptatum id, iusto veniam eaque
  officia quis mollitia dolorem! Hail $number
DEMO;

echo $text;