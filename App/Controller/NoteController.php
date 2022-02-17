<?php

namespace App\Controller;

use App\Model\NoteModel;
use App\Model\NoteTypeModel;

class NoteController extends BaseController
{
    public function __construct()
    {
        $this->model = new NoteModel();
    }

    public function getAll()
    {
        $notes = $this->model->getAll();
        include_once "App/View/Note/list.php";
    }

    public function getById($id)
    {
        $note = $this->model->getById($id);
        include_once "App/View/Note/detail.php";
    }

    public function delete($id)
    {
        $this->model->Delete($id);
        header("location:index.php?page=note-list");
    }

    public function create($request)
    {
        if ($_SERVER['REQUEST_METHOD']=="GET"){
            $noteTypeModel = new NoteTypeModel();
            $noteTypes = $noteTypeModel->getAll();
            include_once "App/View/Note/create.php";
        }else{
            $this->model->create($request);
            header("location:index.php?page=note-list");
        }
    }

    public function update( $request,$id)
    {
        if ($_SERVER['REQUEST_METHOD']=="GET"){
            $noteTypeModel = new NoteTypeModel();
            $noteTypes = $noteTypeModel->getAll();
            $note = $this->model->getById($id);
            include_once "App/View/Note/edit.php";
        }else{
            $this->model->update($request,$id);
            header("location:index.php?page=note-list");
        }
    }
}