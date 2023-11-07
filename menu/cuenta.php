<?php
$menugaleria = array(
     array('title'=> "Galeria",
            'children' =>  array(
   
   
    )
  )
   
);
if(getCoreConfig('galeria/customer/enabled') == 1):
    $menugaleria[0]['children'][] = array(
        "permiso" =>   "administrar_mi_galeria",
        "url" => $MyRequest->url(MICUENTA_ALBUM_GALERIA),
        "etiqueta" => "Galerias"
    );
endif;


return $menugaleria;
?>
