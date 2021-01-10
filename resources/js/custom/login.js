$(function() {
    // Phone number mask
    $('#phone_number').inputmask({
        mask: '999-99-99-99',
        removeMaskOnSubmit: true
    });

    $('#verification_code').inputmask({
        mask: '999999',
        removeMaskOnSubmit: true
    });
});