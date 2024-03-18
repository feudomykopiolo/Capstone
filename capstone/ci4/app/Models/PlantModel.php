<?php

namespace App\Models;

use CodeIgniter\Model;

class PlantModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'list_of_plants';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['PlantName', 'PlantType', 'PlantDesc', 'WaterCapacity', 'SoilType', 'DaystoHarvest','HarvestStatus'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function insertPlant($plantName, $plantType, $plantDesc, $waterCapacity, $soilType, $daystoHarvest, $harvestStatus)
    {
        $data = [
            'PlantName' => $plantName,
            'PlantType' => $plantType,
            'PlantDesc' => $plantDesc,
            'WaterCapacity' => $waterCapacity,
            'SoilType' => $soilType,
            'DaystoHarvest' => $daystoHarvest,
            'HarvestStatus' => $harvestStatus,
        ];

        $this->insert($data);
    }

    public function update($id = null, $data = null): bool
    {
        if ($id !== null && $data !== null) {
            $this->db->set($data);
            $this->db->where('id', $id);
            return $this->db->update('plants'); // Assuming your table name is 'plants'
        }
        return false; // Return false if $id or $data is not provided
    }
public function updateHarvestStatus($id)
{
    try {
        // Find the plant with the given ID
        $plant = $this->find($id);

        // Check if the plant exists
        if (!$plant) {
            // If plant not found, return false
            return false;
        }

        // Update the HarvestStatus column
        $plant->HarvestStatus = 'Harvested'; // Adjust this according to your column name

        // Save the changes to the database
        $plant->save();

        // Return true indicating success
        return true;
    } catch (\Exception $e) {
        // Log the error or handle it as needed
        // For now, let's just return false indicating failure
        return false;
    }
}

    
    
}
