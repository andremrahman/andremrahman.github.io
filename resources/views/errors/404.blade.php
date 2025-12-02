<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>404 | Halaman Tidak Ditemukan</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: oklch(12.9% 0.042 264.695);
      color: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      overflow-x: hidden;
    }

    .error-container {
      text-align: center;
      padding: 30px;
      background: oklch(27.9% 0.041 260.031);
      border-radius: 12px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
      max-width: 500px;
      width: 90%;
      transition: transform 0.3s ease;
    }

    .error-container:hover {
      transform: translateY(-5px);
    }

    .error-code {
      font-size: 8em;
      font-weight: 900;
      color: #dc3545;
      /* Warna Merah */
      margin-bottom: 5px;
      line-height: 1;
    }

    .error-message {
      font-size: 1.8em;
      font-weight: bold;
      margin-bottom: 20px;
      border-bottom: 2px solid #eee;
      padding-bottom: 10px;
    }

    .error-description {
      font-size: 1.1em;
      margin-bottom: 30px;
    }

    .home-button {
      display: inline-block;
      padding: 12px 25px;
      font-size: 1em;
      font-weight: bold;
      color: #ffffff;
      background-color: #007bff;
      /* Warna Biru */
      text-decoration: none;
      border-radius: 8px;
      transition: background-color 0.3s ease, transform 0.1s ease;
      box-shadow: 0 4px 6px rgba(0, 123, 255, 0.3);
    }

    .home-button:hover {
      background-color: #0056b3;
      transform: translateY(-1px);
    }
  </style>
</head>

<body>

  <div class="error-container">
    <div class="error-code">404</div>

    <div class="error-message">
      Page Not Found!
    </div>

    <p class="error-description">
      Sorry, but the page you are looking for may have been deleted, renamed, or the URL may be invalid.
    </p>

    <a href="{{ route('home') }}" class="home-button">
      &#x2190; Back to Home
    </a>
  </div>

</body>

</html>
