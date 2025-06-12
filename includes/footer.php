    </div>
  </main>

  <footer class="bg-dark text-white text-center py-3 mt-auto">
    <div class="container">
      <p class="mb-0">© <?= date("Y") ?> MiTienda. Todos los derechos reservados.</p>
    </div>
  </footer>

  <script>
    const API_BASE = "<?= getEnvVariable('API_BASE_URL') ?>";
  </script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>
