<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
      body {
        background-color: #00FA9A;
      }
    </style>
  </head>
  <body>
    <p style="text-align:center">REALIDAD AUMENTADA</p>
  </body>
  <script
    type="module"
    src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"
  ></script>

  <model-viewer
    src="1ab.glb"
    ar
    ar-modes="scene-viewer webxr quick-look"
    shadow-intensity="6.4"
    interpolation-decay="200"
    auto-rotate
    camera-controls
  >
    <button
      class="Hotspot"
      slot="hotspot-1"
      data-position="0.34921196987595127m -2.3979877223513446m 0.24374315309017763m"
      data-normal="0.9963054410763085m 0.08181938595940326m -0.02609705276403061m"
      data-visibility-attribute="visible"
    >
      <div class="HotspotAnnotation">abeja</div>
    </button>
    <div class="progress-bar hide" slot="progress-bar">
      <div class="update-bar"></div>
    </div>
  </model-viewer>

  <model-viewer
    src="elefantra.glb"
    shadow-intensity="10"
    auto-rotate
    camera-controls
  >
    <button
      class="Hotspot"
      slot="hotspot-1"
      data-position="0.7424144726102979m -4.062089788680346m 14.294037340696555m"
      data-normal="0m 1m 2.2204460492503128e-16m"
      data-visibility-attribute="visible"
    >
      <div class="HotspotAnnotation">elefante</div>
    </button>
    <div class="progress-bar hide" slot="progress-bar">
      <div class="update-bar"></div>
    </div>
    <button slot="ar-button" id="ar-button"></button>
  </model-viewer>

  <model-viewer
    src="iaga.glb"
    shadow-intensity="10"
    auto-rotate
    camera-controls
  >
    <button
      class="Hotspot"
      slot="hotspot-1"
      data-position="2.537997758487349m 0.38513606335958883m -1.6975851562814956m"
      data-normal="0.5489464593551314m 0.19541314043522384m 0.8126939702659965m"
      data-visibility-attribute="visible"
    >
      <div class="HotspotAnnotation">iguana</div>
    </button>
    <div class="progress-bar hide" slot="progress-bar"></div>
  </model-viewer>
  <div>
  <a href="../menunivel.php"><img id="casita" src="../assets/img/casita.png" alt=""></a>
  </div>
</html>
