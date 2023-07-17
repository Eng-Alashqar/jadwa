<?php

namespace App\Services;

use App\Models\Admin\Package;

class PackageService
{
    public function __construct(private Package $package) {}


    public function getAll()
    {
        return $this->package->latest()->get();
    }

    public function find($id)
    {
        return $this->package->findOrFail($id);
    }

    public function store($params)
    {

        $package =  $this->package->create($params);
        $package->tasks()->sync($params['task_ids']);
        return $package;
    }

    public function update($params,$id)
    {
        return $this->find($id)->update($params);
    }

    public function delete($id)
    {
        return $this->find($id)->delete();
    }
}
