<?php
$basePath = env('APP_BASE_PATH', false);
?>

@extends('_layouts.template')

@section('content')


<!--section banner-->
<section id="banner" class="position-relative overflow-hidden bg-white">
  <div class="container">
    <div class="row d-flex align-items-center mt-banner">
      <div class="col-sm-12 col-md-12 col-lg-8">
        <div>
          <h1 class="text-uppercase fw-bolder title-blue">
            SOFTWARE CRM MÓVIL
          </h1>
          <strong class="fs-4">¡Información actualizada con DataCRM a donde vayas!</strong>

          <p class="text-dark">
            Trabaja remotamente con un sencillo diseño pensado para ayudar a
            tus tareas básicas diarias sin necesidad de estar frente al
            escritorio.
          </p>
          <p class="text-dark">
            Ten a la mano la información de tus contactos, realiza
            actividades y gestiona tus negocios desde el celular en
            cualquier lugar con nuestra Aplicación móvil.
          </p>
          <p class="text-dark">¡Descárgala Ahora!</p>
          <p>
            <img src="<?php echo $basePath; ?>template-crm/images/home_banner_app_playstore.webp" alt="Disponible Play Store" height="90" width="190" class="img-fluid" />
            <img src="<?php echo $basePath; ?>template-crm/images/home_banner_app_appstore.webp" alt="Disponible App store" height="90" width="190" class="img-fluid" />
          </p>
        </div>
      </div>

      <div class="col-sm-12 col-md-12 col-lg-4">
        <div class="text-center">
          <img src="<?php echo $basePath; ?>template-crm/images/mejor_app_de_CRM.webp" alt="software CRM Móvil" height="418" width="520" class="img-fluid" />
        </div>
      </div>
    </div>
  </div>
</section>
<!--section banner-->

<!--section negocios-->
<section id="negocios" class="padding-large bg-blue">
  <div class="container">
    <div class="row d-flex align-items-center">
      <div class="col-sm-12 col-md-12 col-lg-8">
        <h1 class="text-white pb-5 fw-bolder">Negocios</h1>
        <p class="text-white">
          Lleva el control de tus negocios consolidados por fases de
          venta, haz el respectivo seguimiento utilizando las herramientas
          que te brinda la App y gana más ventas.
        </p>

        <button type="button" class="btn btn-orange btn-lg">
          Prueba esta funcionalidad
        </button>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-4 order-first order-lg-1">
        <div class="text-center">
          <img src="<?php echo $basePath; ?>template-crm/images/aplicacion_de_CRM_movil_para_ventas.webp" alt="Negocio y control APP" height="289" width="443" class="img-fluid" />
        </div>
      </div>
    </div>
  </div>
</section>
<!--section negocios-->

<!--section actividades-->
<section id="actividades" class="padding-large bg-white">
  <div class="container">
    <div class="row d-flex align-items-center">
      <div class="col-sm-12 col-md-12 col-lg-4">
        <div class="text-center">
          <img src="<?php echo $basePath; ?>template-crm/images/calendario_en_crm_movil.webp" alt="Control de Actividades APP" height="409" width="251" class="img-fluid" />
        </div>
      </div>

      <div class="col-sm-12 col-md-12 col-lg-8">
        <div class="text-end">
          <h1 class="text-uppercase title-orange pb-5 fw-bolder">
            Actividades
          </h1>
          <p class="text-dark">
            Con DataCRM Móvil, podrás tener el control de tus actividades a
            donde vayas. Aprovécha los colores de la interfaz y no perderás
            de vista ninguna llamada, reunión o tarea con tus clientes.
          </p>
          <img src="<?php echo $basePath; ?>template-crm/images/home_banner_app_playstore.webp" alt="Disponible Play Store" height="90" width="190" class="img-fluid" />
          <img src="<?php echo $basePath; ?>template-crm/images/home_banner_app_appstore.webp" alt="Disponible App store" height="90" width="190" class="img-fluid" />
        </div>
      </div>
    </div>
  </div>
</section>
<!--section actividades-->

<!--section vista global-->
<section id="vista-global" class="padding-large bg-green">
  <div class="container">
    <div class="row d-flex align-items-center">
      <div class="col-sm-12 col-md-12 col-lg-8">
        <h1 class="text-white pb-5 fw-bolder">Vista global</h1>

        <p class="text-white">
          Observa la información de tus Clientes y Contactos desde tu
          celular.
        </p>
        <p class="text-white">
          Al ingresar a cada uno de ellos podrás ver en detalle la
          cronología de todo lo que ha sucedido en el proceso de ventas.
        </p>

        <button type="button" class="btn btn-blue btn-lg">!Me interesa!</button>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-4 order-first order-lg-1">
        <div class="text-center">
          <img src="<?php echo $basePath; ?>template-crm/images/seguimiento_a_clientes_desde_crm_movil.webp" alt="Vista Global desde tu Celular" height="447" width="423" class="img-fluid" />
        </div>
      </div>
    </div>
  </div>
