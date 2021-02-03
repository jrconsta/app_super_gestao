{{ $slot }}

{{ $classe }}



<form action=" {{route('site.contato')}}" method="post">
    @csrf
    <input name="nome" type="text" placeholder="Nome" class=" {{$classe}} " value=" {{ old('nome') }} ">
    {{ $errors->has('nome') ? $errors->first('nome') : '' }}
    <br>
    <input name="telefone" value=" {{old('telefone')}} " type="text" placeholder="Telefone" class="{{$classe}}">
    {{ $errors->has('telefone') ? $errors->first('telefone') : '' }}
    <br>
    <input name="email" value=" {{old('email')}} " type="text" placeholder="E-mail" class="{{$classe}}">
    {{ $errors->has('email') ? $errors->first('email') : '' }}
    <br>
    
    
    <select name="motivo_contatos_id" class="{{$classe}}">     

        <option value="">Qual o motivo do contato?</option>
        
        @foreach ($motivo_contatos as $key => $motivo_contato)
        
            <option value="{{ $motivo_contato->id}}"  {{ old('motivo_contatos_id') == $motivo_contato->id ? 'selected' : ''}} > {{$motivo_contato->motivo_contato}} </option>

        @endforeach

    </select>
    <br>
    <textarea name="mensagem" class="{{$classe}}">
        {{ (old('mensagem') != '') ? old('mensagem') : 'Preencha aqui sua mensagem' }}
    </textarea>
    {{ $errors->any('mensagem') ? $errors->first('mensagem') : '' }}

    <br>
    <button type="submit" class="{{$classe}}">ENVIAR</button>
</form>

@if($errors->any())
    <div style="position: absolute; top:0px; left:0px; width:100%; background: red">

        @foreach ($errors->all() as $erro)
        {{$erro}}
        @endforeach
       
    </div>
@endif