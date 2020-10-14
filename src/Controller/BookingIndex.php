<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class BookingIndex extends AbstractController
{
    /**
     * @Route("/", name="create_booking")
     */
    public function create_booking()
    {

        return $this->render('bookings/index.html.twig');
    }
}