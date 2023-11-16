 <!-- Name -->
 {!! Form::label('title', 'Titile') !!}
 {!! Form::text('title', null, ['id'=>'title','class'=>'form-control from-control-sm']) !!}
 <!-- Slug -->
 {!! Form::label('slug', 'Slug') !!}
 {!! Form::text('slug',  null, ['id'=>'slug','class'=>'form-control from-control-sm']) !!}
 <!-- Active Status -->
 {!! Form::label('status', 'Post Status') !!}
 {!! Form::select('status',  [1=>'Published', 0=>'Not Published'],null, ['class'=>'form-select from-control-sm']) !!}
 {{-- Categories --}}
 {!! Form::label('category_id', 'Post Category', ['class'=>'mt-2']) !!}
 {!! Form::select('category_id', $categories, null , ['class'=>'form-select from-control-sm', 'placeholder'=>'--select--']) !!}
 {{-- Post Description --}}
 {!! Form::label('description', 'Description', ['class'=>'mt-2']) !!} <br>
 {!! Form::textarea('description', null, ['id'=>'description','class'=>'from-control', 'placeholder'=>'Description']) !!}
 {{-- Fetured Images --}}
 {!! Form::label('photo', 'Fetured Images', ['class'=>'mt-2']) !!}
 {!! Form::file('photo', ['class'=>'from-control' ]) !!} <br>
 {{-- Meta Description --}}
 {!! Form::label('meta_description', 'Meta Description', ['class'=>'mt-2']) !!} <br>
 {!! Form::text('meta_description', null, ['class' => 'form-control', 'placeholder' => 'Add Meta Description', 'maxlength' => '140']) !!}
 
 