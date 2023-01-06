<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;

class OpenaiController extends Controller
{
    public function getOpenai(Request $request)
    {
        $consulta = $request->input('frase_text');
        dd($consulta);
        $result = OpenAI::completions()->create([
            'model' => 'text-davinci-003',
            'prompt' => $consulta,
        ]);
        //dd($result['choices'][0]['text']);

        $result_text = $result['choices'][0]['text'];

        dd($result_text);
    }
}
