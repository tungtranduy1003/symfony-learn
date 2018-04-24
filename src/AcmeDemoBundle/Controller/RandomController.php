<?php
//Controller is a PHP method
// use info from request to build and return an Symfony response Object
namespace AcmeDemoBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class RandomController extends Controller
{
  public function indexAction($limit)
  {
    // return new Response('<html><body>Number: '.rand(1, $limit).'</body></html>');
    $number = rand(1,$limit);
    return $this->render(
      'AcmeDemoBundle:Random:index.html.twig',
      array('number' => $number)
    );
    //to use render() --> must extends Controller + use .../Controller
    //render() -> create Response Objects with the given content :HTML + array
    //classic PHP template + Twig template
  }
}
