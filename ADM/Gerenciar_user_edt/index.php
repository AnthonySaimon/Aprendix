 <?php
    include '../protocolo/protocolo.php';
    $id = $_POST['id'];
    $manager = new protocolo();
    ?>

 <!DOCTYPE html>
 <html>

 <head>
     <meta charset='utf-8'>
     <meta http-equiv='X-UA-Compatible' content='IE=edge'>
     <title>Aprendix</title>
     <meta name='viewport' content='width=device-width, initial-scale=1'>     
     <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
     <link rel='stylesheet' type='text/css' media='screen' href='main2.css'>
     <link rel="shortcut icon" href="../../imagem/Logo-aprendix.png" type="image/ico" />

     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Kodchasan:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

 </head>

 <body>

     <nav class="menu-nav">

         <a href="../index.html">
             <div class="menutoggle"></div>
         </a>

         <div class="perfil">
             <h3>Usuario <br><samp>aaaaa</samp></h3>
             <div class="imgcx">
                 <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT9Etrj7SYknitFM3_TL7O2S1YoU7yswbXBLQ&s" alt="...">
             </div>
         </div>
         <div class="menu">
             <ul>
                 <li>
                     <a href="../Gerenciar_user/index.php">
                         <ion-icon name="body-outline"></ion-icon>
                         Gerenciar Usuario
                     </a>
                 </li>

                 <li>
                     <a href="">
                         <ion-icon name="chatbox-ellipses-outline"></ion-icon>
                         Adiministra Chat
                     </a>
                 </li>

                 <li>
                     <a href="../../configuracao/index.html">
                         <ion-icon name="settings-outline"></ion-icon>
                         Comfiguração
                     </a>
                 </li>

                 <li>
                     <a href="../../index.php">
                         <ion-icon name="log-out-outline"></ion-icon>
                         Deslogar
                     </a>
                 </li>

             </ul>
         </div>
     </nav>

     <form action="../protocolo/userUP.php" class="aba1">
         <div class="lado1">
             <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT9Etrj7SYknitFM3_TL7O2S1YoU7yswbXBLQ&s" alt="">
         </div>

         <div class="lado2">
             <?php foreach ($manager->list_client_by_id($id) as $data) : ?>
                <input  class="input-style" value="<?= $data['id'] ?>" disabled>

                 <input placeholder="Nome" class="input-style" type="text" value="<?= $data['nome'] ?>">

                 <input placeholder="SobreNome" class="input-style" type="text" value="<?= $data['sobrenome'] ?>">

            <input placeholder=" Email" class="input-style" type="email" value="<?= $data['email'] ?>">
            <input  class="input-style" value="<?= $data['senha'] ?>" disabled>

            <input list=" browsers" name="browser" class="input-style" value="<?= $data['permissao'] ?>">
            <datalist id=" browsers">

                 <option value="ADM">
                 <option value="Use Free">
                 <option value="Use Premium">

                     </datalist>

                     <div>
                         <button class="input-style">atualizar</button>
                         <a class="input-style" href="../Gerenciar_user/index.php">Canselar</a>
                     </div>
                 <?php endforeach; ?>
         </div>

     </form>

 </body>
 <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
 <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
 <script src='../../home/main.js'></script>


 </html>