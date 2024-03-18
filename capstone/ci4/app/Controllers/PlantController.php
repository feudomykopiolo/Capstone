<?php

namespace App\Controllers;

use App\Models\PlantModel;
use App\Controllers\BaseController;

class PlantController extends BaseController
{
    public function insertPlant()
    {
        $PlantName = $this->request->getPost('PlantName');
        $PlantType = $this->request->getPost('PlantType');
        $PlantDesc = $this->request->getPost('PlantDesc');
        $WaterCapacity = $this->request->getPost('WaterCapacity');
        $SoilType = $this->request->getPost('SoilType');
        $DaystoHarvest = $this->request->getPost('DaystoHarvest');
        $HarvestStatus = $this->request->getPost('HarvestStatus');


        // Load the model
        $plantModel = new PlantModel();

        // Call the model method to insert data
        $plantModel->insertPlant($PlantName, $PlantType, $PlantDesc, $WaterCapacity, $SoilType, $DaystoHarvest, $HarvestStatus);

        // Optionally, you can redirect the user to another page after inserting data
        return redirect()->to('dashboard/tables');
    }
    
    public function list()
    {
        $plantModel = new PlantModel();
        $data['plants'] = $plantModel->findAll(); // Fetch all plants from the database
    }
    public function delete($id = null)
    {
        $plantModel = new PlantModel(); 
        $plantModel->delete($id);
        return redirect()->back()->with('status','Plant Deleted Successfully');
    }
    public function edit($id) {
        // Assuming you have a model called "PlantModel" to handle database operations
        $this->load->model('PlantModel');
    
        // Fetch existing plant data by ID
        $plantData = $this->PlantModel->getPlantById($id);
    
        // Pass plant data to the view for editing
        $data['plant'] = $plantData;
        $this->load->view('edit_plant', $data); // Assuming you have an edit_plant view
    }
    
    public function update() {
        $id = $this->input->post('plantId'); // Assuming plantId is sent with the form data
        $data = [
            'PlantName' => $this->input->post('PlantName'),
            'PlantType' => $this->input->post('PlantType'),
            'PlantDesc' => $this->input->post('PlantDesc'),
            'WaterCapacity' => $this->input->post('WaterCapacity'),
            'SoilType' => $this->input->post('SoilType'),
            'DaysToHarvest' => $this->input->post('DaysToHarvest'),
            'HarvestStatus' => $this->input->post('HarvestStatus')
        ];
    
        $this->load->model('PlantModel');
        $this->PlantModel->update($id, $data);
    
        redirect('plants/list')->with('status', 'Plant Updated Successfully');
    }
    
    use ResponseTrait;

    // Method to update the harvest status of a plant
    public function updateHarvestStatus($plantId)
    {
        // Ensure it's a POST request
        if ($this->request->getMethod() === 'post') {
            // Retrieve CSRF token from the request
            $csrfToken = $this->request->getPost('csrf_token');
            
            // Verify CSRF token
            if (!csrf_check($csrfToken)) {
                return $this->failUnauthorized('CSRF token validation failed');
            }
    
            // Get the plant ID from the request body
            $postData = $this->request->getJSON();
            if (!isset($postData->plantId) || $postData->plantId != $plantId) {
                return $this->fail('Invalid plant ID in request body');
            }
    
            // Update the harvest status in the database
            $plantModel = new PlantModel();
            $updated = $plantModel->updateHarvestStatus($plantId);
    
            if ($updated) {
                return $this->respond(['message' => 'Harvest status updated successfully']);
            } else {
                return $this->failServerError('Failed to update harvest status');
            }
        } else {
            return $this->fail('Only POST requests are allowed');
        }
    }
    

}
