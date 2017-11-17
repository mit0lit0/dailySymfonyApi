<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\View\View;
use AppBundle\Entity\UserBusiness;

class UserBusinessController extends FOSRestController
{
    /**
   * @Rest\Get("/userbusiness")
   */
  public function getAction()
  {
    $restresult = $this->getDoctrine()->getRepository('AppBundle:UserBusiness')->findAll();
      if ($restresult === null) {
        return new View("there are no users business exist", Response::HTTP_NOT_FOUND);
   }
      return $restresult;
  }
  /**
  * @Rest\Get("/userbusiness/{id}")
  */
  public function coduserAction($id)
  {
   $singleresult = $this->getDoctrine()->getRepository('AppBundle:UserBusiness')->find($coduser);
   if ($singleresult === null) {
   return new View("userBusiness not found", Response::HTTP_NOT_FOUND);
   }
  return $singleresult;
  }

  /**
 * @Rest\Post("/userBusiness")
 */
 public function postAction(Request $request)
 {
   $user = new User;
   $login = new Login();
   $name = $request->get('name');
   $lastname = $request->get('lastname');
   $codlogin = $request->get('codlogin');
   if(empty($name) || empty($lastname)|| empty($codlogin))
   {
     return new View("Null values are not allowed", Response::HTTP_NOT_ACCEPTABLE);
   }else{
     $user->setName($name);
     $user->setLastname($lastname);
     $user->setCodlogin($codlogin);
     $login->setCodlogin($codlogin);
     $login->setPass('12313123asd');

     //return new View($login, Response::HTTP_NOT_ACCEPTABLE);
     $em2 = $this->getDoctrine()->getManager();
     $em2->persist($login);
     $em2->flush();

     $em = $this->getDoctrine()->getManager();
     $em->persist($user);
     $pom = $em->flush();

     if($pom) {
      $this->addFlash(
          'notice',
          'You have successfully created post'
      );
      }
    return new View("User Added Successfully", Response::HTTP_OK);
   }
 }

 /**
  * @Rest\Delete("/user/{coduser}")
  */
  public function deleteAction($coduser)
  {
   $data = new User;
   $sn = $this->getDoctrine()->getManager();
   $user = $this->getDoctrine()->getRepository('AppBundle:User')->find($coduser);
 if (empty($user)) {
   return new View("user not found", Response::HTTP_NOT_FOUND);
  }
  else {
   $sn->remove($user);
   $sn->flush();
  }
   return new View("deleted successfully", Response::HTTP_OK);
  }

}
