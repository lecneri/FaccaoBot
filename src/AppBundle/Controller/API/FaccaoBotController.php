<?php
namespace AppBundle\Controller\API;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
/**
 * @Route("/api")
 */
class FaccaoBotController extends Controller
{
    /**
     * @Route("/echo/{echo}", name="echo")
     */
    public function echoAction(Request $request, $echo)
    {
        // replace this example code with whatever you need
        return new Response($echo);
    }
}
