<div class="content-wrapper">
  <section class="content-header">
    <section class="content">
      <div class="row">
        <div class="col-lg-6 col-sm-12">

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Diagram Hasil Pemilihan Ketua MPK</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div id="ketua" style="height: 370px; width: 100%"></div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-sm-12">

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Diagram Hasil Pemilihan Wakil MPK</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div id="wakil" style="height: 370px; width: 100%"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </section>
</div>

<script src="<?= base_url() ?>public/admin/morris/css/canvasjs.min.js"></script>
<script>
window.onload = function() {
var chart = new CanvasJS.Chart("ketua", {
  animationEnabled: true,
  title: {
    text: "Data Ketua"
  },
  data: [{
    type: "bar",
    yValueFormatString: "#,##0 Pemilih",
    indexLabel: "({y})",
    dataPoints: <?php echo $ketua ?>
  }]
});
chart.render();

var chart2 = new CanvasJS.Chart("wakil", {
  animationEnabled: true,
  title: {
    text: "Data Wakil Ketua"
  },
  data: [{
    type: "bar",
    yValueFormatString: "#,##0 Pemilih",
    indexLabel: "({y})",
    dataPoints: <?php echo $wakil ?>
  }]
});
chart2.render();
 
}
</script>

