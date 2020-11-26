<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <div class="row">
          <div class="col">
            <i class="fas fa-wine-glass mr-2"></i>Configuration MyBacchus
          </div>
        </div><!-- /.row -->
      </div><!-- /.card-header -->
      <div class="card-body">
        <h2>Configurer le Module Manager :</h2>
        <form action="set_bacchus_settings.php" method="POST">
          <!-- SSID -->
          <label for="wifi_ssid">SSID :</label>
          <input type="text" id="wifi_ssid" name="wifi_ssid" placeholder="Box-123456">
          <br><br>
          <!-- PSK -->
          <label for="wifi_psk">PSK :</label>
          <input type="text" id="wifi_psk" name="wifi_psk" placeholder="P4s5W0rD">
          <br><br>
          <!-- Device-ID -->
          <label for="module-id">Module-ID :</label>
          <input type="text" id="module-id" name="module-id" placeholder="module-client-x">
          <br><br>
          <!-- Port ssh -->
          <label for="port-ssh">Port SSH :</label>
          <input type="text" id="port-ssh" name="port-ssh" placeholder="6599">
          <br><br>
          <input type="submit">
        </form>
        <?php $status->showMessages(); ?>
        <?php echo CSRFTokenFieldTag() ?>
          <!-- Tab panes -->
          <div class="tab-content">
            <!-- advanced tab -->
            <div role="tabpanel" class="tab-pane" id="advanced">
              <h4 class="mt-3"><?php echo _("Advanced settings") ;?></h4>
                <?php if (!RASPI_MONITOR_ENABLED) : ?>
                <form action="?page=mybacchus_settings" method="POST">
                <?php echo CSRFTokenFieldTag() ?>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="code"><?php echo _("Web server port") ;?></label>
                      <input type="text" class="form-control" name="serverPort" value="<?php //echo htmlspecialchars($serverPort, ENT_QUOTES); ?>" />
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="code"><?php echo _("Web server bind address") ;?></label>
                      <input type="text" class="form-control" name="serverBind" value="<?php// echo htmlspecialchars($serverBind, ENT_QUOTES); ?>" />
                    </div>
                  </div>
                  <input type="submit" class="btn btn-outline btn-primary" name="SaveServerSettings" value="<?php echo _("Save settings"); ?>" />
                  <input type="submit" class="btn btn-warning" name="RestartLighttpd" value="<?php echo _("Restart lighttpd"); ?>" />
                </form>
                <?php endif ?>
            </div>
          </div><!-- /.tab-content -->
      </div><!-- /.card-body -->
      <div class="card-footer"></div>
    </div><!-- /.card -->
  </div><!-- /.col-lg-12 -->
</div><!-- /.row -->
