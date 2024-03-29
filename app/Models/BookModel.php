<?php
namespace App\Models;

use CodeIgniter\Model;

class BookModel extends Model
{
    protected $table = 'books';
    protected $allowedFields = ['title', 'author', 'isbn'];

    public function getRecords(){
        return $this->orderBy('id','DESC')->findAll();
    }
}

?>