<?php /** / ?>
<ul>
  <?php if($sf_request->getParameter('module') == 'sfGuardUser'): ?>
    <li class="active">
      <strong>Usuarios</strong>
    </li>
  <?php else: ?>
    <li>
      <?php echo link_to('Usuarios', '@usuarios') ?>
    </li>
  <?php endif; ?>
    
  <?php if($sf_request->getParameter('module') == 'sfGuardGroup'): ?>
    <li class="active">
      <strong>Us. Grupos</strong>
    </li>
  <?php else: ?>
    <li>
      <?php echo link_to('Us. Grupos', '@usuarios_grupos') ?>
    </li>
  <?php endif; ?>
    
  <?php if($sf_request->getParameter('module') == 'sfGuardPermission'): ?>
    <li class="active">
      <strong>Us. Permisos</strong>
    </li>
  <?php else: ?>
    <li>
      <?php echo link_to('Us. Permisos', '@usuarios_permisos') ?>
    </li>
  <?php endif; ?>
    
  <?php if($sf_request->getParameter('module') == 'apartamentos'): ?>
    <li class="active">
      <strong>Apartamentos</strong>
    </li>
  <?php else: ?>
    <li>
      <?php echo link_to('Apartamentos', '@apartamentos') ?>
    </li>
  <?php endif; ?>
    
  <?php if($sf_request->getParameter('module') == 'localidades'): ?>
    <li class="active">
      <strong>Localidades</strong>
    </li>
  <?php else: ?>
    <li>
      <?php echo link_to('Localidades', '@localidades') ?>
    </li>
  <?php endif; ?>
    
  <?php if($sf_request->getParameter('module') == 'imagenes'): ?>
    <li class="active">
      <strong>Imágenes</strong>
    </li>
  <?php else: ?>
    <li>
      <?php echo link_to('Imágenes', '@imagenes') ?>
    </li>
  <?php endif; ?>
    
  <?php if($sf_request->getParameter('module') == 'caracteristicas'): ?>
    <li class="active">
      <strong>Características</strong>
    </li>
  <?php else: ?>
    <li>
      <?php echo link_to('Características', '@caracteristicas') ?>
    </li>
  <?php endif; ?>
    
  <?php if($sf_request->getParameter('module') == 'agrupacionescaracteristica'): ?>
    <li class="active">
      <strong>Agrupaciones de carac.</strong>
    </li>
  <?php else: ?>
    <li>
    <?php echo link_to('Agrupaciones de carac.', '@agrupacionescaracteristica') ?>
    </li>
  <?php endif; ?>
    
  <?php if($sf_request->getParameter('module') == 'propietarios'): ?>
    <li class="active">
      <strong>Propietarios</strong>
    </li>
  <?php else: ?>
    <li>
      <?php echo link_to('Propietarios', '@propietarios') ?>
    </li>
  <?php endif; ?>
    
  <?php if($sf_request->getParameter('module') == 'mensajes'): ?>
    <li class="active">
      <strong>Mensajes</strong>
    </li>
  <?php else: ?>
    <li>
      <?php echo link_to('Mensajes', '@mensajes') ?>
    </li>
  <?php endif; ?>
    
  <?php if($sf_request->getParameter('module') == 'menus'): ?>
    <li class="active">
      <strong>Menus</strong>
    </li>
  <?php else: ?>
    <li>
      <?php echo link_to('Menus', '@menus') ?>
    </li>
  <?php endif; ?>
    
  <?php if($sf_request->getParameter('module') == 'secciones'): ?>
    <li class="active">
      <strong>Secciones</strong>
    </li>
  <?php else: ?>
    <li>
      <?php echo link_to('Secciones', '@secciones') ?>
    </li>
  <?php endif; ?>

  <?php  if($sf_request->getParameter('module') == 'apartamento_caracteristica'): ?>
    <li class="active">
      <strong>Apartamento-Característica</strong>
    </li>
  <?php else: ?>
    <li>
      <?php echo link_to('Apartamento-Característica', '@apartamento_caracteristica') ?>
    </li>
  <?php endif;  ?>

  <?php if($sf_request->getParameter('module') == 'apartamento_propietario'): ?>
    <li class="active">
      <strong>Apartamento-Propietario</strong>
    </li>
  <?php else: ?>
    <li>
      <?php echo link_to('Apartamento-Propietario', '@apartamento_propietario') ?>
    </li>
  <?php endif; ?>

  <?php if($sf_request->getParameter('module') == 'tipoocupacion'): ?>
    <li class="active">
      <strong>Tipos ocupación</strong>
    </li>
  <?php else: ?>
    <li>
      <?php echo link_to('Tipos ocupación', '@tipoocupacion') ?>
    </li>
  <?php endif; ?>

  <?php if($sf_request->getParameter('module') == 'ocupacion'): ?>
    <li class="active">
      <strong>Ocupaciones</strong>
    </li>
  <?php else: ?>
    <li>
      <?php echo link_to('Ocupaciones', '@ocupacion') ?>
    </li>
  <?php endif; ?>

  <?php if($sf_request->getParameter('module') == 'tarifas'): ?>
    <li class="active">
      <strong>Tarifas</strong>
    </li>
  <?php else: ?>
    <li>
      <?php echo link_to('Tarifas', '@tarifas') ?>
    </li>
  <?php endif; ?>
    
  <?php if($sf_request->getParameter('module') == 'tarifasfechas'): ?>
    <li class="active">
      <strong>Tarifas-fechas</strong>
    </li>
  <?php else: ?>
    <li>
      <?php echo link_to('Tarifas-fechas', '@tarifasfechas') ?>
    </li>
  <?php endif; ?>
    
</ul>
<?php /**/ ?>