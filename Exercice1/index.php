<!--

Correcteur: Yannick GOUGUIA

tu ne peux pas inclure encore une partie du html dans le html.

Dans le header.php. il faut mettre ceci
 ===========
<!DOCTYPE html>
<html>
<head>
  <title>Header</title>
</head>
<body>
  <header>
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
  </header>
<main>
=============

dans le footer

=============
   </main>
    <footer>
       <p>Copyright © 2023</p>
    </footer>
</body>
</html>



      </main>
      <?php include 'footer.php'; ?>
    </body>
</html>

=============

-->



<!DOCTYPE html>
<html>
    <head>
      <title>Index Page</title>
    </head>
    <body>
      <?php include 'header.php'; ?>
      <main>
        <h1>Welcome to my website</h1>
        <p>This is the index page.</p>
      </main>
      <?php include 'footer.php'; ?>
    </body>
</html>
