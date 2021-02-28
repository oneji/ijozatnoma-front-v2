$(function () {
  // Phone number mask
  $('#phone_number, #client_phone_number').inputmask({
    mask: '999-99-99-99',
    removeMaskOnSubmit: true
  }); // Custom datepicker

  $('.datepicker').datepicker({
    format: 'd.mm.yyyy',
    autoclose: true,
    language: 'ru',
    mask: true
  });
  clearSelects(true, true);

  __REGIONS__.map(function (region, idx) {
    if (idx === 0) {
      __CITIES__.map(function (city) {
        if (city.region_id == region.id) {
          $('#registerForm select#city_id').append("\n                        <option value=\"".concat(city.id, "\">").concat(__LOCALE__ === 'tj' ? city.name : city["name_".concat(__LOCALE__)], "</option>\n                    "));
        }
      });
    }

    $('#registerForm select#region_id').append("\n            <option value=\"".concat(region.id, "\">").concat(__LOCALE__ === 'tj' ? region.name : region["name_".concat(__LOCALE__)], "</option>\n        "));
  }); // Change cities select depending on a region


  $('#registerForm select#region_id').on('change', function () {
    var region = $(this).val();
    clearSelects(false, true);

    __CITIES__.map(function (city) {
      if (city.region_id == region) {
        $('#registerForm select#city_id').append("\n                    <option value=\"".concat(city.id, "\">").concat(__LOCALE__ === 'tj' ? city.name : city["name_".concat(__LOCALE__)], "</option>\n                "));
      }
    });
  });

  __REGIONS__.map(function (region, idx) {
    if (idx === 0) {
      __CITIES__.map(function (city) {
        if (city.region_id == region.id) {
          $('#registerForm select#residence_city_id').append("\n                        <option value=\"".concat(city.id, "\">").concat(__LOCALE__ === 'tj' ? city.name : city["name_".concat(__LOCALE__)], "</option>\n                    "));
        }
      });
    }

    $('#registerForm select#residence_region_id').append("\n            <option value=\"".concat(region.id, "\">").concat(__LOCALE__ === 'tj' ? region.name : region["name_".concat(__LOCALE__)], "</option>\n        "));
  }); // Change cities select depending on a region


  $('#registerForm select#residence_region_id').on('change', function () {
    var region = $(this).val();
    clearSelects2(false, true);

    __CITIES__.map(function (city) {
      if (city.region_id == region) {
        $('#registerForm select#residence_city_id').append("\n                    <option value=\"".concat(city.id, "\">").concat(__LOCALE__ === 'tj' ? city.name : city["name_".concat(__LOCALE__)], "</option>\n                "));
      }
    });
  });

  function clearSelects() {
    var regions = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : false;
    var cities = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : false;
    if (regions) $('#registerForm select#region_id').html('');
    if (cities) $('#registerForm select#city_id').html('');
  }

  function clearSelects2() {
    var regions = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : false;
    var cities = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : false;
    if (regions) $('#registerForm select#residence_region_id').html('');
    if (cities) $('#registerForm select#residence_city_id').html('');
  }
});
