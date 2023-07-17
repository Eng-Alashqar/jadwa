<?php

namespace App\Services;

use App\Models\Admin\Task;

class TaskService
{
    public function __construct(private Task $task) {}


    public function getAll()
    {
        return $this->task->latest()->get();
    }

    public function find($id)
    {
        return $this->task->findOrFail($id);
    }

    public function store($params)
    {
        return $this->task->create($params);
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
