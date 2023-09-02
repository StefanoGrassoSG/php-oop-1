<?php
    require_once __DIR__.'/classes/movie.php';
    require_once __DIR__.'/database/db.php';

    $movies = [];

    foreach($moviesData as $data) {
        $title = $data['title'];
        $releaseData = $data['release'];
        $vote = $data['vote'];
        $director = $data['director'];
        $genre = $data['genre'];
        $avaiable = $data['avaiable'];

        $movie = new movie($title, $releaseData, $vote, $director, $genre, $avaiable);
        $movies[] = $movie;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
    <body>
        <div id="app" class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Release</th>
                        <th scope="col">Vote</th>
                        <th scope="col">Director</th>
                        <th scope="col">Genre</th>
                        <th scope="col">Avaiable</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach($movies as $single) {
                        echo '<tr>';
                        echo    '<td>' . $single->getTitle() . '</td>';
                        echo    '<td>' . $single->getRelease() . '</td>';
                        echo    '<td>' . $single->getVote() . '</td>';
                        echo    '<td>' . $single->getDirector() . '</td>';
                        echo '<td>' . implode(', ', $single->getGenre()) . '</td>';
                        echo    '<td>' . ($single->getAvaiable() ? 'yes' : 'no') . '</td>';
                        echo '</tr>';
                    };
                    ?>
                </tbody>
            </table>

        </div>
        <script src="/script.js"></script>
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    </body>
</html>