<?php

namespace App\Controller;

use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\ORM\TableRegistry;

class CakesController extends AppController
{

    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
    }

    public function index(){

        $cakes = $this->Cakes->find('all');

        $this->set(['status' => 'success','data' => ['cakes' => $cakes]]);
    }

    public function view($id)
    {
        $cake = $this->Cakes->find()
        ->where(['id' => $id])
        ->first();

        $this->set(['message' => 'success','data' => ['cake' => $cake]]);
    }

    public function add()
    {
        $cake = $this->Cakes->newEntity($this->request->data);

        if ($this->Cakes->save($cake)) {

            $this->set(['status' => 'success', 'data' => ['cake' => $cake]]);

        } else {

            $this->set(['status' => 'fail', 'data' => null])->response->statusCode(400);
        }
    }

    public function edit($id)
    {
        $cake = $this->Cakes->find()
            ->where(['id' => $id])
            ->first();

        $cake->description = ($this->request->query('description')) ? $this->request->query('description') : $cake->description;
        $cake->layers = ($this->request->query('layers')) ? intval($this->request->query('layers')) : $cake->layers;

       if ($this->Cakes->save($cake)) {

           $this->set(['status' => 'success', 'data' => ['cake' =>  $cake]]);
       } else {

           $this->set(['status' => 'fail','data' => null])->response->statusCode(400);
       }
    }

    public function delete($id)
    {
        $cake = $this->Cakes->find()
            ->where(['id' => $id])
            ->first();

        if ($this->Cakes->delete($cake)) {

            $this->set(['status' => 'success']);
        } else {
            $this->set(['status' => 'fail'])->response->statusCode(400);
        }
    }
}