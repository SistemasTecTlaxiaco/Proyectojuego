! DOCTYPE html >
< html  lang = " en " >
  < cabeza >
  < estilo >
    cuerpo { color de fondo :  # 00FA9A ; }
  </ estilo >
</ cabeza >
< cuerpo >
  < p  style = " text-align: center " > REALIDAD AUMENTADA </ p >
</ cuerpo >
  < guion
    type = " módulo "
    src = " https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js "
  > </ script >

  < visor de modelos
    src = " assets / img / 1ab.glb "
    Arkansas
    ar-modes = " vista rápida del visor de escenas webxr "
    intensidad de la sombra = " 6.4 "
    interpolación-decaimiento = " 200 "
    auto rotar
    controles de la cámara
  >
    < botón
      class = " Hotspot "
      slot = " hotspot-1 "
      posición de datos = " 0.34921196987595127m -2.3979877223513446m 0.24374315309017763m "
      datos-normal = " 0.9963054410763085m 0.08181938595940326m -0.02609705276403061m "
      atributo de visibilidad de datos = " visible "
    >
      < div  class = " HotspotAnnotation " > abeja </ div >
    </ botón >
    < div  class = " barra de progreso oculta " slot = " barra de progreso " >
      < div  class = " update-bar " > </ div >
    </ div >
  </ model-viewer >

  < visor de modelos
    src = " activos / img / elefantra.glb "
    intensidad-sombra = " 10 "
    auto rotar
    controles de la cámara
  >
    < botón
      class = " Hotspot "
      slot = " hotspot-1 "
      posición de datos = " 0.7424144726102979m -4.062089788680346m 14.294037340696555m "
      datos-normal = " 0m 1m 2.2204460492503128e-16m "
      atributo de visibilidad de datos = " visible "
    >
      < div  class = " HotspotAnnotation " > elefante </ div >
    </ botón >
    < div  class = " barra de progreso oculta " slot = " barra de progreso " >
      < div  class = " update-bar " > </ div >
    </ div >
    < button  slot = " ar-button " id = " ar-button " > </ button >
  </ model-viewer >

  < visor de modelos
    src = " assets / img / iaga.glb "
    intensidad-sombra = " 10 "
    auto rotar
    controles de la cámara
  >
    < botón
      class = " Hotspot "
      slot = " hotspot-1 "
      posición de datos = " 2.537997758487349m 0.38513606335958883m -1.6975851562814956m "
      datos-normal = " 0.5489464593551314m 0.19541314043522384m 0.8126939702659965m "
      atributo de visibilidad de datos = " visible "
    >
      < div  class = " HotspotAnnotation " > iguana </ div >
    </ botón >
    < div  class = " progress-bar hide " slot = " progress-bar " > </ div >
  </ model-viewer >
  <a href="../nivel3.php"><img id="casita" src="../assets/img/casita.png" alt=""></a>
  </div>
</ html >