<?php
echo Range_Slider::range_slider_admin_scripts();
echo Range_Slider::range_slider_front_assets();
?>
<div class="range-slider-main-info">
<div class="slider-box-main">
  <div class="title-box-info">Number of Pages: <span class="calc-count num-bold">20</span></div>
  <div class="slide-box-info">
    <input class="calc-range calc-range-item" name="number_of_pages" type="range" min="0" max="100" step="20" value="0">
  </div>
</div>

<div class="slider-box-main">
  <div class="title-box-info">Design Style / Design Statement: <span class="design-style num-bold">0</span></div>
  <div class="slide-box-info">
    <input class="calc-range2" name="design_style_design_statement" type="range" min="0" max="100" step="20" value="0">
  </div>
</div>

<div class="slider-box-main">
  <div class="title-box-info">Content for # of Web Pages: <span class="content-web-page num-bold">0</span></div>
  <div class="slide-box-info">
    <input class="calc-range3" name="content_for_of_web_pages" type="range" min="0" max="100" step="10" value="0">
  </div>
</div>

<div class="slider-box-main">
  <div class="title-box-info">Result-focused SEO: <span class="result-focused num-bold">0</span></div>
  <div class="slide-box-info">
    <input class="calc-range4" name="result_focused_SEO" type="range" min="0" max="100" step="10" value="0">
  </div>
</div>

<div class="slider-box-main">
  <div class="title-box-info">Responsive Design: <span class="responsive-design num-bold">NO</span></div>
  <div class="slide-box-info">
    <input class="calc-range5" name="responsive_design" type="range" min="0" max="100" step="100" value="0">
  </div>
</div>

<div class="slider-box-main">
  <div class="title-box-info">Database Integration: <span class="database-integration num-bold">0</span></div>
  <div class="slide-box-info">
    <input class="calc-range6" name="database_integration" type="range" min="0" max="50" step="10" value="0">
  </div>
</div>

<div class="slider-box-main">
  <div class="title-box-info">E-Commerce Functionality: <span class="e-commerce-functionality num-bold">0</span></div>
  <div class="slide-box-info">
    <input class="calc-range7" name="commerce_functionality" type="range" min="0" max="50" step="10" value="0">
  </div>
</div>

<!--<div class="calc-count"><span>Number of Pages:</span> 0</div>-->
<!--Total price: <span class="calc-total-price"></span>
<br> Price per item: <span class="calc-price"></span>-->

<div>
  <input class="calc-range" name="total" type="hidden" />
</div>
<div class="total-count-item">
  <!--<button type="button" class="savedata">Reveal the Pricing</button>-->
  <button type="button" class="savedata" data-toggle="modal" data-target="#myModal">Reveal the Pricing</button>
</div>

<div class="container">
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Website Quotation</h4>
      </div>
      <div class="modal-body">
        <?php
        global $wpdb;
        $table_name = $wpdb->prefix . "range_slider";
        $retrieve_data = $wpdb->get_results("SELECT * FROM $table_name ORDER BY id DESC LIMIT 1");
        foreach ($retrieve_data as $retrieved_data) {
        ?>
          <p>Number of Pages: <span class="num-bold"><?php echo $retrieved_data->number_of_pages; ?></span></p>
          <p>Design Style / Design Statement: <span class="num-bold"><?php echo $retrieved_data->design_style_design_statement; ?></span></p>
          <p>Content for # of Web Pages: <span class="num-bold"><?php echo $retrieved_data->content_for_of_web_pages; ?></span></p>
          <p>Result-focused SEO: <span class="num-bold"><?php echo $retrieved_data->result_focused_SEO; ?></span></p>
          <p>Responsive Design: <span class="num-bold"><?php echo $retrieved_data->responsive_design; ?></span></p>
          <p>Database Integration: <span class="num-bold"><?php echo $retrieved_data->database_integration; ?></span></p>
          <p>E-commerce Functionality: <span class="num-bold"><?php echo $retrieved_data->commerce_functionality; ?></span></p>
          <p class="total-price-info">Total Cost: <span class="num-bold"><?php echo $retrieved_data->total; ?></span></p>
        <?php } ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>
</div>