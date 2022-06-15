<div class="table-responsive">
    <table class="table table-striped table-bordered" id="example" style="width:100%">
        <thead>
        <tr>
        <th>#ID</th>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Valor</th>
        <th>Duração</th>
        <th colspan="3"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($projects as $project)
            <tr>
            <td>{{ $project->id }}</td>
            <td>{{ $project->name }}</td>
            <td>{{ $project->description }}</td>
            <td>{{ $project->buy }}</td>
            <td>{{ $project->duration }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['projects.destroy', $project->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('projects.show', [$project->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('projects.edit', [$project->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Realmente deseja excluir?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>