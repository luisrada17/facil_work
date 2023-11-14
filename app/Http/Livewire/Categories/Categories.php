<?php

namespace App\Http\Livewire\Categories;

use Livewire\Component;
use App\Models\Category;

class Categories extends Component
{
    public $categories;
    public $name;
    public $addingCategory = false;
    public $editingCategory = null;

    protected $rules = [
        'name' => 'required|unique:categories,name',
    ];

    public function render()
    {
        $this->categories = Category::all();
        return view('livewire.categories.categories');
    }

    public function resetForm()
    {
        $this->name = '';
        $this->addingCategory = false;
        $this->editingCategory = null;
    }

    public function addCategory()
    {
        $this->validate();

        Category::create(['name' => $this->name]);
        $this->resetForm();
        $this->emit('categoryAdded');
    }

    public function editCategory($categoryId)
    {
        $this->editingCategory = $categoryId;
        $category = Category::find($categoryId);
        $this->name = $category->name;
    }

    public function updateCategory()
    {
        $this->validate();

        $category = Category::find($this->editingCategory);
        $category->update(['name' => $this->name]);
        $this->resetForm();
        $this->emit('categoryUpdated');
    }

    public function deleteCategory($categoryId)
    {
        Category::find($categoryId)->delete();
        $this->resetForm();
        $this->emit('categoryDeleted');
    }
}