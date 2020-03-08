<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script src="/homepage/js/common.js"></script>
  <link rel="stylesheet" href="/homepage/css/styles.css">
  <title>Struts2_index</title>
</head>
<?php
  $result = glob('./contents/*.html');
?>
<body class="bg-body">
  <div class="bg-contents-ounter px-50 py-50">
    <h1>Struts2目次</h1>
    <div class="bg-contents-inner region-contents-inner">
      <ol>
        <?php
          foreach($result as $filename) {
            $title = basename($filename,'.html');
            echo("<li><a href='$filename'>$title</a></li>");
          }
        ?>
      </ol>
    </div>
  </div>
  <footer>
    <script>loadFooter()</script>
  </footer>
</body>
</html>