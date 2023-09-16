<?php

namespace app\Models;

class TasksModel extends \CodeIgniter\Model
{
    protected $table = 'tasks';

    protected $allowedFields = ['title', 'description', 'created_at'];
    protected $validationRules = [
      'title' => 'required|min_length[5]'
    ];

    protected $validationMessages = [
      'title' => [
          'required' => 'Enter your title',
          'min_length' => 'Your title is too short'
      ]
    ];
}
