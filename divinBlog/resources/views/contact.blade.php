
@extends('../layouts/main')

@section('content')


{!! Form::open(['url' => 'contact']) !!}
					<div class="form-group {!! $errors->has('texte') ? 'has-error' : '' !!}">
						{!! Form::text('contact_name', null, ['class' => 'form-control', 'placeholder' => 'Votre nom']) !!}
						{!! $errors->first('contact_name', '<small class="help-block">:message</small>') !!}
					</div>
					<div class="form-group {!! $errors->has('texte') ? 'has-error' : '' !!}">
						{!! Form::email('contact_email', null, ['class' => 'form-control', 'placeholder' => 'Votre email']) !!}
						{!! $errors->first('contact_email', '<small class="help-block">:message</small>') !!}
					</div>
					<div class="form-group {!! $errors->has('texte') ? 'has-error' : '' !!}">
						{!! Form::textarea ('contact_message', null, ['class' => 'form-control', 'placeholder' => 'Votre message']) !!}
						{!! $errors->first('contact_message', '<small class="help-block">:message</small>') !!}
					</div>
					{!! Form::submit('Envoyer !', ['class' => 'btn btn-info pull-right']) !!}
				{!! Form::close() !!}
 
@endsection

    
      
    




   
 



    
