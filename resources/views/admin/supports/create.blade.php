<h1> Nova Dúvida </h1>
<form action='{{ route('supports.store') }}' method="POST">
    {{-- @csrf se usar isso, nao precisa da linha de baixo --}}
    <input type="hidden" value="{{ csrf_token() }}" name="_token"> {{-- precisa desse token para validar a requisicao, cada requisiracao token diferete, evitar hack --}} 
    <input type="text" placeholder="Assunto" name="subject">
    <textarea name="body" cols="30" rows="5" placeholder="Descrição"> </textarea>
    <button type="submit">Enviar</button>
    <input type="text" placeholder="Assunto" name="subject">
</form>    