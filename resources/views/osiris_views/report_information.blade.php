<body>

    <div class="form-container">
        <div style="display: flex; flex-direction: column;">
            <label for="projet">Employe:</label>
            <input type="text" id="projet" name="projet" value="{{ $file->employee_name }}" readonly style="border: none">
        </div>

        <div style="display: flex; flex-direction: column;">
            <label for="projet">Nom du fichier:</label>
            <input type="text" id="projet" name="projet" value="{{ $file->file_name }}" readonly style="border: none">
        </div>

        <div style="display: flex; flex-direction: column;">
            <label for="projet">Fichier:</label>
            @if ($file->file)
                <a href="{{ asset('storage/' . $file->file) }}" download="{{ $file->file }}">Télécharger le fichier</a>
            @endif
        </div>

        <div style="display: flex; flex-direction: column;">
            <label for="projet">Date import rapport: </label>
            <input type="text" id="created_at" name="created_at" value="{{ $file->created_at->format('d/m/Y') }}" readonly style="border: none">
        </div>
    </div>


</body>
