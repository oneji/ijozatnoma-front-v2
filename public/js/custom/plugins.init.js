$(function () {
  console.log('[plugins.min.js]');
  $('.hamburger').on('click', function () {
    $(this).toggleClass('is-active');
    $('.mobile-nav').toggle(0, 'display');
  });
  $('.datatable').DataTable({
    // responsive: true,
    language: {
      search: "",
      searchPlaceholder: "ҶУСТУҶӮ...",
      lengthMenu: "САБТИ _MENU_ -РО НИШОН ДИҲЕД",
      zeroRecords: "ЯГОН САБТҲО ДАСТРАС НЕСТ",
      info: "САБТҲОИ АЗ _PAGE_ ТО _PAGES_",
      infoEmpty: "ЯГОН САБТҲО ДАСТРАС НЕСТ",
      infoFiltered: "(Аз _MAX_ сабти умумӣ филтр карда шудааст)",
      paginate: {
        previous: "< Қаблӣ",
        next: "Баъдӣ >"
      }
    }
  }); // Custom file uploader JS
  // $('.custom-file input').each(function() {
  //     let $input = $(this);
  //     let $label = $input.next('label');
  //     let labelVal = $label.html();
  //     console.log($input);
  //     $input.on('change', function(e) {
  //         var fileName = '';
  //         if(this.files && this.files.length > 1) {
  //             fileName = (this.getAttribute('data-multiple-caption') || '' ).replace('{count}', this.files.length);
  //         } else if( e.target.value ) {
  //             fileName = e.target.value.split( '\\' ).pop();
  //         }
  //         console.log(fileName)
  //         if(fileName) {
  //             $label.find('span').html(fileName);
  //         } else {
  //             $label.html(labelVal);
  //         }
  //     });
  // });

  $(document).on('change', '.custom-file input', function (e) {
    var fileName = '';

    if (this.files && this.files.length > 1) {
      fileName = (this.getAttribute('data-multiple-caption') || '').replace('{count}', this.files.length);
    } else if (e.target.value) {
      fileName = e.target.value.split('\\').pop();
    }

    if (fileName) {
      $(this).next('label').find('span').html(fileName);
    } else {
      $(this).next('label').html($(this).next('label').html());
    }
  }); // Custom datepicker

  $('.datepicker').datepicker({
    format: 'd.mm.yyyy',
    autoclose: true,
    language: 'ru'
  });
});
