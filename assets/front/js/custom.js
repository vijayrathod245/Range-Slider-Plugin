$(document).ready(function ($) {

  var itemtype = "item-1";
  var itemtype2 = "item-2";
  var itemtype3 = "item-3";
  var itemtype4 = "item-4";
  var itemtype5 = "item-5";
  var itemtype6 = "item-6";
  var itemtype7 = "item-7";

  function rangeCalc(i) {
    var totalPrice = 0;
    var tariff = {
      "item-1": [{
        "begin": 0,
        "price": 50
      }],
      "item-2": [{
        "begin": 0,
        "price": 50
      }],
      "item-3": [{
        "begin": 0,
        "price": 40
      }],
      "item-4": [{
        "begin": 0,
        "price": 30
      }],
      "item-5": [{
        "begin": 0,
        "price": 60
      }],
      "item-6": [{
        "begin": 0,
        "price": 65
      }],
      "item-7": [{
        "begin": 0,
        "price": 85
      }]
    };
    $('.savedata').click(function () {

      tariff[itemtype].forEach(function (num, item) {
       if (tariff[itemtype][item].begin <= i ||
          tariff[itemtype2][item].begin <= i ||
          tariff[itemtype3][item].begin <= i ||
          tariff[itemtype4][item].begin <= i ||
          tariff[itemtype5][item].begin <= i ||
          tariff[itemtype6][item].begin <= i ||
          tariff[itemtype7][item].begin <= i ) {

          totalPrice = tariff[itemtype][item].price;
          var total_var = i * totalPrice;
          totalPrice2 = tariff[itemtype2][item].price;
          var total_var2 = i * totalPrice2;
          totalPrice3 = tariff[itemtype3][item].price;
          var total_var3 = i * totalPrice3;
          totalPrice4 = tariff[itemtype4][item].price;
          var total_var4 = i * totalPrice4;
          totalPrice5 = tariff[itemtype5][item].price;
          var total_var5 = i * totalPrice5;
          totalPrice6 = tariff[itemtype6][item].price;
          var total_var6 = i * totalPrice6;
          totalPrice7 = tariff[itemtype7][item].price;
          var total_var7 = i * totalPrice7;
          var final_total = total_var + total_var2 + total_var3 + total_var4 + total_var5 + total_var6 + total_var7;
          $.ajax({
            type: 'POST',
            url: ajax_object.ajaxurl,
            data: {
              action: 'myaction',
              number_of_pages: total_var,
              design_style_design_statement: total_var2,
              content_for_of_web_pages: total_var3,
              result_focused_SEO: total_var4,
              responsive_design: total_var5,
              database_integration: total_var6,
              commerce_functionality: total_var7,
              total: final_total
            },
            success: function (data) {
              //alert( data );
            }
          });
        };
      });
    });
  };
  $('.calc-range').on('input', function () {
    $('.calc-count').text(this.value);
    rangeCalc(this.value);
  });
  $('.calc-range2').on('input', function () {
    $('.design-style').text(this.value);
    rangeCalc(this.value);
  });
  $('.calc-range3').on('input', function () {
    $('.content-web-page').text(this.value);
    rangeCalc(this.value);
  });
  $('.calc-range4').on('input', function () {
    $('.result-focused').text(this.value);
    rangeCalc(this.value);
  });
  $('.calc-range5').on('input', function () {
    $('.responsive-design').text(this.value);
    rangeCalc(this.value);
  });
  $('.calc-range6').on('input', function () {
    $('.database-integration').text(this.value);
    rangeCalc(this.value);
  });
  $('.calc-range7').on('input', function () {
    $('.e-commerce-functionality').text(this.value);
    rangeCalc(this.value);
  });
  $('.calc-range5').on('change', function () {
    let val_responsive = $(this).val();
    if (val_responsive == '100') {
      $('.responsive-design').text('YES');
    } else {
      $('.responsive-design').text('NO');
    }
  });
});