<?php

namespace App\Controller;

use App\Service\OperacionesService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class CalculadoraController extends AbstractController
{
    private $srv;

    public function __construct(OperacionesService $srv)
    {
        $this->srv = $srv;
    }

    #[Route('/', name: 'app_calculadora',  methods: ['GET'] )]
    public function index(): Response
    {
        return $this->render('calculadora/index.html.twig');
    }

    #[Route('add/{op1}/{op2}', name: 'app_sumar,', methods: ['GET'])]
    public function sumar(Request $request)
    {   
        $op1 = $request->get('op1');
        $op2 = $request->get('op2');

        $resultado = $this->srv->operar('add', $op1, $op2);

        return $this->render('calculadora/resultado.html.twig',['resultado' => $resultado]);
    }

    #[Route('subtract/{op1}/{op2}', name: 'app_restar')]
    public function restar(Request $request)
    {   
        $op1 = $request->get('op1');
        $op2 = $request->get('op2');

        $resultado = $this->srv->operar('add', $op1, $op2);

        return $this->render('calculadora/resultado.html.twig',['resultado' => $resultado]);
    }

    #[Route('multiply/{op1}/{op2}', name: 'app_multiplicar')]
    public function mutiplicar(Request $request)
    {   
        $op1 = $request->get('op1');
        $op2 = $request->get('op2');

        $resultado = $this->srv->operar('add', $op1, $op2);

        return $this->render('calculadora/resultado.html.twig',['resultado' => $resultado]);
    }

    #[Route('divide/{op1}/{op2}', name: 'app_dividir')]
    public function dividir(Request $request)
    {   
        $op1 = $request->get('op1');
        $op2 = $request->get('op2');

        $resultado = $this->srv->operar('add', $op1, $op2);

        return $this->render('calculadora/resultado.html.twig',['resultado' => $resultado]);
    }
    
}
