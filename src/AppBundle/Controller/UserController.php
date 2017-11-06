<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\View\View;
use AppBundle\Entity\User;

class UserController extends FOSRestController
{
    /**
   * @Rest\Get("/user")
   */
  public function getAction()
  {
    $restresult = $this->getDoctrine()->getRepository('AppBundle:User')->findAll();
      if ($restresult === null) {
        return new View("there are no users exist", Response::HTTP_NOT_FOUND);
   }
      return $restresult;
  }
  /**
  * @Rest\Get("/user/{coduser}")
  */
  public function coduserAction($coduser)
  {
   $singleresult = $this->getDoctrine()->getRepository('AppBundle:User')->find($coduser);
   if ($singleresult === null) {
   return new View("user not found", Response::HTTP_NOT_FOUND);
   }
  return $singleresult;
  }
}