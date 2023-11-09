<?php
return array(
     array('title'=> "Galeria",
            'children' =>  array(
   

            array(
             "permiso" =>   "administrar_galeria",
             "url" => $MyRequest->url(ANMIN_ALBUM_GALERIA),
             "etiqueta" => "Galerias"
            )
    ))
);
?>