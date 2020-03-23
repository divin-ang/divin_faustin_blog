
@extends('../layouts/main')

@section('content')

<div class="formulaire">
{!! Form::open(['url' => 'contact']) !!}
					<div class="form-group {!! $errors->has('texte') ? 'has-error' : '' !!}">
						{!! Form::text('contact_name', null, ['class' => 'form-control', 'placeholder' => 'Votre nom']) !!}
						<p class="erreur">{!! $errors->first('contact_name', '<small class="help-block">:message</small>') !!} </p>
					</div>
					<div class="form-group {!! $errors->has('texte') ? 'has-error' : '' !!}">
						{!! Form::email('contact_email', null, ['class' => 'form-control', 'placeholder' => 'Votre email exemple ']) !!}
						<p class="erreur">{!! $errors->first('contact_email', '<small class="help-block">:message</small>') !!}</p>
					</div>
					<div class="form-group {!! $errors->has('texte') ? 'has-error' : '' !!}">
						{!! Form::textarea ('contact_message', null, ['class' => 'form-control', 'placeholder' => 'Votre message : au moins 7 caractères']) !!}
						<p class="erreur">{!! $errors->first('contact_message', '<small class="help-block">:message</small>') !!}</p>
					</div>
					{!! Form::submit('Envoyer !', ['class' => 'btn btn-info pull-right']) !!}
				{!! Form::close() !!}
<div>
 
@endsection

    
      
    




   
 



    
