<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="The small framework with powerful features">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CI4</title>

  <link rel="shortcut icon" href="<?= base_url('public/favicon.ico') ?>" type="image/x-icon">
  <link rel="stylesheet" href="<?= base_url('public/css/bootstrap.css') ?>">

  <script src="<?= base_url('public/js/bootstrap.js') ?>" type="module"></script>

</head>

<body>

  @include('partials.navbar')

  @yield('content')

</body>

</html>
