<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informations d'enregistrement</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; border-radius: 8px; }
        .header { background-color: #007bff; color: #fff; padding: 10px; text-align: center; border-radius: 8px 8px 0 0; }
        .content { padding: 20px; }
        .footer { text-align: center; font-size: 12px; color: #666; margin-top: 20px; }
        .label { font-weight: bold; }
        .value { margin-bottom: 10px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Informations d'enregistrement</h1>
        </div>
        <div class="content">
            <p><span class="label">Nom :</span> {{ $data['nom'] }}</p>
            <p><span class="label">Date :</span> {{ $data['date'] }}</p>
            <p><span class="label">Téléphone :</span> {{ $data['telephone'] }}</p>
            <p><span class="label">Email :</span> {{ $data['email'] }}</p>
            <p><span class="label">Secteur d'activité :</span> {{ $data['secteur_activite'] }}</p>
            <p><span class="label">Code postal :</span> {{ $data['code_postal'] }}</p>
            <p><span class="label">Ville :</span> {{ $data['ville'] }}</p>
            <p><span class="label">Pays :</span> {{ $data['pays'] }}</p>
            <p><span class="label">Commentaire :</span> {{ $data['commentaire'] ?? 'Aucun' }}</p>
            <p><span class="label">Certifié majeur :</span> {{ $data['certifie_majeur'] ? 'Oui' : 'Non' }}</p>
        </div>
        <div class="footer">
            <p>&copy; {{ date('Y') }} Votre entreprise. Tous droits réservés.</p>
        </div>
    </div>
</body>
</html>
