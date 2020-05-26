<?php


namespace App\Http\Repositories;


use App\Task;

class TaskRepository
{
    protected $task;
    public function __construct(Task $task)
    {
        $this->task = $task;
    }

    function index() {
        return $this->task->all();
    }

    function store($title,$content,$due_date,$image) {
        $this->task->title = $title;
        $this->task->content = $content;
        $this->task->due_date = $due_date;
        $this->task->image = $image;

        $this->task->save();
    }
}
