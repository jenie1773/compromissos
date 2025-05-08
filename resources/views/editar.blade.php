
<form action="{{ route('compromissos.editar' }}" method="post">
    @method('PUT')
    @csrf
    <input type='text' name='titulo' placeholder='O que você tem pra fazer?' value="{{$compromisso->titulo}}">
    </br>
    <input type='datetime-local' name='quando' placeholder='Quando?' value="{{$compromisso->quando}}">
    </br>
    <input type='submit' value='Gravar'>
</form>