<?php

namespace Deeson\WardenBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document(
 *     collection="generator"
 * )
 */
class GeneratorDocument extends BaseDocument {

  /**
   * @Mongodb\Field(type="string")
   */
  protected $name;

  /**
   * @Mongodb\ObjectId
   */
  protected $siteId;

  /**
   * @return mixed
   */
  public function getName() {
    return (empty($this->name)) ? '[Site Name]' : $this->name;
  }

  /**
   * @param mixed $name
   */
  public function setName($name) {
    $this->name = $name;
  }

  /**
   * @return mixed
   */
  public function getSiteId() {
    return $this->siteId;
  }

  /**
   * @param mixed $siteId
   */
  public function setSiteId($siteId) {
    $this->siteId = $siteId;
  }

}
