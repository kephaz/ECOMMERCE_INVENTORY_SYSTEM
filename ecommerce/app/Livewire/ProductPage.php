<?php

namespace App\Livewire;

use App\Models\product;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

// #[Title('Product- Olalekan Asaaju')]
// class ProductPage extends Component
// {
//     use WithPagination;
//     public function render()

//     {
//         $productQuery = Product::query()->where('is_active', 1);
//         return view('livewire.product-page', [
//             'products' => $productQuery->paginate(6),
            
//         ]);
//     }
// }
