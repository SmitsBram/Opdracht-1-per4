<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Document</title>
</head>
<body>
    <h2><?= $data['title']; ?></h3>
    <h3><?= $data['aantal']; ?></h3>
  
    <table border="1">
        <thead>
            <th>Id</th>
            <th>Voornaam</th>
            <th>Tussenvoegsel</th>
            <th>Achternaam</th>
            <th>Mobiel</th>
            <th>DatumInDienst</th>
            <th>AantalSterren</th>
            <th>Voertuigen</th>
        </thead>
        <tbody>
    	    <?= $data['rows']; ?>
        </tbody>
    </table>

    <script>
        // Voeg een click event listener toe aan alle voertuig iconen
        const icons = document.querySelectorAll('.voertuig-icon');
        icons.forEach(icon => {
            icon.addEventListener('click', () => {
                const id = icon.getAttribute('data-id');
                window.location.href = `/voertuig/${id}`; // ga naar de URL met het ID
            });
        });
    </script>

</body>
</html>
