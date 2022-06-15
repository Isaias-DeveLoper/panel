<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Buy Field -->
<div class="form-group col-sm-6">
    {!! Form::label('buy', 'Buy:') !!}
    {!! Form::text('buy', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Duration Field -->
<div class="form-group col-sm-6">
    {!! Form::label('duration', 'Duration:') !!}
    {!! Form::text('duration', null, ['class' => 'form-control','id'=>'duration']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#duration').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Participant Field -->
<div class="form-group col-sm-6">
    {!! Form::label('participant', 'Participant:') !!}
    {!! Form::text('participant', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>