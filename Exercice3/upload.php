<?php

  if (isset($_FILES['file'])) {

      $file = $_FILES['file'];

      // Propriétés du fichier
      $file_name = $file['name'];
      $file_tmp = $file['tmp_name'];
      $file_size = $file['size'];
      $file_error = $file['error'];

      // Extension de fichier
      $file_ext = explode('.', $file_name);
      $file_ext = strtolower(end($file_ext));

       // Types de fichiers autorisés
       $allowed = array('pdf');

      // Vérifiez si le fichier téléchargé est un PDF
      if (in_array($file_ext, $allowed)) {

          // Vérifier les erreurs de téléchargement
          if ($file_error === 0) {

              // Dossier de destination
              $file_destination = 'uploads/' . $file_name;

              // Déplacez le fichier téléchargé du répertoire temporaire vers la destination souhaitée.
              if (move_uploaded_file($file_tmp, $file_destination)) {
                 echo "The file " . $file_name . " has been uploaded successfully.";
                } else {
                 echo "There was an error uploading the file.";
                }

            } else {
             echo "There was an error uploading the file.";
            }

        } else {
          echo "The file type is not allowed. Only PDF files are allowed.";
        }

    }

?>
