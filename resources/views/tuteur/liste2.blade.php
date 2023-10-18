<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>TP-3-LARAVEL</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>
    <body>
        <div class="container text-center">
            <div class="row">
                <div class="col s12">
                    <h1>TP-3-LARAVEL</h1>
                    <hr/>
                    <a href="/ajouter2" class="btn btn-primary"
                        >Ajuter un tuteur</a>
                    <hr/>
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session("status") }}
                    </div>
                    @endif
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>etudiant</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                             @foreach ($tuteurs as $tuteur)
                            <tr>
                                <td>{{ $tuteur->id }}</td>
                                <td>{{ $tuteur->nom }}</td>
                                <td>{{ $tuteur->prenom }}</td>
                                <td>
                                @foreach($tuteur->etudiants as $etudiant)
                                 
                               {{ $etudiant->nom }}   {{ $etudiant->prenom }} <br>
                                @endforeach
                            </td>
                                <td>
                                    <a
                                        href="/update-tuteur/{{ $tuteur->id }}"
                                        class="btn btn-info"
                                        >Update</a
                                    >
                                    <a
                                        href="/delete-tuteur/{{ $tuteur->id }}"
                                        class="btn btn-danger"
                                        >Delete</a
                                    >
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
