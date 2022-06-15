<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $project->name }}</p>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $project->description }}</p>
</div>

<!-- Buy Field -->
<div class="col-sm-12">
    {!! Form::label('buy', 'Buy:') !!}
    <p>{{ $project->buy }}</p>
</div>

<!-- Duration Field -->
<div class="col-sm-12">
    {!! Form::label('duration', 'Duration:') !!}
    <p>{{ $project->duration }}</p>
</div>

<!-- Participant Field -->
<div class="col-sm-12">
    {!! Form::label('participant', 'Participant:') !!}
    <p>{{ $project->participant }}</p>
</div>

