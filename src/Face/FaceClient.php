<?php
namespace Komma\Facturae\Face;

use Komma\Facturae\Face\Traits\FaceTrait;
use Komma\Facturae\Face\Traits\StageableTrait;

class FaceClient extends SoapClient {
  use StageableTrait;
  use FaceTrait;

  /**
   * Get endpoint URL
   * @return string Endpoint URL
   */
  protected function getEndpointUrl() {
    return $this->isProduction() ?
      "https://webservice.face.gob.es/facturasspp2" :
      "https://se-face-webservice.redsara.es/facturasspp2";
  }
}
