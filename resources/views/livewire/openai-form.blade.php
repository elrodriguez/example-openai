<div>
    <h1>Open AI</h1>
    <form action="">
    <label for="texto">Escribe tu frase</label>
    <br>
    <input type="text" wire:model.defer="frase_text" id="texto" cols="30" rows="10" class="form-control">
    <br>
    <button wire:click="getOpenAI" type="button">Consultar</button>
    <br><br>
</form>
    <p>{{ $result_text }}</p> 
</div