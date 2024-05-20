@section('content')
<form action="{{ route('fichier') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}

    <p>
        <label for="employee_name">Nom employee: </label>
        <input type="text" id="employee_name" name="employee_name">
    </p>

    <p>
        <label for="nom_projet">Nom du fichier: </label>
        <input type="text" id="file_name" name="file_name">
    </p>

    <p>
        <label for="fichier">Fichier à importer:</label>
        <input type="file" name="file" id="file" accept=".xls, .xlsx, .pptx, .pdf">
    </p>

    <label for="service_id">Service:</label>
    <select id="service_id" name="service_id">
        @foreach($service as $services)
            <option value="{{ $services->id }}">{{ $services->libelle_service }}</option>
        @endforeach
    </select>

    <button type="submit">Importer le rapport</button>

</form>
