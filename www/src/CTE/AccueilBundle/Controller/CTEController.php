<?php
// src/CTE/AccueilBundle/Controller/CTEController.php
namespace CTE\AccueilBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
class CTEController extends Controller
{
public function indexAction()
{
return $this->render('CTEAccueilBundle:CTE:index.html.twig');
} }