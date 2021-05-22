<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class JobController extends ResourceController
{
	/**
	 * Return an array of resource objects, themselves in array format
	 *
	 * @return mixed
	 */
	public function index()
	{
		$data = [
			'jobs' => [
				'job' => [
					'id' => 1,
					'titulo' => 'primeira tarefa',
					'descricao' => 'primeira tarefa',
					'inicio' => '12-03-2021',
					'final' => '22-09-2021',
				],

				'job' => [
					'id' => 1,
					'titulo' => 'primeira tarefa',
					'descricao' => 'primeira tarefa',
					'inicio' => '12-03-2021',
					'final' => '22-09-2021',
				]

			]
			,
			'titulo' => 'Listagem de tarefas' 
		];

		
		return view('dashboard/jobs/index_job_page', $data);
	}

	/**
	 * Return the properties of a resource object
	 *
	 * @return mixed
	 */
	public function show($id = null)
	{
		return "Aqui dentro" . $id;
	}

	/**
	 * Return a new resource object, with default properties
	 *
	 * @return mixed
	 */
	public function new()
	{
		session()->setFlashData('success', "carregado");
		return redirect('tarefas');
	}

	/**
	 * Create a new resource object, from "posted" parameters
	 *
	 * @return mixed
	 */
	public function create()
	{
		return "Aqui dentro";
	}

	/**
	 * Return the editable properties of a resource object
	 *
	 * @return mixed
	 */
	public function edit($id = null)
	{
		return "Aqui dentro" . $id;
	}

	/**
	 * Add or update a model resource, from "posted" properties
	 *
	 * @return mixed
	 */
	public function update($id = null)
	{
		return "Aqui dentro" . $id;
	}

	/**
	 * Delete the designated resource object from the model
	 *
	 * @return mixed
	 */
	public function delete($id = null)
	{
		return "Aqui dentro" . $id;
	}
}
