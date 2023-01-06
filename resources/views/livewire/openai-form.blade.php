<div>
    <h1>Open AI</h1>
    <label for="texto">Escribe tu frase</label>
    <br>
    <textarea wire:model.defer="frase_text" id="texto" cols="30" rows="10" class="form-control"></textarea>
    <br>
    <button wire:click="getOpenAI" type="button">Consultar</button>
    <br><br>
    <p>{{ $result_text }}</p> 
</div