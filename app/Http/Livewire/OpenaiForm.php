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
            'model' => 'text-davinci-003',
            'prompt' => 'parafrasea esto: "La odontalgia puede derivarse por carácter de tipo multifactorial, existiendo numerosos componentes, causas y/o circunstancias por las que puede originarse. Entre ellos, se encuentran los siguientes:

                Pulpitis
            
            Se trata de una inflamación de la parte interna de la pieza dental donde se encuentran los vasos sanguíneos y las terminaciones nerviosas.
            
                Alveolitis
            
            Es un proceso infeccioso localizado en la pared del alvéolo dental. Normalmente, surge en el maxilar inferior, zona de premolares y/o molares, después de una extracción compleja o tras padecer de boca séptica e inmunodeficiencias.
            
                Caries
            
            Es una condición causante del daño en el esmalte de las piezas dentales y está ocasionada por los microorganismos y su acción destructiva, debido a la presencia de ácidos que se acumulan en la placa bacteriana.
            
            Si no es muy profunda, se puede solucionar con un empaste. En caso contrario, si se extiende al nervio, se deberá efectuar una endodoncia.
            
                Enfermedad periodontal
            
            El origen de la dolencia surge en la encía que envuelve el diente y, si está lo suficientemente avanzada, puede provocar movilidad dental.
            
            El procedimiento puede ser desde una limpieza simple hasta un raspado periodontal mucho más profundo e intenso. Por esa razón, es prioritario mantener las encías sanas con una buena limpieza oral en el hogar y visitar frecuentemente al dentista.
            
                Bruxismo
            
            Es el conocido rechinamiento dental que ocurre de forma involuntaria mayormente en las horas nocturnas.
            
            Esta fricción causa una mayor tensión en la articulación temporomandibular, ocasionando un dolor intenso y profundo en las muelas y/o piezas dentales. No obstante, puede solucionarse tras la confección de una férula de descarga personalizada.
            
                Traumatismos bucodentales
            
            Un mal golpe en los dientes de forma consciente o inconsciente puede ocasionar dolor dental, provocando fisuras y/o grietas en las mismas. Esto facilita que las bacterias de la boca penetren sin problema alguno en las capas internas de la pieza afectada, generando una infección profunda.
            
            No obstante, dependiendo de la gravedad, se efectuarán tratamientos como empastes y endodoncia, entre otros tratamientos odontológicos.
            
                Muelas del juicio
            
            Como hemos visto anteriormente, cualquier erupción dental puede desencadenar esta patología. Sin embargo, entre las razones más comunes, se encuentran las muelas del juicio. Si estas están comenzando a erupcionar y no tienen el espacio correspondiente, padecer de odontalgia es de lo más común.
            
            Para solucionar esta molestia se recomienda acudir a tu odontólogo de confianza y establecer fecha para el día de la extracción. Después de ello, el dolor y/o incomodidad se habrá ido.
            
                Absceso periapical
            
            Los abscesos pueden dirigirse hacia el interior de la boca y, finalmente, drenar. En caso contrario, pueden provocar una celulitis bucal, ocasionando que el diente se vuelva extremadamente sensible a procesos normales como masticar.
            
                Pericoronitis
            
            Es la inflamación del tejido entre el diente y el colgajo de encía que lo circunda. Aparece de manera recurrente y con mayor frecuencia en una muela del juicio del sector inferior que está por erupcionar.
            
            No obstante, ante cualquier eventualidad, lo esencial es que acudas a tu dentista lo antes posible. Si acudes nada más sientas esta patología tendrá la posibilidad de diagnosticar el origen de la odontalgia y poner solución en su etapa inicial con un tratamiento menos agresivo."',
            'max_tokens' => 2800,
        ]);
        dd($result);
        echo "<h1>".$result['choices'][0]['text']."</h1>";
        $this->result_text = $result['choices'][0]['text'];
    }
}
