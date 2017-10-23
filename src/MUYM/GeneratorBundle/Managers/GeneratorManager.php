<?php

namespace MUYM\GeneratorBundle\Managers;

use MUYM\GeneratorBundle\Document\GeneratorDocument;
use Monolog\Logger;
use Symfony\Component\DependencyInjection\ContainerInterface;

class GeneratorManager extends BaseManager {

  /**
   * @var ContainerInterface
   */
  protected $container;

  public function __construct($doctrine, Logger $logger, ContainerInterface $container) {
    parent::__construct($doctrine, $logger);
    $this->container = $container;
  }

  /**
   * @return string
   *   The type of this manager.
   *   e.g. 'GeneratorDocument'
   */
  public function getType() {
    return 'GeneratorDocument';
  }

  /**
   * Create a new empty type of the object.
   *
   * @return GeneratorDocument
   */
  public function makeNewItem() {
    return new GeneratorDocument();
  }

  /**
   * Event: warden.cron
   *
   * Fires on a cron event to update the dashboard
   */
  public function onWardenCron() {
      // TODO
      // archive items or send to data store - github, efs drive
  }
}
