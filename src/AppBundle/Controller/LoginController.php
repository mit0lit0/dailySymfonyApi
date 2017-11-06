<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\View\View;
use AppBundle\Entity\Login;

class LoginController extends FOSRestController
{
    /**
   * @Rest\Get("/login")
   */
  public function getAction()
  {
    $restresult = $this->getDoctrine()->getRepository('AppBundle:Login')->findAll();
      if ($restresult === null) {
        return new View("there are no login exist", Response::HTTP_NOT_FOUND);
   }
      return $restresult;
  }
  /**
  * @Rest\Get("/login/{coduser}")
  */
  public function idAction($coduser)
  {
   $singleresult = $this->getDoctrine()->getRepository('AppBundle:Login')->find($coduser);
   if ($singleresult === null) {
   return new View("login not found", Response::HTTP_NOT_FOUND);
   }
  return $singleresult;
  }
}
