<?php

namespace App\Http\Livewire;

use Livewire\Component;
use OpenAI\Laravel\Facades\OpenAI;

class OpenaiForm extends Component
{
    public $result_text;
    public $frase_text;


    public function render()
    {
        return view('livewire.openai-form');
    }

    public function getOpenAI()
    {
        $apiKey = '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';
        $result = OpenAI::completions()->create([
            'model' => 'text-davinci-003',
            'prompt' => $this->frase_text,
        ]);

        $this->result_text = $result['choices'][0]['text'];
    }
}
