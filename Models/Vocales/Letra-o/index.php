<!DOCTYPE html>
<html>
  <head>
    <title>Mouse Click Example - A-Frame</title>
    <meta name="description" content="Mouse Click Example - A-Frame" />
    <script src="https://aframe.io/releases/0.7.0/aframe.min.js"></script>

    <script src="https://unpkg.com/aframe-event-set-component@^4.0.0/dist/aframe-event-set-component.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/donmccurdy/aframe-extras@v6.1.1/dist/aframe-extras.min.js"></script>
  </head>
  <body>
    <a-entity>
      <a-scene>
        <a-entity
          id="camera"
          camera="userHeight: 1.6"
          look-controls
          cursor="rayOrigin: mouse"
        ></a-entity>
        <a-entity
          gltf-model="Letra_o.glb"
          scale="30 30 30"
          rotation="0 0 0"
          position="3 1 -8"
          ><a-animation
            attribute="rotation"
            to="0 360 0"
            dur="8000"
            easing="linear"
            begin="click"
          ></a-animation>
        </a-entity>

        <a-entity
          gltf-model="oso.glb"
          scale="0.25 0.25 0.25"
          rotation="0 0 0"
          position="-1 0.5 -3"
          ><a-animation
            attribute="rotation"
            to="0 360 0"
            dur="6000"
            easing="linear"
            begin="click"
          ></a-animation>
        </a-entity>
        <a-sound
          src="https://cdn.glitch.com/facc1359-ef25-491f-90db-e55c17d3757f%2FletraO.mp3?v=1624470915103"
          autoplay="true"
          position="0 2 5"
          loop="true"
        ></a-sound>
      </a-scene>
    </a-entity>
  </body>
</html>
