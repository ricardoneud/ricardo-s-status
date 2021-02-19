<?php

namespace App\Http\Livewire\Dashboard\Components\Modals;

use App\Events\ActionLog;
use App\Models\ComponentGroup;
use Auth;
use Livewire\Component;

class ComponentUpdateModal extends Component
{
    public ComponentGroup $group;

    public bool $modal = false;
    public \App\Models\Component $comp;

    protected $rules = [
        'comp.name' => 'required|string|min:3',
        'comp.link' => 'url',
        'comp.group' => 'required|integer',
        'comp.status_id' => 'required|integer|min:1|max:6',
        'comp.order' => 'required|integer',
        'comp.visibility' => 'integer|max:1',
    ];

    public function render()
    {
        return view('livewire.dashboard.components.modals.component-update-modal');
    }

    public function start(){
        $this->modal = true;
    }

    public function save(){
        $this->comp->description = '';
        $this->comp->user = Auth::id();

        $this->validate();
        $this->comp->save();

        ActionLog::dispatch(array(
            'user' => Auth::id(),
            'type' => 2,
            'message' => 'Component '.$this->comp->name.' (ID: '.$this->comp->id.')',
        ));

        $this->modal = false;
        $this->emitUp('refreshData');
    }
}
