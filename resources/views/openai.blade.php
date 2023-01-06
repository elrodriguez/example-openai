<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @livewireStyles
</head>
<body>
    <form action="{{ route('openai_text') }}" method="POST">
        @csrf
        <h1>Open AI</h1>
        <label for="texto">Escribe tu frase</label>
        <br>
        <textarea name="frase_text" id="texto" cols="30" rows="10" class="form-control"></textarea>
        <br>
        <button type="submit">Consultar</button>
    </form>
    {{-- <livewire:openai-form />  --}}
    @livewireScripts
</body>
</html>