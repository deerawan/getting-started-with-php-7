<?php

function printWeatherWidget($currentCity) {
  $html =
<<<WIDGET
  <div class="widget">
    <h4 class="widget-title">My Widget Title</h4>
    <div class="widget-body">
      Weather Information of $currentCity
      <input type="text" name="weather" placeholder="input your city" />
    </div>
  </div>
WIDGET;

  return $html;
}

echo printWeatherWidget('California');