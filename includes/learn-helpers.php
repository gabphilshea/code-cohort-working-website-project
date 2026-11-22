<?php

function learn_open($title, $lead) {
  echo '<main class="container my-4 learn-page"><h1>' . htmlspecialchars($title) . '</h1>';
  echo '<p class="lead">' . htmlspecialchars($lead) . '</p>';
  echo '<p class="small">Jump to: <a href="#background">Background</a> | <a href="#basics">Basics</a> | <a href="#materials">Materials</a> | <a href="#more">More to know</a></p>';
}
function learn_close() { echo '</main>'; }
function code($lang, $src) {
  echo '<pre class="learn-code"><code class="language-' . $lang . '">' . htmlspecialchars(trim($src)) . '</code></pre>';
}
function material($type, $label, $src = '') {
  echo '<div class="col-md-6"><div class="learn-material"><h3 class="h6">' . htmlspecialchars($label) . '</h3>';
  if ($src === '') {
    echo '<p class="small mb-0">PLACEHOLDER: add a ' . $type . ' here.</p>';
  } elseif ($type === 'article') {
    echo '<a href="' . htmlspecialchars($src) . '" target="_blank" rel="noopener">Open article</a>';
  } else {
    $url = ($type === 'video') ? 'https://www.youtube.com/embed/' . $src : $src;
    echo '<div class="ratio ratio-16x9"><iframe src="' . htmlspecialchars($url) . '" title="' . htmlspecialchars($label) . '" loading="lazy" allowfullscreen></iframe></div>';
  }
  echo '</div></div>';
}
