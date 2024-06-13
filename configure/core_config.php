<?php
return array(
  'galeria-config' => array(
          'menu' => "GALERIA",
          'title' => "Configuración de galerias",
          'config' =>  array(
                    array('path' => 'galeria/customer/enabled',
                    'type' => 'select',
                    'label' => 'Habilitar galeria para usuarios',
                    'data' => ['0' => 'No', '1' => 'Si'],
                    'value' => 1
                  ),
                   
          )
  )
);

?>