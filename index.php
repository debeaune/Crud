<!DOCTYPE html>

<html lang="FR">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE-Edge">
        <Title>Crud</title>
        <meta name="viewport" content="width-device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="index.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <header>
                <h1>
                    <img src="https://www.wildcodeschool.com/assets/logo_main-e4f3f744c8e717f1b7df3858dce55a86c63d4766d5d9a7f454250145f097c2fe.png" alt="Wild Code School logo" />
                    Les Argonautes
                </h1>
            </header>
            <main>
            <h2>Ajouter un(e) Argonaute</h2>
            <br>
            <form action="Members.php" method="post" class="new-member-form">
                <label for="name">Nom de l'Argonaute</label>
                <br>
                <input name="name" type="text" class="form-control" placeholder="Charalampos" />
                <br>
                <button type="submit" class="btn btn-primary" name="bouton_valider" value="valider">Envoyer</button>
            </form>
            <br>
            <h2>Membres de l'équipage</h2>
                <section class="member-list">
                    <div class="member-item">
                        <?php
                        require_once('Members.php');
                        $members = New Members();
                        $datas = $members->getMembers();
                        
                        foreach ($datas as $data) {
                            echo $data['name'];
                        }

                        ?>
                    </div>
                    </section>
                </main>
            <footer>
                <p>Réalisé par Jason en Anthestérion de l'an 515 avant JC</p>
            </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    </body>
</html>