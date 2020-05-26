<?php


namespace App\Http\Services;


use App\Http\Repositories\TaskRepository;

class TaskService
{
    protected $taskRepository;

    public function __construct(TaskRepository $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }

    function index()
    {
        return $this->taskRepository->index();
    }
    function store1($title, $content, $due_date, $image)
    {
        $this->taskRepository->store($title, $content, $due_date, $image);
    }

    function store2($title, $content, $due_date, $fileName, $file)
    {

        $fileExtension = $file->getClientOriginalExtension();
        $newFileName = "$fileName.$fileExtension";
        $file->storeAs('public/images', $newFileName);
        $image = $newFileName;

        $this->taskRepository->store($title, $content, $due_date, $image);
    }

}
