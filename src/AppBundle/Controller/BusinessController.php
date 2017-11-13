<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\View\View;
use AppBundle\Entity\Business;

class BusinessController extends FOSRestController
{

    /**
   * @Rest\Get("/business")
   */
  public function getAction()
  {
    $restresult = $this->getDoctrine()->getRepository('AppBundle:Business')->findAll();
      if ($restresult === null) {
        return new View("there are no Business exist", Response::HTTP_NOT_FOUND);
   }
      return $restresult;
  }

  /**
  * @Rest\Get("/business/{codbusiness}")
  */
  public function codbusinessAction($codbusiness)
  {
   $singleresult = $this->getDoctrine()->getRepository('AppBundle:Business')->find($codbusiness);
   if ($singleresult === null) {
   return new View("Business not found", Response::HTTP_NOT_FOUND);
   }
  return $singleresult;
  }
}
