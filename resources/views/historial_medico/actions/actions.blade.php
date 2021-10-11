    {{-- Botón para mostrar cita registrada en una vista según el id --}}    
    <a href="{{ route('historial_medico.show', $id) }}"
        class="btn btn-info btn-sm"><i
        class="material-icons">description</i></a>

    {{-- <a href="{{ route('historial_medico.edit', $id) }}"
    class="btn btn-warning btn-sm"><i
    class="material-icons">edit</i></a> --}}

    {{-- Botón para mostrar cita registrada en un PDF según el id --}}    
    <a href="{{ route('verCita.pdf', $id) }}" class="btn btn-primary"><i
        class="material-icons">picture_as_pdf</i></a>

    {{-- Botón para descargar cita registrada en un PDF según el id --}}    
    <a href="{{ route('cita.pdf-download', $id) }}" class="btn btn-primary"><i
        class="material-icons">download</i></a>

    {{-- Botón para eliminar una cita registrada en uan vista según el id --}}    
<form action="{{ route('historial_medico.destroy', $id) }}"
    method="POST" style="display: inline-block;"
    onsubmit="return confirm('¿Estas seguro de eliminar esta cita?')">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger btn-sm" type="submit" rel="tooltip">
        <i class="material-icons">close</i>
    </button>
</form>

