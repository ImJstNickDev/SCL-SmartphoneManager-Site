<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smartphone Manager</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div id="header">
        <nav role="navigation">
            <div id="menuToggle">

              <input type="checkbox" />

              <span></span>
              <span></span>
              <span></span>

              <ul id="menu">
                <a href="#"><li>Home</li></a>
                <a href="inserimento.php"><li>Aggiungi Smartphone</li></a>
                <a href="#"><li>Elimina Smartphone</li></a>
                <a href="#"><li>Modifica Smartphone</li></a>
                <a href="#"><li>Cerca Smartphone</li></a>
                <a href="#"><li>Lista Smartphone</li></a>
                <a href="www.loser.com" target="_blank"><li>Show me more</li></a>
              </ul>
            </div>
          </nav>
          <center><h1>Gestione Smartphone</h1></center>
    </div>
    <div id="pagina">
        <div class="container">
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <div class="cardicon">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAABmJLR0QA/wD/AP+gvaeTAAACbUlEQVR4nO3dMVIUURSF4V8UUhJDTWEBugDZAGIhsCSQMsOEGIrMQBegC9BYLQVCyCiKmQASMOgxc/o19L19uqfOV3Ujah6v3z/NAEmDmZlZrgVgCzgCfgFj4K5nM57s7QjYnOx5JqwDJ+gP+L5zDLxJOI/OPAbeoz/ItrMLzAWfTSdm4fD/zbvgs0m3jv7Qomct9IQSLVD9/FQfWPScMpAP5i30h5U1G4HnBOR8uAzmVn2A19ELZgR4Ufj6oymzkrCX/7kBntfso87L3K3FGFF/G9f5WnhtxHwo7KHutaPi1fdA6QDqvGrw+jZzDTxL3H8vtL2AzLug9O6P2L9c2wvIuguavPsj9i8XcQFfGqxz39nrcP9SERewDFw2WKvp/AEWO9y/VNQFLAMfgYsGa06bc2AfeCrYfyOl33sforTJjO8ZqdP9D/LfrLPEAcQcQMwBxBxAzAHEHEDMAcQcQMwBxBxAzAHEHEDMAcQcQMwBxBxAzAHEHEDMAcQcQMwBxBxAzAHEHEDMAcQcQMwBxBxAzAHEHEDMAcQcQMwBxBxAzAHEHEDMAcQcQMwBxBxAzAHEHEDMAcQcQMwBxBxAzAHEHEDMAcQcQMwBxBxAzAHEHEDMAcQcQMwBxBxAzAHEHEAsI8A4Yc2+uIpeMCPAWcKafRF+bU+iFwS+A0s1Xx/EUyim+Ba9YMYd8Clhzb74rN5AE/NUz2yJfgiPek4YyMM8oXoStfrAIucWWA09oQ7soj+4qNkOPptOzFE9iVp9eG3f+TsM/O+lNYb5mfCbhMfXqsxTPQz5EPhJ+YmrihkBP4AD4O1kz2ZmZmn+AmmXlw2FxcfqAAAAAElFTkSuQmCC"/>
                        </div>
                        <h3>Lista Telefoni</h3>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                        <p>Telefoni Presenti: %PHNQTY%</p>
                            <a href="visualizza.php">Visualizza</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <div class="cardicon">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAABmJLR0QA/wD/AP+gvaeTAAACbUlEQVR4nO3dMVIUURSF4V8UUhJDTWEBugDZAGIhsCSQMsOEGIrMQBegC9BYLQVCyCiKmQASMOgxc/o19L19uqfOV3Ujah6v3z/NAEmDmZlZrgVgCzgCfgFj4K5nM57s7QjYnOx5JqwDJ+gP+L5zDLxJOI/OPAbeoz/ItrMLzAWfTSdm4fD/zbvgs0m3jv7Qomct9IQSLVD9/FQfWPScMpAP5i30h5U1G4HnBOR8uAzmVn2A19ELZgR4Ufj6oymzkrCX/7kBntfso87L3K3FGFF/G9f5WnhtxHwo7KHutaPi1fdA6QDqvGrw+jZzDTxL3H8vtL2AzLug9O6P2L9c2wvIuguavPsj9i8XcQFfGqxz39nrcP9SERewDFw2WKvp/AEWO9y/VNQFLAMfgYsGa06bc2AfeCrYfyOl33sforTJjO8ZqdP9D/LfrLPEAcQcQMwBxBxAzAHEHEDMAcQcQMwBxBxAzAHEHEDMAcQcQMwBxBxAzAHEHEDMAcQcQMwBxBxAzAHEHEDMAcQcQMwBxBxAzAHEHEDMAcQcQMwBxBxAzAHEHEDMAcQcQMwBxBxAzAHEHEDMAcQcQMwBxBxAzAHEHEDMAcQcQMwBxBxAzAHEHEDMAcQcQMwBxBxAzAHEHEAsI8A4Yc2+uIpeMCPAWcKafRF+bU+iFwS+A0s1Xx/EUyim+Ba9YMYd8Clhzb74rN5AE/NUz2yJfgiPek4YyMM8oXoStfrAIucWWA09oQ7soj+4qNkOPptOzFE9iVp9eG3f+TsM/O+lNYb5mfCbhMfXqsxTPQz5EPhJ+YmrihkBP4AD4O1kz2ZmZmn+AmmXlw2FxcfqAAAAAElFTkSuQmCC"/>
                        </div>
                        <h3>Code</h3>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                        <p>lol immagina aggiungere del testo qui dentro</p>
                            <a href="#">%RDM%</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <div class="cardicon">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAABmJLR0QA/wD/AP+gvaeTAAACbUlEQVR4nO3dMVIUURSF4V8UUhJDTWEBugDZAGIhsCSQMsOEGIrMQBegC9BYLQVCyCiKmQASMOgxc/o19L19uqfOV3Ujah6v3z/NAEmDmZlZrgVgCzgCfgFj4K5nM57s7QjYnOx5JqwDJ+gP+L5zDLxJOI/OPAbeoz/ItrMLzAWfTSdm4fD/zbvgs0m3jv7Qomct9IQSLVD9/FQfWPScMpAP5i30h5U1G4HnBOR8uAzmVn2A19ELZgR4Ufj6oymzkrCX/7kBntfso87L3K3FGFF/G9f5WnhtxHwo7KHutaPi1fdA6QDqvGrw+jZzDTxL3H8vtL2AzLug9O6P2L9c2wvIuguavPsj9i8XcQFfGqxz39nrcP9SERewDFw2WKvp/AEWO9y/VNQFLAMfgYsGa06bc2AfeCrYfyOl33sforTJjO8ZqdP9D/LfrLPEAcQcQMwBxBxAzAHEHEDMAcQcQMwBxBxAzAHEHEDMAcQcQMwBxBxAzAHEHEDMAcQcQMwBxBxAzAHEHEDMAcQcQMwBxBxAzAHEHEDMAcQcQMwBxBxAzAHEHEDMAcQcQMwBxBxAzAHEHEDMAcQcQMwBxBxAzAHEHEDMAcQcQMwBxBxAzAHEHEDMAcQcQMwBxBxAzAHEHEAsI8A4Yc2+uIpeMCPAWcKafRF+bU+iFwS+A0s1Xx/EUyim+Ba9YMYd8Clhzb74rN5AE/NUz2yJfgiPek4YyMM8oXoStfrAIucWWA09oQ7soj+4qNkOPptOzFE9iVp9eG3f+TsM/O+lNYb5mfCbhMfXqsxTPQz5EPhJ+YmrihkBP4AD4O1kz2ZmZmn+AmmXlw2FxcfqAAAAAElFTkSuQmCC"/>
                        </div>
                        <h3>Cringe zi</h3>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                        <p>Lol Lmao</p>
                            <a href="http://www.loser.com" target="_blank">Immagina fare schifo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="footer">
    </div>
</body>
</html>