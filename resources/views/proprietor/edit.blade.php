<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Annonce</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        form {
            width: 50%;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input, textarea {
            width: 100%;
            padding: 5px;
            margin-bottom: 5px;
        }

        button {
            width: 100%;
            padding: 5px;
            background-color: #000;
            color: #fff;
            border: none;
        }
    </style>
</head>
<body>
    <h1>Edit Annonce</h1>

    <form action="{{ route('annonces.update', $annonce->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="title">Title</label>
        <input type="text" name="title" value="{{ $annonce->title }}">

        <label for="description">Description</label>
        <textarea name="description">{{ $annonce->description }}</textarea>

        <label for="type">Type</label>
        <select name="type">
            <option value="sale" {{ $annonce->type == 'sale' ? 'selected' : '' }}>Sale</option>
            <option value="location" {{ $annonce->type == 'location' ? 'selected' : '' }}>Location</option>
        </select>

        <label for="prix">Prix</label>
        <input type="number" name="prix" value="{{ $annonce->prix }}">

        <button type="submit">Update</button>
    </form>
</body>
</html>