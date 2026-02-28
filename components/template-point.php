<div 
	class="point-map elementor-repeater-item-<?php echo esc_attr($id); ?>"
>
  <svg 
	version='1.2'
	xmlns='http://www.w3.org/2000/svg'
	class='point-map-peru'
	style="width: 100%"
  >
    <g preserveAspectRatio='xMidYMid meet' transform='translate(5, 5)'>
      <circle cx='10' cy='10' r='10' fill='transparent' stroke='#699FD8' stroke-width='2' />
      <circle cx='10' cy='10' r='6' fill='#699FD8' stroke='#699FD8' stroke-width='1' />
    </g>
  </svg>
  <div class="container-message">
    <h3>
      <?php echo $title; ?>
    </h3>
    <div class="content">
      <?php echo $content; ?>
    </div>
  </div>
</div>