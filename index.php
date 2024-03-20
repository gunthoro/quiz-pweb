<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quiz1guntoro</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <h1>Kuiz 1</h1>
  <p>Nama : FAHRYAN ARIF GUNTORO</p>
  <p>NIM  : 12250113102</p>
  <div class="container">
    <div class="image">
      <img src="model rog3.png" alt="Gambar 1">
      <button class="detail-btn" onclick="changeBackground(this)">Detail</button>
    </div>
    <div class="image">
      <img src="model rog4.png" alt="Gambar 2">
      <button class="detail-btn" onclick="changeBackground(this)">Detail</button>
    </div>
    <div class="image">
      <img src="model rog5.png" alt="Gambar 3">
      <button class="detail-btn" onclick="changeBackground(this)">Detail</button>
    </div>
  </div>

  <script>
    function changeBackground(button) {
      // Generate random color in hexadecimal format
      var randomColor = "#" + Math.floor(Math.random()*16777215).toString(16);
      button.style.backgroundColor = randomColor; // Set random background color to the clicked button
    }
  </script>
</body>
</html>