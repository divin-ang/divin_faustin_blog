
@extends('../layouts/main')

@section('content')


{!! Form::open(['url' => 'contact']) !!}
					<div class="form-group {!! $errors->has('texte') ? 'has-error' : '' !!}">
						{!! Form::text('contact_name', null, ['class' => 'form-control', 'placeholder' => 'Votre nom :  au moins trois caractères']) !!}
						{!! $errors->first('contact_name', '<small class="help-block">:message</small>') !!}
					</div>
					<div class="form-group {!! $errors->has('texte') ? 'has-error' : '' !!}">
						{!! Form::email('contact_email', null, ['class' => 'form-control', 'placeholder' => 'Votre email exemple : divin@gmail.com']) !!}
						{!! $errors->first('contact_email', '<small class="help-block">:message</small>') !!}
					</div>
					<div class="form-group {!! $errors->has('texte') ? 'has-error' : '' !!}">
						{!! Form::textarea ('contact_message', null, ['class' => 'form-control', 'placeholder' => 'Votre message : au moins 7 caractères']) !!}
						{!! $errors->first('contact_message', '<small class="help-block">:message</small>') !!}
					</div>
					{!! Form::submit('Envoyer !', ['class' => 'btn btn-info pull-right']) !!}
				{!! Form::close() !!}
 
@endsection

    
      
    




   
 



    
