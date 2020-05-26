<?php

namespace App\Http\Controllers;

use App\Http\Services\TaskService;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    protected $request;
    protected $taskService;

    public function __construct(Request $request, TaskService $taskService)
    {
        $this->request = $request;
        $this->taskService = $taskService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $tasks = $this->taskService->index();

        return view('modules.task.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('modules.task.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store()
    {
        $title = $this->request->inputTitle;
        $content = $this->request->inputContent;
        $due_date = $this->request->inputDueDate;
        if (!$this->request->hasFile('inputFile')) {
            $image = null;
            $this->taskService->store1($title,$content,$due_date,$image);
        } else {
            $file = $this->request->file('inputFile');
            $fileName = $this->request->inputFileName;
            $this->taskService->store2($title, $content, $due_date, $fileName, $file);
        }
        $message = "Tạo Task $title thành công!";
        session()->flash('create-success', $message);

        return redirect()->route('task.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function destroy($id)
    {
        //
    }
}