</section>
<!--section vista global-->

<!--section contacto-->

<section id="contacto" class="padding-large">
  <div class="container">
    <div class="row d-flex align-items-center">
      <div class="col-sm-12 col-md-12 col-lg-4">
        <div class="text-center">
          <img src="<?php echo $basePath; ?>template-crm/images/recordatorios_app_crm.webp" alt="Recordatorios" height="415" width="237" class="img-fluid" />
        </div>
      </div>

      <div class="col-sm-12 col-md-12 col-lg-8">
        <div class="text-end">
          <h1 class="text-uppercase title-orange pb-5 fw-bolder">
            Contacto
          </h1>

          <p class="text-black">
            Contacta fácilmente a tus clientes, ya sea por llamada, correo o
            WhatsApp.
          </p>
          <p class="text-black">
            Adjunta documentos, fotografías y añade comentarios a tus
            negocios de la manera más sencilla.
          </p>

          <img src="<?php echo $basePath; ?>template-crm/images/home_banner_app_playstore.webp" alt="Disponible Play Store" height="90" width="190" class="img-fluid" />
          <img src="<?php echo $basePath; ?>template-crm/images/home_banner_app_appstore.webp" alt="Disponible App store" height="90" width="190" class="img-fluid" />
        </div>
      </div>
    </div>
  </div>
</section>
<!--section contacto-->

<!--section cotizaciones-->

<section id="cotizaciones" class="padding-large bg-blue">
  <div class="container">
    <div class="row d-flex align-items-center">
      <div class="col-sm-12 col-md-12 col-lg-8">
        <h1 class="text-uppercase text-white pb-5 fw-bolder">
          Cotizaciones
        </h1>

        <p class="text-white">
          Crea cotizaciones desde DataCRM móvil, expórtalas en PDF y
          envíalas por el canal que desees. ¡Ahorra más tiempo en la
          gestión de tus ventas con nuestra App!.
        </p>

        <button type="button" class="btn btn-orange btn-lg">
          ¡Lo necesito!
        </button>

      </div>
      <div class="col-sm-12 col-md-12 col-lg-4 order-first order-lg-1">
        <div class="text-center">
          <img src="<?php echo $basePath; ?>template-crm/images/crm_para_Android_iOS.webp" alt="Cotizaciones" height="393" width="513" class="img-fluid" />
        </div>
      </div>
    </div>
  </div>
</section>
<!--section cotizaciones-->

<!--section dudas-->

<section id="dudas" class="padding-large">
  <div class="container">
    <div class="row d-flex align-items-center">
      <div class="col-sm-12 col-md-12 col-lg-8">
        <div class="text-center">
          <img src="<?php echo $basePath; ?>template-crm/images/tour_crm_movil.webp" alt="Te Resolvemos las Dudas" class="pb-5" height="121" width="74" class="img-fluid" /><br>

          <span class="fs-4">¿Tienes dudas respecto al funcionamiento de la aplicación móvil?</span><br>

          <span class="fs-5"> Programemos una presentación <a class="text-primary" href="#">Aquí</a></span>

        </div>
      </div>

      <div class="col-sm-12 col-md-12 col-lg-4 order-first order-lg-1">
        <div class="text-center">
          <img src="<?php echo $basePath; ?>template-crm/images/calendario_en_crm_movil.webp" alt="Calendario" height="251" width="409" class="img-fluid" />
        </div>
      </div>
    </div>
  </div>
</section>
<!--section dudas-->

<!--section reconocido-->

