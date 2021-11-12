<?php

namespace App\Http\Livewire\Librarian;

use App\Models\Book;
use App\Models\BookType;
use App\Models\Category;
use Livewire\Component;

class Addbook extends Component
{
    public $result;
    public $category;
    public $book_type;
    public $quantity;
    public $title;

    protected $rules = [
        'title'=>'required',
        'quantity'=>'required'
    ];

    public function render()
    {
        return view('livewire.librarian.addbook');
    }

    public function getCategory(){
        Category::get()
            ? $category = Category::get()
            : $category = false;
        return $category;
    }

    public function getBookType(){
        BookType::get()
            ? $bookType = BookType::get()
            : $bookType = false;
        return $bookType;
    }

    public function addBook(){
        $book = $this->validate();
        $book['category_id'] = $this->category;
        $book['book_type_id'] = $this->book_type;
        Book::create($book)
            ? $this->result = 'Book Added Successfully'
            :$this->result = 'Something Went Wrong';
    }
}
