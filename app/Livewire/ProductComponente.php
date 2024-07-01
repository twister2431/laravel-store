<?php

namespace App\Livewire;

use \Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Computed;
use App\Models\Product;
use Livewire\Component;
use App\Models\Brand;

class ProductComponente extends Component
{
    use LivewireAlert;
    public $buscar = '';
    public $selectedBrands = [];

    public function limpiar()
    {
        $this->buscar = '';
        $this->selectedBrands = [];
    }

    public function updatedSelectedBrands()
    {
        $this->dispatch('filtroActualizado', $this->selectedBrands);
    }
    #[Computed]
    public function products()
    {

        $products = Product::with('brand')
            ->where(function ($query) {
                $query->where('nombre', 'like', "%{$this->buscar}%")
                    ->orWhere('precio', 'like', "%{$this->buscar}%");
            })->when(!empty($this->selectedBrands), function ($query) {
                $query->whereHas('brand', function ($query) {
                    $query->whereIn('id', $this->selectedBrands);
                });
            })->get();

        if($products->isEmpty()){
            $this->alert('warning', 'No se encontraron resultados', [
                'position' => 'center',
                'timer' => 6000,
                'toast' => false,
                'showConfirmButton' => true,
                'onConfirmed' => '',
                'confirmButtonText' => 'Aceptar',
                'timerProgressBar' => true,
            ]);
        }

        return $products;
    }

    #[Computed]
    public function brands()
    {
        return Brand::all();
    }

    public function render()
    {
        return view('livewire.product-componente')->layout('layouts.app');
    }
}
