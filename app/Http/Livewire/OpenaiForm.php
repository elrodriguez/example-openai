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
        $this->getOpenAI();
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
        $apiKey = env('OPENAI_API_KEY');
        $consulta = $this->frase_text;
        $result = OpenAI::completions()->create([
            'model' => 'text-curie-001',
            'prompt' => 'cuantos dioses conoce la humanidad según sus creencias e historias?',
            'max_tokens' => 250,
        ]);
        dd($result);
        echo "<h1>".$result['choices'][0]['text']."</h1>";
        $this->result_text = $result['choices'][0]['text'];
    }
}
