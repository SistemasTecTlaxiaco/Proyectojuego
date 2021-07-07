<!DOCTYPE html>
<html>
  <head>
    <title>Mouse Click Example - A-Frame</title>
    <meta name="description" content="Mouse Click Example - A-Frame" />
    <script src="https://aframe.io/releases/0.7.0/aframe.min.js"></script>

    <script src="https://unpkg.com/aframe-event-set-component@^4.0.0/dist/aframe-event-set-component.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/donmccurdy/aframe-extras@v6.1.1/dist/aframe-extras.min.js"></script>
    <link rel="stylesheet" href="../assets/css/RA.css">
  </head>
  <body>
  <div><br><br><br><br><br><br>
  <a href="../nivel3.php"><img id="casita" src="../assets/img/casita.png" alt=""></a>
  </div>
    <a-entity >
      <a-scene >
        <a-entity
          id="camera"
          camera="userHeight: 1.6"
          look-controls
          cursor="rayOrigin: mouse"
        ></a-entity>
        <a-entity
          gltf-model="Letra_u.glb"
          scale="30 30 30"
          rotation="0 0 0"
          position="3 1 -7"
          ><a-animation
            attribute="rotation"
            to="0 360 0"
            dur="8000"
            easing="linear"
            begin="click"
          ></a-animation>
        </a-entity>

        <a-entity
          gltf-model="uvas.glb"
          scale="1 1 1"
          rotation="270 0 0"
          position="-7 2 -7"
          ><a-animation
            attribute="rotation"
            to="360 360 270"
            dur="8000"
            easing="linear"
            begin="click"
          ></a-animation>
        </a-entity>
        <a-sound
          src="https://cdn.glitch.com/a3b29d99-2583-4f3f-a5cf-391da707af0e%2FletraU.mp3?v=1625378337838"
          autoplay="true"
          position="0 2 5"
          loop="true"
        ></a-sound>
          
      </a-scene>
    </a-entity>
  </body>
</html>
