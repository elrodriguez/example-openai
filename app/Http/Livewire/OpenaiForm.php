<?php

namespace App\Http\Livewire;

use Livewire\Component;
use OpenAI\Laravel\Facades\OpenAI;

class OpenaiForm extends Component
{
    public $result_text;
    public $frase_text="que bonita vecindad es la vecindad del chavo no vale medio centavo pero es linda de verdad  de que canción es esa letra?";

    public function mount()
    {
        $this->getOpenAI();
    }
    public function render()
    {
        return view('livewire.openai-form');
    }

    public function getOpenAI()
    {
        $apiKey = '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';
        $result = OpenAI::completions()->create([
            'model' => 'text-davinci-003',
            'prompt' => (string)$this->frase_text,
        ]);
        dd($result);
        $this->result_text = $result['choices'][0]['text'];
    }
}
