<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Jurisdiccion;

class Jurisdicciones extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $codigo, $nombre;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.jurisdicciones.view', [
            'jurisdicciones' => Jurisdiccion::latest()
						->orWhere('codigo', 'LIKE', $keyWord)
						->orWhere('nombre', 'LIKE', $keyWord)
						->paginate(10),
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
    }
	
    private function resetInput()
    {		
		$this->codigo = null;
		$this->nombre = null;
    }

    public function store()
    {
        $this->validate([
		'codigo' => 'required',
		'nombre' => 'required',
        ]);

        Jurisdiccion::create([ 
			'codigo' => $this-> codigo,
			'nombre' => $this-> nombre
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');
		session()->flash('message', 'Jurisdiccione Successfully created.');
    }

    public function edit($id)
    {
        $record = Jurisdiccion::findOrFail($id);
        $this->selected_id = $id; 
		$this->codigo = $record-> codigo;
		$this->nombre = $record-> nombre;
    }

    public function update()
    {
        $this->validate([
		'codigo' => 'required',
		'nombre' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Jurisdiccion::find($this->selected_id);
            $record->update([ 
			'codigo' => $this-> codigo,
			'nombre' => $this-> nombre
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
			session()->flash('message', 'Jurisdiccione Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Jurisdiccion::where('id', $id)->delete();
        }
    }
}