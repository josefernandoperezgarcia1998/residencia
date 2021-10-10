<a href="{{ route('historial_medico.show', $id) }}"
    class="btn btn-info btn-sm"><i
        class="material-icons">description</i></a>
{{-- <a href="{{ route('historial_medico.edit', $id) }}"
    class="btn btn-warning btn-sm"><i
        class="material-icons">edit</i></a> --}}
<form action="{{ route('historial_medico.destroy', $id) }}"
    method="POST" style="display: inline-block;"
    onsubmit="return confirm('¿Estas seguro de eliminar esta cita?')">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger btn-sm" type="submit" rel="tooltip">
        <i class="material-icons">close</i>
    </button>
</form>

