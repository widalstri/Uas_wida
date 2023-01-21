<?= $this->include('header'); ?>
<?= $this->include('sidemenu'); ?>

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div>
            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
              <center><h3 class="title"><b> GRAFIK PROVINSI </b></h3></center>
                <!-- Total Revenue -->
                <div class="col-12 col-lg-6 order-2 order-md-3 order-lg-2 mb-4">
                  <div class="card">
                    <div class="row row-bordered g-0">
                      <div class="col-md-8">
                        <h5 class="card-header m-0 me-2 pb-3">Grafik Pie</h5>
                      </div>
                      <div id="chartdiv"></div>
                    </div>
                  </div>
                </div>
                <!--/ Total Revenue -->
                <!-- Total Revenue -->
                <div class="col-12 col-lg-6 order-2 order-md-3 order-lg-2 mb-4">
                  <div class="card">
                    <div class="row row-bordered g-0">
                      <div class="col-md-8">
                        <h5 class="card-header m-0 me-2 pb-3">Grafik Column Bar</h5>
                      </div>
                      <div id="chart"></div>
                    </div>
                  </div>
                </div>
                <!--/ Total Revenue -->
              </div>
            </div>
            <!-- / Content -->

<?= $this->include('footer'); ?>

<script src="//www.amcharts.com/lib/4/core.js"></script>
<script src="//www.amcharts.com/lib/4/charts.js"></script>


<style>
#chartdiv {
  width: 100%;
  height: 400px;
}
</style>
<script>
// Create chart instance in one go
var chart = am4core.createFromConfig({
  // Create pie series
  "series": [{
    "type": "PieSeries",
    "dataFields": {
      "value": "jumlah_masjid",
      "category": "provinsi"
    }
  }],

  // Add data
  
  "data":  <?php echo file_get_contents(base_url('grafik_provinsi/grafik_provinsi_json')); ?>,

  // And, for a good measure, let's add a legend
  "legend": {}

}, "chartdiv", am4charts.PieChart);
</script>
<!-- Styles -->
<style>
#chartdiv {
  width: 100%;
  height: 500px;
}
</style>
<style>
#chartdiv {
  width: 100%;
  height: 500px;
}
</style>
<!-- Styles -->
<style>
#chartdiv {
  width: 100%;
  height: 500px;
}
</style>
