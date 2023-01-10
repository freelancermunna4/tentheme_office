<?php include("common/header-sidebar.php")?>
<?php include("common/setting-sidebar.php")?>

        <div class="w-full space-y-10 p-6 lg:p-12 bg-white border border-gray-200 rounded">

          <form class="grid grid-cols-2 gap-y-8 gap-x-12">
            <div class="col-span-2">
              <h2 class="text-xl font-semibold text-cyan-800">Mailing System</h2>
            </div>


            <div class="col-span-2 lg:col-span-1col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="mail_delivery_method">Mail delivery method</label>
              <select class="select" name="" id="mail_delivery_method" required>
                <option value="PHP Mail">PHP Mail</option>
                <option value="SMTP">SMTP</option>
              </select>
            </div>


            <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="SMTP Host">SMTP Host</label>
              <input class="input" type="text" id="SMTP Host" placeholder="SMTP Host" required>
            </div>


            <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="SMTP Port">SMTP Port</label>
              <input class="input" type="text" id="SMTP Port" placeholder="SMTP Port" required>
            </div>

            <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="SMTP Username">SMTP Username</label>
              <input class="input" type="text" id="SMTP Username" placeholder="SMTP Username" required>
            </div>

            <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="SMPT Password">SMPT Password</label>
              <input class="input" type="text" id="SMPT Password" placeholder="SMPT Password" required>
            </div>

            <div class="col-span-2 lg:col-span-1col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="smtp_auto">SMTP Auth</label>
              <select class="select" name="" id="smtp_auto" required>
                <option value="N/A">N/A</option>
                <option value="SSL">SSL</option>
                <option value="TSL">TSL</option>
              </select>
            </div>

            <div class="col-span-2 flex justify-start">
              <div class="w-fit">
                <button class="button">Submit</button>
              </div>
            </div>

          </form>

          <hr class="my-6" />
          <form class="grid grid-cols-2 gap-y-8 gap-x-12">
            <div class="col-span-2">
              <h2 class="text-xl font-semibold text-cyan-800">eMail Settings</h2>
            </div>

            <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="Contact Email">Contact Email</label>
              <input class="input" type="text" id="Contact Email" placeholder="Contact Email" required>
            </div>

            <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="NoReply Email">NoReply Email</label>
              <input class="input" type="text" id="NoReply Email" placeholder="NoReply Email" required>
            </div>

            <div class="col-span-2 flex justify-start">
              <div class="w-fit">
                <button class="button">Submit</button>
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>
  </main>

  <script src="js/app.js"></script>
</body>

</html>