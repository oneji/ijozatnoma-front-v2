$(function () {
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
  });
});
