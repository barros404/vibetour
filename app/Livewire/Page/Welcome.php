<?php

namespace App\Livewire\Page;

use App\Models\PrecoRota;
use App\Models\Provincia;
use App\Models\Rotas;
use Livewire\Component;

class Welcome extends Component
{
    public $origin, $destination, $checkin_date, $chechout_datecheckin_date;
    public $provincias=[],$results=[],$search=false;

    public function  mount(){
        $this->provincias=Provincia::all();
    }
    public function render()
    {
        return view('livewire.page.welcome');
    }
    function search_viajem(){
        $this->search=true;
        $app=Rotas::where('origem_id', $this->origin)
            ->where('destino_id', $this->destination)

            ->first();
            // se encontrar a rota verificar os preços com cada trasportadora
        if($app){
           // Retornar todas as transportadoras com os preços organizado de menor preço ate menor
            $this->results=PrecoRota::join('transportadoras', 'preco_rotas.transportadora_id', '=', 'transportadoras.id')
            ->join('rotas', 'preco_rotas.rota_id', '=', 'rotas.id')
            ->where('preco_rotas.rota_id', $app->id)
            ->orderBy('preco_rotas.preco', 'asc')
            ->select('rotas.origem_id','rotas.destino_id','preco_rotas.*', 'transportadoras.nome as transportadora_nome')

                ->get();
        }else{
           /// retornar vazio
           $this->results=[];
        }

    }
 function getProvianciaName($id)  {
    $provincia=Provincia::find($id);
    if($provincia){
        return $provincia->name;
    }else{
        return '';
    }

 }
}
