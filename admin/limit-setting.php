<?php include("common/header-sidebar.php")?>
<?php include("common/setting-sidebar.php")?>

        <div class="w-full space-y-10 p-6 lg:p-12 bg-white border border-gray-200 rounded">
          <form class="grid grid-cols-2 gap-y-6 gap-x-12">
            <div class="col-span-2">
              <h2 class="text-xl font-semibold text-cyan-800">Withdraw Limit</h2>
            </div>
            <div class="flex flex-col gap-y-1">
              <label for="Minimum Withdraw">Minimum Withdraw</label>
              <input class="input" id="Minimum Withdraw" placeholder="Minimum Withdraw" required>
            </div>

            <div class="col-span-2 flex justify-start">
              <div class="w-fit">
                <button class="button">Submit</button>
              </div>
            </div>
          </form>
          <hr class="my-6" />

          <form class="grid grid-cols-2 gap-y-6 gap-x-12">
            <div class="col-span-2">
              <h2 class="text-xl font-semibold text-cyan-800">Deposit Limit</h2>
            </div>
            <div class="flex flex-col gap-y-1">
              <label for="Minimum Deposit">Minimum Deposit</label>
              <input class="input" id="Minimum Deposit" placeholder="Minimum Deposit" required>
            </div>

            <div class="col-span-2 flex justify-start">
              <div class="w-fit">
                <button class="button">Submit</button>
              </div>
            </div>
          </form>


        </div>
      </div>
  </main>

  <script src="js/app.js"></script>
</body>

</html>