<?php


namespace App\Controller;


use Cake\Controller\Controller;

/**
 * Books Controller
private $Books;
 * @property \App\Model\Table\BooksTable $books
 * @method \App\Model\Entity\Book[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
*/
class BooksController extends Controller
{
    /**
     * Index methode
     *
     * @return all books stored into the database
     */

    public function index()
    {
        $allBooks = $this->paginate($this->Books);
        //if there's no books I'm just going to send a att into the view
        if (empty($allBooks)){
            $this->set(['listNull'=>'null']);
        }
        $this->set(compact('allBooks'));
    }

}
