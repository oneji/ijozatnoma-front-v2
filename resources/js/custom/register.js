$(function() {
    // Phone number mask
    $('#phone_number, #client_phone_number').inputmask({
        mask: '999-99-99-99',
        removeMaskOnSubmit: true
    });

    // Custom datepicker
    $('.datepicker').datepicker({
        format: 'd.mm.yyyy',
        autoclose: true,
        language: 'ru'
    });

    clearSelects(true, true);
    __REGIONS__.map((region, idx) => {
        if(idx === 0) {
            __CITIES__.map(city => {
                if(city.region_id == region.id) {
                    $('#registerForm select#city_id').append(`
                        <option value$="${city.id}">${city.name}</option>
                    `);
                }
            })
        }

        $('#registerForm select#region_id').append(`
            <option value="${region.id}">${region.name}</option>
        `);
    });

    // Change cities select depending on a region
    $('#registerForm select#region_id').on('change', function() {
        let region = $(this).val();

        clearSelects(false, true);
        __CITIES__.map(city => {
            if(city.region_id == region) {
                $('#registerForm select#city_id').append(`
                    <option value$="${city.id}">${city.name}</option>
                `);
            }
        })
    })

    function clearSelects(regions = false, cities = false) {
        if(regions) $('#registerForm select#region_id').html('');
        if(cities) $('#registerForm select#city_id').html('');
    }
});