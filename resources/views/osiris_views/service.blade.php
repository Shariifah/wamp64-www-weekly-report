<form action="{{ route('service') }}" method="post">
    @csrf
    <h2>Formulaire de Création de Service</h2>

    <label for="libelle_service" style="font-weight: bolder">Libelle du service: </label>
    <input type="text" id="libelle_service" name="libelle_service" required>

    <button type="submit">Ajouter le service</button>
</form>
