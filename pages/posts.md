---
layout: layout.html
---
<section class="section-img-posts">
  <div 
    class="container-img-posts scrollable" 
    data-images='{{ images | jsonify }}'>
  </div>
<div class="container-btn">
    <button class="btn btn-left">←</button>
    <button class="btn btn-right">→</button>
</div>
</section>
<div class="pre-title"></div>
<section class="section-text-posts">
    <h1 class="text-subpage title-subpage">{{ title }}</h1>
    <div class="container-text-posts">
        <h2 class="text-subpage details-text-subpage text-indent">{{ plz }} {{ ort }}</h2>
        <p class="text-subpage details-text-subpage description-text-subpage">{{ description }}</p>
    </div>
</section> 
<script src="/assets/js/posts.js"></script>
