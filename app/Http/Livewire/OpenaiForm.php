<?php

namespace App\Http\Livewire;

use Livewire\Component;
use OpenAI\Laravel\Facades\OpenAI;

class OpenaiForm extends Component
{
    public $result_text = 'resultado';
    public $frase_text;

    public function mount()
    {
        //$this->getOpenAI();
    }
    public function render()
    {
        return view('livewire.openai-form');
    }
    public function clickEE()
    {
        $this->result_text = $this->frase_text;
    }
    public function getOpenAI()
    {
        echo "<h1> por la pucta madre </h1>";
        $apiKey = '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';
        $consulta = $this->frase_text;
        $result = OpenAI::completions()->create([
            'model' => 'text-davinci-003',
            'prompt' => $consulta,
        ]);
        //dd($result['choices'][0]['text']);

        $this->result_text = $result['choices'][0]['text'];
    }
}
