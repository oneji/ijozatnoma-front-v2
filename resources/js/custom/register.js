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
});