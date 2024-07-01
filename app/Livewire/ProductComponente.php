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
    public $itemsPerPage = 50;

    public function mount()
    {
        $this->itemsPerPage = 50; // Valor por defecto
    }

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
        $query = Product::with('brand')
            ->where(function ($query) {
                $query->where('nombre', 'like', "%{$this->buscar}%")
                    ->orWhere('precio', 'like', "%{$this->buscar}%");
            });

        if (!empty($this->selectedBrands)) {
            $query->whereHas('brand', function ($query) {
                $query->whereIn('id', $this->selectedBrands);
            });
        }

        $products = $query->paginate($this->itemsPerPage);

        if ($products->isEmpty()) {
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
