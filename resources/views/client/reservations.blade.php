<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQh58iYOTvQjFjX3eCL12N1f2U26tlKXkSU42BLT59T897727q8dEh2w" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Client Dashboard</h1>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <h2>Rechercher une annonce</h2>
                        <form action="{{ route('route.search') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="pickup_city">Ville de départ</label>
                                <select name="pickup_city" id="pickup_city" class="form-control">
                                    @foreach ($cities as $city)
                                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="destination_city">Ville d'arrivée</label>
                                <select name="destination_city" id="destination_city" class="form-control">
                                    @foreach ($cities as $city)
                                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="date">Date</label>
                                <input type="date" name="date" id="date" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Rechercher</button>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <h2>Mes annonces</h2>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Titre</th>
                                    <th>Description</th>
                                    <th>Type</th>
                                    <th>Prix</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($annonces as $annonce)
                                    <tr>
                                        <td>{{ $annonce->title }}</td>
                                        <td>{{ $annonce->description }}</td>
                                        <td>{{ $annonce->type }}</td>
                                        <td>{{ $annonce->prix }} €</td>
                                        <td>
                                            <a href="{{ route('annonces.show', $annonce->id) }}" class="btn btn-primary">Voir</a>
                                            <a href="{{ route('reservations.create', $annonce->id) }}" class="btn btn-success">Réserver</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7I1v4fUdzKCImxNV2R0h9ZXao3oLmWen" crossorigin="anonymous"></script>
</body>
</html>