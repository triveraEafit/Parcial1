<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

/**
 * PILOT ATTRIBUTES
 * $this->attributes['id'] - int - primary key
 * $this->attributes['name'] - string - name of the pilot
 * $this->attributes['origin_city'] - string - origin city of the pilot (LA or Tokio)
 * $this->attributes['nitro_level'] - int - nitro level of the pilot
 * $this->attributes['created_at'] - string - creation timestamp
 * $this->attributes['updated_at'] - string - update timestamp
 */
class Pilot extends Model
{
    protected $fillable = ['name', 'origin_city', 'nitro_level'];

    // --- SETTERS ---
    public function setId(int $id): void
    {
        $this->attributes['id'] = $id;
    }

    public function setName(string $name): void
    {
        $this->attributes['name'] = $name;
    }

    public function setOriginCity(string $originCity): void
    {
        $this->attributes['origin_city'] = $originCity;
    }

    public function setNitroLevel(int $nitroLevel): void
    {
        $this->attributes['nitro_level'] = $nitroLevel;
    }

    public function setCreatedAt($createdAt)
    {
        $this->attributes['created_at'] = $createdAt;

        return $this;
    }

    public function setUpdatedAt($updatedAt)
    {
        $this->attributes['updated_at'] = $updatedAt;

        return $this;
    }

    // --- GETTERS ---
    public function getId(): int
    {
        return $this->attributes['id'];
    }

    public function getName(): string
    {
        return $this->attributes['name'];
    }

    public function getOriginCity(): string
    {
        return $this->attributes['origin_city'];
    }

    public function getNitroLevel(): int
    {
        return $this->attributes['nitro_level'];
    }

    public function getCreatedAt()
    {
        return $this->attributes['created_at'];
    }

    public function getUpdatedAt()
    {
        return $this->attributes['updated_at'];
    }

    // --- NON-PRIMITIVE METHODS / RELATIONS ---
    public static function getAllOrderedByNitroAsc(): Collection
    {
        return self::orderBy('nitro_level', 'asc')->get();
    }

    public static function getCountByCity(string $city): int
    {
        return self::where('origin_city', $city)->count();
    }

    public static function getAverageNitroLevel(): float
    {
        $average = self::avg('nitro_level');

        return $average ? round((float) $average, 2) : 0.0;
    }
}