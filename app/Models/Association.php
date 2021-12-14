<?php

namespace App\Models;

use App\Services\GeoService;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Association extends Model
{
    use HasFactory;

    protected $geoService;

    public function __construct(GeoService $geoService){
        $this->geoService = $geoService;
    }

    public function setCoordonnees($adresse){
        $this->coordonnees = $this->geoService->calculateCoordonnees($adresse);
    }
}
