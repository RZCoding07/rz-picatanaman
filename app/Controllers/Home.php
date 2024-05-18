<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('main');
    }
    public function contact(): string
    {
        return view('contact');
    }
    public function topicsDetail(): string
    {
        return view('topics-detail');
    }
    public function topicsListing(): string
    {
        return view('topics-listing');
    }
    public function login(): string
    {
        return view('login');
    }
    public function monitoringPica(): string
    {
        return view('monitoring_pica');
    }
    public function grafikKuadran(): string
    {
        return view('grafik_kuadran');
    }
}
