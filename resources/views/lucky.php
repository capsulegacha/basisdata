<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Full Screen GIF</title>
    <style>
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: black;
        }
        img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }
    </style>
    <script>
        window.onload = function() {
            // Array of GIF URLs
            var gifs = [
                'https://media.tenor.com/GS3glUNc6-YAAAAM/dice.gif',
                'https://media2.giphy.com/media/qmjZjcZZPAfdX0YgEP/200w.gif?cid=6c09b952ukxjjo18zviv8okg7lvy7ydihv13wkw25m1lhwmh&ep=v1_gifs_search&rid=200w.gif&ct=g',
                'https://media2.giphy.com/media/oOBTO2UcSoaBJewZT0/200w.gif?cid=6c09b952xdmtoxfrkickv4dmxm8l74t5ahipr853r2pdb8qb&ep=v1_gifs_search&rid=200w.gif&ct=g'
            ];

            // Select a random GIF
            var randomGif = gifs[Math.floor(Math.random() * gifs.length)];

            // Set the src of the image element
            document.getElementById('randomGif').src = randomGif;
        };
    </script>
</head>
<body>
    <img id="randomGif" alt="Random GIF">
</body>
</html>
