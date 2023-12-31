<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WEMPO</title>
  <!--=======================================================================================-->

  <!--=============== FAVICON ===============-->
  <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
  <!--=============== BOXICONS ===============-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <!--=============== SWIPER CSS =============-->
  <link rel="stylesheet" href="css/swiper-bundle.min.css">

  <!--=============== CSS ===============-->
  <link rel="stylesheet" href="css/NEWstyles.css">
  <!--=======================================================================================-->
  <!-- <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css"> -->
  <link rel="Shortcut Icon" type="image/x-icon" href="assets/icons/logo.ico" />
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

  <script src="js/bootstrap.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <script src="js/jquery.min.js"></script>
  <!--<script src="js/bootstrap.min.js"></script> -->
  <!--<script src="js/autohidingnavbar.min.js"></script>-->
  <script src="js/main.js"></script>
  <script src="js/carrito.js"></script>

</head>

<body>
  <?php include 'incfolinav/navbarNEW.php' ?>
  <?php //include 'incfolinav/navbar.php' ?>



  <main class="main">
  <section class="home" id="home">
                <div class="home__container container grid">
                    <div class="home__img-bg">
                        <img src="imagenes\choklitos\chocloconlupa.png" alt="" class="home__img">
                    </div>
    
                    <div class="home__social">
                        <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
                            Facebook
                        </a>
                        <a href="https://twitter.com/" target="_blank" class="home__social-link">
                            Twitter
                        </a>
                        <a href="https://www.instagram.com/" target="_blank" class="home__social-link">
                            Instagram
                        </a>
                    </div>
    
                    <div class="home__data">
                        <h1 class="home__title">Análisis de imágenes mediante <br> IA</h1>
                        <p class="home__description">
                        Clasificación y análisis de imágenes
                        </p>
                        <!--<span class="home__price">$1245</span>-->

                        <div class="home__btns">
                            <a href="#" class="button button--gray button--small">
                                Mas informacion
                            </a>
                            <div class="d-flex justify-content-start mb-4">
              <a class="button home__button" href="pythonphp.php" target="_self" rel="noopener">INICIAR</a>
            </div>

                        </div>
                    </div>
                </div>
            </section>
            
            <!--==================== FEATURED ====================-->
            
                        <!--==================== STORY ====================-->
                        <section class="story section container">
                <div class="story__container grid">
                    <div class="story__data">
                        <h2 class="section__title story__section-title">
                        Clasificación de imágenes
                        </h2>
    
                        <h1 class="story__title">
                        Identifique y categorice  <br>en un  instante.
                        </h1>
    
                        <p class="story__description">
                        Utilice reglas específicas y IA capacitada para categorizar y etiquetar imágenes, partes de imágenes y similitudes en imágenes.
                        </p>
    
                        <a href="#" class="button button--small">Lea el folleto </a>
                    </div>

                    <div class="story__images">
                        <img src="imagenes\choklitos\choclopizarra.png" alt="" class="story__img">
                        <div class="story__square"></div>
                    </div>
                </div>
            </section>
            <section class="featured section container" id="featured">
                <h2 class="section__title">
                    RECURSOS
                </h2>

                <div class="featured__container grid">
                    <article class="featured__card">
                        <span class="featured__tag">COMUNIDAD</span>

                        <img src="imagenes\choklitos\choclocomunidad.png" alt="" class="featured__img">

                        <div class="featured__data">
                            <h3 class="featured__title">NUESTRA COMUNIDA</h3>
                            <span class="featured__price">FORO</span>
                        </div>

                        <button class="button featured__button">UNASE A COLEGAS Y EXPERTOS</button>
                    </article>

                    <article class="featured__card">
                        <span class="featured__tag">ASISTENCIA</span>

                        <img src="imagenes\choklitos\choclosoporte.png" alt="" class="featured__img">

                        <div class="featured__data">
                            <h3 class="featured__title">ASISTENCIA</h3>
                            <span class="featured__price">AYUDA</span>
                        </div>

                        <button class="button featured__button">OBTENGA AYUDA CON SU PRODUCTO </button>
                    </article>

                    <article class="featured__card">
                        <span class="featured__tag">Contacto</span>

                        <img src="imagenes\choklitos\choclocontacto.png" alt="" class="featured__img">

                        <div class="featured__data">
                            <h3 class="featured__title">PARA CUALQUIER CONSULTA O DUDA</h3>
                            <span class="featured__price">CONTACTENOS</span>
                        </div>

                        <button class="button featured__button">CONTACTENOS</button>
                    </article>
                </div>
            </section>
    <!-- Aquí va el contenido principal de la página
    <section id="section1" class="bg-light py-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="text-left desc mb-4">
              <h1 class="h1" style="color: #000000">Análisis de imágenes mediante IA</h1>
              <h6 class="text-muted">Clasificación y análisis de imágenes</h6>
            </div>
            <div class="d-flex justify-content-start mb-4">
              <a class="btn btn-primary" href="pythonphp.php" target="_self" rel="noopener">INICIAR</a>
            </div>
          </div>
          <div class="col-lg-6">
            <img class="img-fluid" src="imagenes\choklitos\choclopizarra.png" alt="Análisis de imágenes mediante IA">
          </div>
        </div>
      </div>
    </section>

    <section id="section4" class="bg-dark py-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="bg-white p-4">
              <h2 class="h4 mb-3"><span style="color:#0066FF">Clasificación de imágenes</span></h2>
              <h2 class="h2 mb-3">Identifique y categorice en un instante.</h2>
              <p class="mt-3">Utilice reglas específicas y IA capacitada para categorizar y etiquetar imágenes, partes de imágenes y similitudes en imágenes.</p>
              <div class="row mb-3">
                <div class="col-auto">
                  <img class="features-medium-proof-icon" src="https://pnx-assets-prod.s3.amazonaws.com/2023-06/check_mark_64.svg" alt="bg">
                </div>
                <div class="col">
                  <p class="text-small" style="color: #000000;">Reduzca los esfuerzos manuales para ahorrar tiempo y dinero.</p>
                </div>
              </div>
              <div class="d-flex flex-column">
                <a class="btn btn-link mb-3" target="_blank" rel="noopener" href="https://www.microfocus.com/media/flyer/ai-image-analytics-flyer.pdf">Lea el folleto de análisis de escenas</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <img class="img-fluid" src="imagenes\choklitos\choclopizarra.png" alt="Clasificación de imágenes">
          </div>
        </div>
      </div>
    </section>

    <section id="section5" class="bg-dark py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-4">
            <div class="bg-white p-4">
              <h2 class="h4 mb-3"><span style="color:#0066FF">Detección y reconocimiento de plantas</span></h2>
              <h2 class="h2 mb-3">Encuentre enfermedades, insectos, etc.</h2>
              <p class="mt-3">El análisis de imágenes mediante IA explora imágenes de cámaras y en tiempo real. Comprender el estado de nuestros cultivos es nuestra misión.</p>
              <div class="row mb-3">
                <div class="col-auto">
                  <img class="proof-icon" src="https://pnx-assets-prod.s3.amazonaws.com/2023-06/check_mark_0_29.svg" alt="bg">
                </div>
                <div class="col">
                  <p class="text-small" style="color: #000000;">Para reducir la pérdida de nuestras cosechas, es importante usar nuestra herramienta.</p>
                </div>
              </div>
              <div class="d-flex flex-column">
                <a class="btn btn-link mb-3" target="_blank" rel="noopener" href="https://www.microfocus.com/pnx/media/success-story/media_info_groep_ss.pdf">Leer el caso práctico</a>
              </div>
            </div>
            <img class="img-fluid" src="imagenes\choklitos\chocloconlupa.png" alt="Detección y reconocimiento de logotipos">
          </div>
          <div class="col-lg-6 mb-4">
            <div class="bg-white p-4">
              <h2 class="h4 mb-3"><span style="color:#0066FF">Reconocimiento al instante</span></h2>
              <h2 class="h2 mb-3">Detecte, identifique y actúe con las plagas al instante.</h2>
              <p class="mt-3">Detecte, edite, recopile, organice e identifique nuevas plagas y enfermedades.</p>
              <div class="row mb-3">
                <div class="col-auto">
                  <img class="proof-icon" src="https://pnx-assets-prod.s3.amazonaws.com/2023-06/check_mark_0_30.svg" alt="bg">
                </div>
                <div class="col">
                  <p class="text-small" style="color: #000000;">Ahorre tiempo y dinero con equipos de analistas más reducidos.</p>
                </div>
              </div>
              <div class="d-flex flex-column">
                <a class="btn btn-link mb-3" data-toggle="modal" data-target="#video-modal">Ver vídeo</a>
              </div>
            </div>
            <img class="img-fluid" src="https://pnx-assets-prod.s3.amazonaws.com/2023-05/feature-small-22x_34.webp" alt="Reconocimiento facial">
          </div>
        </div>
      </div>
    </section>

    <section id="section6" class="bg-dark py-5">
      <div class="container">
        <div class="text-center">
          <h2 class="h3 mb-4 title">Características adicionales</h2>
        </div>
        <div class="row">
          <div class="col-lg-4 mb-4">
            <div class="bg-white p-4">
              <div class="text-left">
                <div class="border-top border-primary-1" style="width: 28px;"></div>
              </div>
              <h5 class="mb-3 title">Reconocimiento óptico de caracteres</h5>
              <p>Extraiga el texto de los archivos de imagen y conviértalo a un formato fácil de usar para su almacenamiento y búsqueda.</p>
              <div class="d-flex flex-column">
                <a class="btn btn-link mb-3" target="_self" rel="noopener" href="https://www.microfocus.com/es-es/case-study/dubai-police">Leer el caso práctico</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="bg-white p-4">
              <div class="text-left">
                <div class="border-top border-primary-1" style="width: 28px;"></div>
              </div>
              <h5 class="mb-3 title">Cambio detección</h5>
              <p>Detecte cambios en las imágenes antes y después de las versiones.</p>
              <div class="d-flex flex-column">
                <a class="btn btn-link mb-3" target="_blank" rel="noopener" href="https://www.microfocus.com/pnx/media/brochure/visual_server_brochure.pdf">Leer el folleto</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="bg-white p-4">
              <div class="text-left">
                <div class="border-top border-primary-1" style="width: 28px;"></div>
              </div>
              <h5 class="mb-3 title">Detección de códigos de barras 1D y 2D</h5>
              <p>Detecte códigos de barras de más de 20 tipos de códigos de barras, incluidos ISBN, PDF417 y matriz de datos.</p>
              <div class="d-flex flex-column">
                <a class="btn btn-link mb-3" data-toggle="modal" data-target="#video-modal">Ver vídeo</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> 

    <section id="section9" class="bg-dark py-5">
      <div class="container">
        <div class="text-center">
          <h2 class="h2 mb-4 title">Recursos</h2>
        </div>
        <div class="row">
          <div class="col-md-4 mb-4">
            <div class="bg-white p-4 text-center">
              <div class="rounded-circle border border-primary-1 mx-auto mb-3" style="width: 64px; height: 64px;">
                <img class="img-fluid" src="imagenes\choklitos\choclocomunidad.png" alt="Comunidad">
              </div>
              <h4 class="mb-3 title">Comunidad</h4>
              <div class="d-flex flex-column">
                <a class="btn btn-link mb-3" target="_blank" rel="noopener" href="https://community.microfocus.com/img/idol/?_ga=2.14077943.198679657.1684820442-2032003341.1657014330">Únase a colegas y expertos</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="bg-white p-4 text-center">
              <div class="rounded-circle border border-primary-1 mx-auto mb-3" style="width: 64px; height: 64px;">
                <img class="img-fluid" src="imagenes\choklitos\choclosoporte.png" alt="Asistencia">
              </div>
              <h4 class="mb-3 title">Asistencia</h4>
              <div class="d-flex flex-column">
                <a class="btn btn-link mb-3" target="_self" rel="noopener" href="https://www.microfocus.com/es-es/support/IDOL">Obtenga ayuda con su producto</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="bg-white p-4 text-center">
              <div class="rounded-circle border border-primary-1 mx-auto mb-3" style="width: 64px; height: 64px;">
                <img class="img-fluid" src="imagenes\choklitos\choclocontacto.png" alt="Contacto">
              </div>
              <h4 class="mb-3 title">Contacto</h4>
              <div class="d-flex flex-column">
                <a href="https://www.microfocus.com/es-es/products/information-data-analytics-idol/contact">Obtenga respuesta a sus preguntas</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>-->
    <div id="chat-container">
      <div id="chat-header" onclick="toggleChat()">
        ChoclitoChat
        <button id="minimize">-</button>
      </div>
      <div id="chat-messages" style="display:none;">  
        <!-- Aquí se agregarán los mensajes del chat -->
        <div id="messages"></div>
      </div>
      <div id="chat-input-area" style="display:none;">
        <input type="text" id="chat-input" placeholder="Escribe un mensaje...">
        <button id="send-btn" onclick="sendMessage()">Enviar</button>
      </div>
    </div>

    <style>
      #chat-input-area button:hover {
        background-color: #F1C40F;
        /* Un poco más oscuro al pasar el mouse */
      }

      #chat-container {
        position: fixed;
        bottom: 0;
        right: 0;
        width: 400px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border: 1px solid #ccc;
        background-color: #fff;
        overflow: hidden;
        /* Para asegurarse de que los bordes internos respeten el border-radius */
        font-family: 'Arial', sans-serif;
        /* o cualquier otra tipografía que prefieras */
      }

      #chat-header {
        background-color: #FFDB58;
        /* Un amarillo claro, representativo del color del grano de maíz */

        padding: 10px;
        color: #333;

        cursor: pointer;
        justify-content: space-between;
        cursor: pointer;

      }

      #chat-messages {
        height: 300px;
        /* Ajusta esto según tus necesidades */
        overflow-y: auto;
        /* Hace que los mensajes sean deslizables */
        border-bottom: 1px solid #ccc;
        /* Línea opcional entre mensajes y área de entrada */
        padding: 10px;
      }

      #chat-header button {
        background-color: #F1C40F;
        /* Un amarillo más oscuro para elementos interactivos */
        border: none;
        color: white;
        border-radius: 50%;
        width: 30px;
        height: 30px;
        text-align: center;
        line-height: 30px;
        /* Centra el guion "-" verticalmente */
        cursor: pointer;
      }

      #chat-messages {
        background-color: #FAFAD2;
        /* Un color claro, casi blanco, para el área de mensajes */
        color: #333;
        padding: 15px;
      }

      #chat-input-area {
        display: flex;
        box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.2);
        background-color: #228B22;
        /* Un verde representativo de las hojas de maíz */
        padding: 10px;
      }

      #chat-input-area button {
        background-color: #FFD700;
        /* Un amarillo más vivo para un elemento importante como el botón */
        color: white;
        border: none;
        padding: 10px;
        border-radius: 3px;
        cursor: pointer;
        transition: background-color 0.3s;
      }


      #chat-input-area button:hover {
        background-color: #F1C40F;
        /* Un poco más oscuro al pasar el mouse */
      }

      #chat-input-area {
        box-sizing: border-box;
        /* Asegura que el padding no afecte el ancho final */
        padding: 10px;
        display: flex;
        /* Mantiene el input y el botón en la misma fila */
        background-color: #f9f9f9;
        /* Color diferente para el área de entrada */
      }

      #chat-input {
        flex-grow: 1;
        /* Ocupa el espacio disponible */
        padding: 5px;
        margin-right: 10px;
        /* Espacio entre el input y el botón */
        border: 1px solid #ccc;
      }

      #send-btn {
        padding: 5px 15px;
        background-color: #333;
        color: #fff;
        border: none;
        cursor: pointer;
      }

      #minimize {
        float: right;
        background-color: Transparent;
        border: none;
        color: #fff;
        cursor: pointer;
      }

      #messages {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        /* Alinea inicialmente los mensajes a la izquierda */
      }

      /* Estilos para los mensajes enviados y recibidos */
      .message {
        margin: 5px;
        padding: 10px;
        border-radius: 20px;
        max-width: 70%;
        /* Evita que los mensajes ocupen todo el ancho */
      }

      .sent {
        align-self: flex-end;
        /* Alinea los mensajes enviados a la derecha */
        background-color: #efffde;
        /* Un verde claro para los mensajes enviados */
      }

      .received {
        background-color: #e2eafc;
        /* Un azul claro para los mensajes recibidos */
      }
    </style>

    <script>
      function toggleChat() {
        var content = document.getElementById('chat-messages');
        var inputArea = document.getElementById('chat-input-area');
        var isContentHidden = content.style.display === 'none';

        // Aquí se controla la lógica de mostrar/ocultar para ambos elementos, los mensajes y el área de entrada.
        content.style.display = isContentHidden ? 'block' : 'none';
        inputArea.style.display = isContentHidden ? 'flex' : 'none'; // 'flex' para mantener el diseño correcto.
      }

      document.getElementById('minimize').addEventListener('click', function(e) {
        e.stopPropagation();
        toggleChat();
      });

      function sendMessage() {
        var input = document.getElementById('chat-input');
        var messageText = input.value.trim();

        if (messageText) {
          var messagesContainer = document.getElementById('messages');

          // Crear y agregar el mensaje enviado al contenedor.
          var sentMessageElement = document.createElement('div');
          sentMessageElement.classList.add('message', 'sent');
          sentMessageElement.textContent = messageText;
          messagesContainer.appendChild(sentMessageElement);

          // Limpiar el input.
          input.value = '';
          // Aquí es donde usamos AJAX para enviar el mensaje al backend PHP.
          var xhr = new XMLHttpRequest();
          xhr.open('POST', 'procesos/gpt.php', true);
          xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
          xhr.onreadystatechange = function() {
            if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
              // Obtener la respuesta del bot desde el script PHP
              var botResponse = this.responseText;

              // Crear y agregar el mensaje recibido al contenedor.
              var receivedMessageElement = document.createElement('div');
              receivedMessageElement.classList.add('message', 'received');
              receivedMessageElement.textContent = botResponse; // La respuesta real del bot
              messagesContainer.appendChild(receivedMessageElement);

              // Desplazamiento automático al último mensaje.
              scrollToLatestMessage();
            }
          }

          xhr.send('message=' + messageText);
        }
      }
      // Simular un mensaje recibido después de un corto retraso.
      //setTimeout(function() {
      // var receivedMessageElement = document.createElement('div');
      // receivedMessageElement.classList.add('message', 'received');
      // receivedMessageElement.textContent = "Respuesta automática";  // Esto es solo una simulación.
      //  messagesContainer.appendChild(receivedMessageElement);



      // Función para desplazarse automáticamente al último mensaje.
      function scrollToLatestMessage() {
        var messagesContainer = document.getElementById('messages');
        messagesContainer.scrollTop = messagesContainer.scrollHeight;
      }

      // Vinculación del evento de tecla 'Enter' para enviar mensajes.
      document.getElementById('chat-input').addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
          sendMessage();
        }
      });
    </script>



  </main>

  <?php include 'incfolinav/footer.php' ?>

  
  <script>
    function closeSection() {
      document.getElementById("section-to-close").style.display = "none";
    }
  </script>
