<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\View\View;
use AppBundle\Entity\Category;

class CategoryController extends FOSRestController
{
    /**
   * @Rest\Get("/category")
   */
  public function getAction()
  {
    $restresult = $this->getDoctrine()->getRepository('AppBundle:Category')->findAll();
      if ($restresult === null) {
        return new View("there are no Category exist", Response::HTTP_NOT_FOUND);
   }
      return $restresult;
  }
  /**
  * @Rest\Get("/category/{codcategory}")
  */
  public function idAction($codcategory)
  {
   $singleresult = $this->getDoctrine()->getRepository('AppBundle:Category')->find($codcategory);
   if ($singleresult === null) {
   return new View("Category not found", Response::HTTP_NOT_FOUND);
   }
  return $singleresult;
  }
}
