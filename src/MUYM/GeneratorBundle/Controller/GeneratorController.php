<?php

namespace MUYM\GeneratorBundle\Controller;

use MUYM\GeneratorBundle\Managers\GeneratorManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GeneratorController extends Controller {

  public function generatorIndexAction() {
    /** @var GeneratorManager $generatorManager */
    $generatorManager = $this->get('muym.dashboard_generator');
    $entity_type = $generatorManager->getType();

    $params = array(
      'type' => $entity_type,
    );

    return $this->render('MUYMGeneratorBundle:Generator:index.html.twig', $params);
  }

  public function unauthorisedAction() {
    $params = array(
      'status_text' => 'Unauthorised Access',
      'status_code' => '403',
    );

    return $this->render('GeneratorBundle:Generator:unauthorised.html.twig', $params);
  }

}
