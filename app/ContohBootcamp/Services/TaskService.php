<?php

namespace App\ContohBootcamp\Services;

use App\ContohBootcamp\Repositories\TaskRepository;

class TaskService {
	private TaskRepository $taskRepository;

	public function __construct() {
		$this->taskRepository = new TaskRepository();
	}

	/**
	 * NOTE: untuk mengambil semua tasks di collection task
	 */
	public function getTasks()
	{
		$tasks = $this->taskRepository->getAll();
		return $tasks;
	}

	/**
	 * NOTE: menambahkan task
	 */
	public function addTask(array $data)
	{
		$taskId = $this->taskRepository->create($data);
		return $taskId;
	}

	/**
	 * NOTE: UNTUK mengambil data task
	 */
	public function getById(string $taskId)
	{
		$task = $this->taskRepository->getById($taskId);
		return $task;
	}

	/**
	 * NOTE: untuk update task
	 */
	public function updateTask(array $editTask, array $formData)
	{
		if(isset($formData['title']))
		{
			$editTask['title'] = $formData['title'];
		}

		if(isset($formData['description']))
		{
			$editTask['description'] = $formData['description'];
		}

		$id = $this->taskRepository->save( $editTask);
		return $id;
	}


/* tambahan disini----------------  */
	/**
	 * NOTE: untuk delete task
	 */
	public function deleteTask(string $taskId)
	{
		$existTask = $this->taskRepository->getById($taskId);
		if(!$existTask)
		{
			return response()->json([
				"message"=> "Task ".$taskId." tidak ada"
			], 401);

		}else{

		$tasks= $this->taskRepository->deltask($taskId);
		return response()->json([
			'message'=> 'Success delete task '.$taskId
		]);
		}
	}
	
	public function assignTask($existTask, $assigned)
	{
		$existTask['assigned'] = $assigned;

		$this->taskRepository->save($existTask);

	}

	public function unassignTask($existTask)
	{
		$existTask['assigned'] = null;

		$this->taskRepository->save($existTask);

	}

	public function addSubtask($existTask,$title,$description)
	{		
		$this->taskRepository->createSubtask($existTask,$title,$description);
	}

	public function delSubtask($existTask,$subtaskId)
	{
		$this->taskRepository->deleteSubtask($existTask,$subtaskId);
	}
}