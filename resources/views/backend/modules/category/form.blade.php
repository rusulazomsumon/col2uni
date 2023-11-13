 <!-- Name -->
 {!! Form::label('name', 'Name') !!}
 {!! Form::text('name', null, ['id'=>'name','class'=>'form-control from-control-sm']) !!}
 <!-- Slug -->
 {!! Form::label('slug', 'Slug') !!}
 {!! Form::text('slug',  null, ['id'=>'slug','class'=>'form-control from-control-sm']) !!}
 <!-- Order by -->
 {!! Form::label('order_by', 'Order By') !!}
 {!! Form::number('order_by',  null, ['class'=>'form-control from-control-sm']) !!}
 <!-- Active Status -->
 {!! Form::label('status', 'Status') !!}
 {!! Form::select('status',  [1=>'Active', 0=>'Inactive'],null, ['class'=>'form-select from-control-sm']) !!}
 