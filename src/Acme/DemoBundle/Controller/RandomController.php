<?php
//Controller is a PHP method
// use info from request to build and return an Symfony response Object
namespace Acme\DemoBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
class RandomController
{
  public function indexAction($limit)
  {
    return new Response('<html><body>Number: '.rand(1, $limit).'</body></html>')
  }
}
