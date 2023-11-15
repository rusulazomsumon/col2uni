 <!-- Name -->
 {!! Form::label('title', 'Titile') !!}
 {!! Form::text('title', null, ['id'=>'title','class'=>'form-control from-control-sm']) !!}
 <!-- Slug -->
 {!! Form::label('slug', 'Slug') !!}
 {!! Form::text('slug',  null, ['id'=>'slug','class'=>'form-control from-control-sm']) !!}
 <!-- Active Status -->
 {!! Form::label('status', 'Pist Status') !!}
 {!! Form::select('status',  [1=>'Active', 0=>'Inactive'],null, ['class'=>'form-select from-control-sm']) !!}
 {{-- Categories --}}
 {!! Form::label('category_id', 'Select Category', ['class'=>'mt-2']) !!}
 {!! Form::select('category_id', $categories, null , ['class'=>'form-select from-control-sm', 'placeholder'=>'--Category--']) !!}
 {{-- Post Description --}}
 {!! Form::label('description', 'Post Description', ['class'=>'mt-2']) !!} <br>
 {!! Form::textarea('description', null , ['class'=>'from-control']) !!}
 