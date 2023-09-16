<?php

namespace App\Controllers;

class Tasks extends BaseController
{
    public function index(): string
    {
        $model = new \App\Models\TasksModel();
        $data = $model->findAll();

        return view('Tasks/index', ['tasks' => $data]);
    }

    public function show($id)
    {
        $model = new \App\Models\TasksModel();
        $task = $model->find($id);

        if ($task === null) {
            // обработка логики, когда записи с этим id не нашлось
            // можно вернуть ошибку, или перенаправить на др страницу
        }
        return view('Tasks/show', ['task' => $task]);
    }

    public function new()
    {
        return view('Tasks/new');
    }

    /**
     * @throws \ReflectionException
     */
    public function store()
    {
        $model = new \App\Models\TasksModel();

      $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'created_at' => $this->request->getPost('created_at')
        ];
        $result = $model->insert($data);
        if (!$result) {
          return redirect()
              ->back()
              ->withInput($data)
              ->with('errors', $model->errors());
        } else {
           return redirect()
               ->to('/tasks')
               ->with('success', 'Task created')
               ->with('data', $data);
        }
    }
}