<section id="reconocido" class="">
  <div class="container">
    <div class="row d-flex align-items-center">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="text-center">
          <h1 class="fw-bolder title-blue">Un CRM reconocido</h1>
          <span class="fs-4">Las empresas prefieren DataCRM al ser referente entre los
            mejores software de CRM en Latinoamérica.</span><br>
        </div>
      </div>
    </div>

    <div class="row d-flex align-items-center pt-5">
      <div class="col-sm-12 col-md-12 col-lg-3">
        <div class="text-center pb-5">
          <img src="<?php echo $basePath; ?>template-crm/images/el_mejor_crm.webp" alt="El Mejor CRM" height="150" width="158" class="img-fluid" />
        </div>
      </div>

      <div class="col-sm-12 col-md-12 col-lg-2">
        <div class="text-center pb-5">
          <img src="<?php echo $basePath; ?>template-crm/images/el_crm_mas_usado.webp" alt="El CRM Más Usado" height="150" width="100" class="img-fluid" />
        </div>
      </div>

      <div class="col-sm-12 col-md-12 col-lg-2">
        <div class="text-center pb-5">
          <img src="<?php echo $basePath; ?>template-crm/images/Sistema_CRM_mejor_calificadp.webp" alt="El CRM Mejor Calificado" height="150" width="134" class="img-fluid" />
        </div>
      </div>

      <div class="col-sm-12 col-md-12 col-lg-2">
        <div class="text-center pb-5">
          <img src="<?php echo $basePath; ?>template-crm/images/El_mejor_sistema_CRM.webp" alt="El Mejor Sistema CRM" height="196" width="183" class="img-fluid" />
        </div>
      </div>

      <div class="col-sm-12 col-md-12 col-lg-3">
        <div class="text-center pb-5">
          <img src="<?php echo $basePath; ?>template-crm/images/sistema_crm_lider.webp" alt="El Sistema CRM Lider" height="150" width="121" class="img-fluid" />
        </div>
      </div>
    </div>
  </div>
</section>
<!--section reconocido-->

<!--section preferidos-->

<section id="preferidos" class="pt-5">
  <div class="container">
    <div class="row d-flex align-items-center">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="text-center">
          <h1 class="title-blue">
            ¿Por qué las empresas en Latinoamérica nos prefieren?
          </h1>
        </div>
      </div>
    </div>

    <div class="row d-flex align-items-center pt-5">
      <div class="col-sm-12 col-md-12 col-lg-4 pb-5">
        <div class="float-start">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-quote" viewBox="0 0 16 16">
            <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z" />
          </svg>
        </div>
        <p>
          La organización y control es de vital importancia para Infórmese y
          es precisamente aquí donde DataCRM proporciona una potente
          solución, gracias a sus indicadores gerenciales personalizados y a
          la posibilidad de generar reportes confiables, precisos y rápidos.
        </p>

        <img src="<?php echo $basePath; ?>template-crm/images/informese_caso_de_exito.webp" alt="Casos de Exito" width="121" height="60" class="img-fluid" />
      </div>

      <div class="col-sm-12 col-md-12 col-lg-4 pb-5">
        <div class="float-start">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-quote" viewBox="0 0 16 16">
            <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z" />
          </svg>
        </div>
        <p>
          Para Vibra es de gran importancia la organización del área de
          ventas, al dar respuestas más rápidas y eficientes a sus
          prospectos, logrando mayores cierres en el mes. Igualmente,
          ayudamos a la atención oportuna de sus clientes, categorizando las
          peticiones, quejas y reclamos mediante el área de servicio al
          cliente.
        </p>

        <img src="<?php echo $basePath; ?>template-crm/images/radiopolis_caso_exito.webp" alt="RadioPolis Caso de Exito" width="121" height="60" class="img-fluid" />
      </div>

      <div class="col-sm-12 col-md-12 col-lg-4 pb-5">
        <div class="float-start">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-quote" viewBox="0 0 16 16">
            <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z" />
          </svg>
        </div>
        <p>
          La herramienta fue diseñada para nuestro proceso. Lo recomiendo
          porque da la facilidad de adaptar todos los procesos a la
          herramienta y mejorar el seguimiento a cada uno de los
          comerciales. Nos ha ayudado a mejorar la gestión con los clientes.
        </p>

        <img src="<?php echo $basePath; ?>template-crm/images/toxement_caso_exito.webp" alt="Toxement Caso de Exito" width="121" height="60" class="img-fluid" />
      </div>
    </div>

    <div class="row padding-large">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="text-center">
          <button type="button" class="btn btn-orange btn-lg">
            Nuestros clientes Opinan
          </button>
        </div>
      </div>
    </div>
    <hr />
  </div>
</section>

<!--section preferidos-->

<!--section unete-->
<section id="unete" class="padding-large">
  <div class="container">
    <div class="row d-flex align-items-center">
      <div class="col-md-12 col-sm-12">
        <div class="text-center">
          <span class="fs-4"> ÚNETE A MILES DE USUARIOS EN COLOMBIA, MÉXICO Y TODA
            LATINOAMÉRICA QUE HAN REVOLUCIONADO LA FORMA EN LA QUE HACEN SUS
            VENTAS CON <span class="title-blue" >DATACRM</span><br>

          <button type="button" class="btn btn-blue mt-5 btn-lg">
            ¡Lo necesito!
          </button>
        </div>
      </div>
    </div>
  </div>
</section>
<!--section unete-->


@endsection