<?php
namespace  Galeria\model;
class fotos  extends \Franky\Database\Mysql\objectOperations
{
  public function __construct()
  {
    parent::__construct();
    $this->from()->addTable('fotos_galeria');
  }
        function get($album = "",$status="", $foto="")
        {
            $campos = array("fotos_galeria.id","foto","id_album","fotos_galeria.status","fotos_galeria.fecha",
            "fotos_galeria.descripcion","fotos_galeria.orden", "users.usuario");

            if($status != "")
            {
                  $this->where()->addAnd('fotos_galeria.status',$status,'=');
            }

            if($album != "")
            {
              $this->where()->addAnd('id_album',$album,'=');
            }

            if($foto != "")
            {
              $this->where()->addAnd('fotos_galeria.id',$album,'=');
            }

            $this->from()->addInner('albumes_galeria','albumes_galeria.id','fotos_galeria.id_album');
            $this->from()->addLeft('users','albumes_galeria.id_user','users.id');

            return $this->getColeccion($campos);

        }


        function save($foto,$album)
        {
            $nvoregistro = array(
                "foto" => $foto,
                "id_album" => $album,
                "fecha" => date('Y-m-d')." ".date('H:i:s'),
                "status" => "1",
                "orden" => 0
            );


            return $this->guardarRegistro($nvoregistro);
        }



        function editCampo($id,$campo,$valor)
        {
            $nvoregistro = array(
                $campo => $valor
            );

            $this->where()->addAnd('id',$id,'=');

            return $this->editarRegistro( $nvoregistro);
        }


        function delete($id,$status)
        {
            $nvoregistro = array(
                "status" => "$status"
            );

            $this->where()->addAnd('id',$id,'=');

            return $this->editarRegistro( $nvoregistro);
        }

}


?>
