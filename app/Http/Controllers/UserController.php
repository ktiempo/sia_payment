<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

Class PaymentController extends Controller 
{
    //create a new payment record
    public function createPayment(Request $request)
    {

    }

    //gcash payment
    public function makeGcashPayment(Request $request)
    {

    }

    //card payment
    public function makeCardPayment(Request $request)
    {

    }

    //update payment record
    public function updatePayment(Request $request, $id)
    {

    }

    //cancel payment
    public function cancelPayment($id)
    {

    }

    //delete payment
    public function deletePayment($id)
    {

    }

    //get specific payment details
    public function getPaymentDetails($id)
    {

    }

    //get all payment record
    public function getAllPayment()
    {

    }
}