</body>
<script src="js/swiper-bundle.min.js"></script>

<!--=============== MAIN JS ===============-->
<script src="js/NEWmain.js"></script>
<script>
// Tiempo de inactividad antes de mostrar la advertencia (50 segundos)
var tiempoAdvertencia = 6000; // 50 segundos

// Tiempo después de la advertencia para cerrar sesión (10 segundos)
var tiempoCierre = 5000; // 10 segundos

var tiempoInactividad;

function resetearTiempoInactividad() {
    clearTimeout(tiempoInactividad);
    document.getElementById('modalAdvertencia').style.display = 'none';
    tiempoInactividad = setTimeout(mostrarAdvertencia, tiempoAdvertencia);
}


// Mostrar mensaje de advertencia y programar cierre de sesión
function mostrarAdvertencia() {
    document.getElementById('modalAdvertencia').style.display = 'block';

    // Cierra la sesión automáticamente después de tiempoCierre
    tiempoInactividad = setTimeout(cerrarSesion, tiempoCierre);
}


// Función para cerrar la sesión en el servidor
function cerrarSesion() {
    // Hacer una solicitud AJAX a un script PHP para cerrar la sesión
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'salir.php', true); // Asegúrate de que la ruta a logout.php es correcta
    xhr.send();

    // Redirigir a la página de inicio de sesión
    window.location.href = 'index.php'; // Asegúrate de que esta ruta es correcta
}

// Eventos para resetear el tiempo de inactividad
window.onload = resetearTiempoInactividad;
document.onmousemove = resetearTiempoInactividad;
document.onkeypress = resetearTiempoInactividad;
</script>

<!-- Ventana Modal -->
<div id="modalAdvertencia" style="display:none; position:fixed; top:50%; left:50%; transform:translate(-50%, -50%); z-index:1000; background-color:white; padding:20px; border:1px solid #000;">
    <p>¿Sigues ahí? Tu sesión se cerrará en 10 segundos si no hay actividad.</p>
</div>

</html>