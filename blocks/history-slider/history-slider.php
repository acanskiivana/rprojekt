<?php
// Ensure ACF is installed.
if( !function_exists('get_field') ) {
    return;
}
?>
<div class="history-slider slider container">
  <div class="history-slider__header">
    <h2>Istorijat</h2>
    <div class="history-slider__controls">
      <button class="history-slider__prev"><</button>
      <button class="history-slider__next">></button>
    </div>
  </div>
  <div class="history-slider__numbers">
    <div id="largeNumber" class="history-slider__number history-slider__number--large large"></div>
    <div id="smallNumbers" class="history-slider__small-numbers">
    
    </div>
  </div>
  </div>
</div>
  <div class="history-slider__content">
    <div class="history-slider__image">
      <img id="historyImage" src="" alt="Slide Image" />
    </div>
  
    <p id="historyDescription" class="history-slider__description"></p>
</div>













