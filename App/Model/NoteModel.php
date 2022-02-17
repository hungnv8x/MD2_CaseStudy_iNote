<?php

namespace App\Model;

class NoteModel extends BaseModel
{
    public $table = "note";

    public function getAll()
    {
        $sql = "select note.id, title,content,note_type.name from note join note_type on note_type_id = note_type.id";
        $stmt = $this->connect->query($sql);
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }

    public function getById($id)
    {
        $sql = "select note.id, title,content,note_type.name from note join note_type on note_type_id = note_type.id where note.id=".$id;
        $stmt = $this->connect->query($sql);
        return $stmt->fetch(\PDO::FETCH_OBJ);
    }

    public function create($data)
    {
        $sql = "insert into note(title,content,note_type_id) values (?,?,?)";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1,$data['title']);
        $stmt->bindParam(2,$data['content']);
        $stmt->bindParam(3,$data['note_type_id']);
        $stmt->execute();
    }

    public function update($data,$id)
    {
        $sql = "update note set title =?,content = ?,note_type_id =? where id = ?";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1,$data['title']);
        $stmt->bindParam(2,$data['content']);
        $stmt->bindParam(3,$data['note_type_id']);
        $stmt->bindParam(4,$id);
        $stmt->execute();
    }
    public function deleteNoteByTypeId($id)
    {
        $sql = "delete from $this->table where note_type_id =".$id;
        $this->connect->query($sql);
    }
}