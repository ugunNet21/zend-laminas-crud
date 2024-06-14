<?php

namespace Book\Controller;

use Laminas\Mvc\Controller\AbstractRestfulController;
use Laminas\View\Model\JsonModel;
use Book\Model\Book;
use Book\Model\BookTable;
use Laminas\Db\Adapter\AdapterInterface;

class BookController extends AbstractRestfulController
{
    private $table;

    public function __construct(BookTable $table)
    {
        $this->table = $table;
    }

    public function getList()
    {
        $books = $this->table->fetchAll();
        return new JsonModel(['data' => $books]);
    }

    public function get($id)
    {
        $book = $this->table->getBook($id);
        return new JsonModel(['data' => $book]);
    }

    public function create($data)
    {
        $book = new Book();
        $book->exchangeArray($data);
        $this->table->saveBook($book);
        return new JsonModel(['data' => $book]);
    }

    public function update($id, $data)
    {
        $book = $this->table->getBook($id);
        $book->exchangeArray($data);
        $this->table->saveBook($book);
        return new JsonModel(['data' => $book]);
    }

    public function delete($id)
    {
        $this->table->deleteBook($id);
        return new JsonModel(['data' => 'deleted']);
    }
}
