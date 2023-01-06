<?php

namespace App\Http\Livewire;

use Livewire\Component;
use OpenAI\Laravel\Facades\OpenAI;

class OpenaiForm extends Component
{
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
            'prompt' => 'PHP is',
        ]);

        $text = $result['choices'][0]['text'];
        dd($text);
    }
}