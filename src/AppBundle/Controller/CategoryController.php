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

  /**
   * @Rest\Post("/category")
   */
   public function postAction(Request $request)
   {
     $data = new Category;
     $name = $request->get('name');
     $description = $request->get('description');
     if(empty($name) || empty($description))
     {
       return new View("NULL VALUES ARE NOT ALLOWED", Response::HTTP_NOT_ACCEPTABLE);
     }
    $data->setName($name);
    $data->setDescription($description);
    $em = $this->getDoctrine()->getManager();
    $em->persist($data);
    $em->flush();
    return new View("Category Added Successfully", Response::HTTP_OK);
   }

   /**
   * @Rest\Delete("/category/{codcategory}")
   */
   public function deleteAction($codcategory)
   {
    $data = new Category;
    $sn = $this->getDoctrine()->getManager();
    $category = $this->getDoctrine()->getRepository('AppBundle:User')->find($codcategory);
    if (empty($category)) {
      return new View("category not found", Response::HTTP_NOT_FOUND);
     }else {
      $sn->remove($category);
      $sn->flush();
     }
      return new View("deleted successfully", Response::HTTP_OK);
     }
}
