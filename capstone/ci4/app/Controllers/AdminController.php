<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Models\PlantModel;
use App\Models\InfoModel;
use App\Models\SensorModel;
use App\Controllers\BaseController;

class AdminController extends BaseController
{
    public function dash()
    {
        $infoModel = new InfoModel();
$data['provinceInfo'] = $infoModel->findAll(); // Assuming you have a method to fetch all province information
return view('dashboard/dash', $data);

    }
    public function charts()
    {
        return view('dashboard/charts'); 
    }
    public function tables()
    {
        $infoModel = new InfoModel();
        $plant = new PlantModel();
        
        $data['plants'] = $plant->findAll();
        $data['tableInfo'] = $infoModel->findAll(); // Assuming you have a method to fetch all province information
        
        return view('dashboard/tables', $data); // Passing $data to the view
    }
    

    public function cards()
    {
        return view('dashboard/cards'); 
    }
    public function nutrients()
    {
        return view('dashboard/nutrients'); 
    }
    public function sensors()
    {
        $sensor = new SensorModel();
        $data['sensors'] = $sensor->findAll();
        return view('dashboard/sensors', $data); 
    }
    
}