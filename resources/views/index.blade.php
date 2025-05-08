
<form action="{{ route('compromissos.editar' }}" method="post">
    @method('PUT')
    @csrf
    <input type='text' name='titulo' placeholder='O que você tem pra fazer?'>
    </br>
    <input type='datetime-local' name='quando' placeholder='Quando?'>
    </br>
    <input type='submit' value='Gravar'>
</form>
Sua lista:
<ul>
    @foreach($compromissos as $comp) {
        <li>
                {{ $comp->titulo }} ({{
                    $comp->quando
                }})
                <a href="{{}}"></a>
        </li>
    }
</ul>