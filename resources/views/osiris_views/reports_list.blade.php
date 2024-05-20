<table id="example" class="table table-striped table-bordered">

    <thead>
        <tr>
            <th>Employe</th>
            <th>Nom du fichier</th>
            <th>Fichier</th>
            <th>Categorie</th>
            <th>Voir</th>
        </tr>
    </thead>

    <tbody>
        @foreach($file as $donneesItem)
            <tr>
                <td>{{ $donneesItem->employee_name }}</td>
                <td>{{ $donneesItem->file_name }}</td>
                <td>{{ $donneesItem->file }}</td>
                <td>{{ $donneesItem->service->libelle_service}}</td>
                <td>
                    <a class="btn btn-sm" href="{{ route('voir', ['id' => $donneesItem->id]) }}">
                        <i class="fas fa-eye" style="color: yellow"></i>
                        <span>Voir</span>
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>

</table>

<script>
    $(document).ready(function () {
        $('#example').DataTable({
            paging: true
        });
    });
</script>
