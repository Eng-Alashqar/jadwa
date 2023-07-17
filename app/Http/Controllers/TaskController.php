<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Admin\Task;
use Illuminate\Http\Request;
use App\Services\TaskService;
use Symfony\Component\HttpFoundation\Response;


class TaskController extends Controller
{

    public function __construct(private TaskService $task) {}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = $this->task->getAll();
        return view('admin.tasks.index',compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TaskRequest $request)
    {
        $this->task->store($request->validated());
        $notifications = [
            'alert-type' => 'success',
            'message' => 'تم الاضافة بنجاح.'
        ];
        return back()->with($notifications);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(string $id)
    {
        $task = $this->task->find($id);
        return view('admin.tasks.edit',compact('task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(TaskRequest $request, string $id)
    {
        $this->task->update($request->validated(),$id);
        $notifications = [
            'alert-type' => 'success',
            'message' => 'تم التعديل بنجاح.'
        ];
        return to_route('admin.tasks.index')->with($notifications);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id)
    {

        $isDeleted = $this->task->delete($id);
        return $this->deleteAjaxResponse($isDeleted);
    }
}
