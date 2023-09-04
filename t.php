<!DOCTYPE html>
<html>
<head>
  <title>Adhunik Krishi Homepage</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
</head>
<body>
  <header class="bg-gray-900 text-white">
    <div class="container mx-auto flex justify-between items-center">
      <a href="/" class="logo">
        <img src="adhunikkrishilogo.PNG" alt="Adhunik Krishi Logo">
      </a>
      <nav class="space-x-4">
        <a href="seeds.php" class="text-white hover:text-gray-300">Seeds</a>
        <a href="agricultureTools.php" class="text-white hover:text-gray-300">Tools</a>
        <a href="experts.php" class="text-white hover:text-gray-300">Experts</a>
        <a href="DiseaseDiagnosis.php" class="text-white hover:text-gray-300">Disease Diagnosis</a>
      </nav>
      <div class="user-profile">
        <img src="https://upload.wikimedia.org/wikipedia.org/commons/9/99/Sample_User_Icon.png" alt="User Icon">
        <div class="user-dropdown">
          <a href="login.php">Login</a>
          <a href="logout.php">Logout</a>
          <a href="register.php">Register</a>
        </div>
      </div>
    </div>
  </header>

  <main class="py-10">
    <section class="container mx-auto">
      <h1 class="text-3xl text-center">Welcome, Farmer!</h1>
      <p class="text-center">Get access to genuine seeds, tools, expert advice, and disease diagnosis.</p>
    </section>

    <section class="container mx-auto mt-5">
      <div class="row">
        <div class="col-md-4">
          <img src="seeds.png" alt="Seeds" class="w-100">
          <h2 class="text-center mt-4">Seeds</h2>
          <p class="text-center">Find the right seeds for your crops.</p>
          <a href="seeds.php" class="btn btn-primary">Shop Now</a>
        </div>
        <div class="col-md-4">
          <img src="agricultureTools.png" alt="Agriculture Tools" class="w-100">
          <h2 class="text-center mt-4">Agriculture Tools</h2>
          <p class="text-center">Buy high-quality agricultural tools.</p>
          <a href="agricultureTools.php" class="btn btn-primary">Shop Now</a>
        </div>
        <div class="col-md-4">
          <img src="experts.png" alt="Experts" class="w-100">
          <h2 class="text-center mt-4">Experts</h2>
          <p class="text-center">Connect with agricultural experts.</p>
          <a href="experts.php" class="btn btn-primary">Connect Now</a>
        </div>
      </div>
    </section>
  </main>

  <footer class="bg-gray-900 text-white py-5">
    <div class="container mx-auto text-center">
      <p>&copy; 2023 Adhunik Krishi. All rights reserved.</p>
    </div>
  </footer>
</body>
</html>