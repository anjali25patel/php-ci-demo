<?php 
    namespace App\Controllers;
    use App\Models\BookModel;

    class Book extends BaseController 
    {
        public function index()
        {
            $session=\Config\Services::session();
            $data['session']=$session;

            $model = new BookModel();
            $booksArray = $model -> getRecords();

            $data['books'] = $booksArray;

            return view('books/list',$data);
        }

        public function create()
        {
            $session = \Config\Services::Session();
            helper('form');

             $data = [];

            if($this->request->getMethod() == 'post')
            {
                $input=$this->validate([
                    'name' => 'required|min_length[5]',
                    'author' => 'required|min_length[5]',
                    'isbn' => 'required'
                ]);
                
                
                if ($input == true)
                {
                    // form validate successfully
                    $model = new BookModel();
                   

                    $model->save([
                        
                        'title' => $this->request->getPost('name'),
                        'author' => $this->request->getPost('author'),
                        'isbn' => $this->request->getPost('isbn')
                    
                    ]);
               
                    $session->setFlashdata('success','Winner Winner,record added successfully.');
                    
                    return redirect()->to('/books');
                }  
                else{
                    //form not validated 
                    $data['validation'] = $this->validator;
                } 
             }

            return view('books/create',$data);
        }
        
    }
?> 