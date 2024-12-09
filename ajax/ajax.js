$(document).ready(function () {
  $("#new_enty_form").submit(function (e) {
    e.preventDefault();
    //get form data
    const form_data = new FormData(e.target);
    const {
      importer_name,
      goods_name,
      quantity,
      pkg_code,
      vassel_name,
      bl_no,
      container_no,
      container_size,
      container_location,
      lc_no,
      lc_date,
      gross_weight,
      arivel_date,
    } = Object.fromEntries(form_data);

    //form valadition
    if (!importer_name || !goods_name || !quantity) {
      Swal.fire("all fields are requerd !");
    } else {
      $.ajax({
        url: "./ajax/ajax.php?action=entydata",
        method: "POST",
        data: form_data,
        contentType: false,
        processData: false,
        success: (data) => {
          Swal.fire({
            position: "top-center",
            icon: "success",
            title: "Your work has been saved",
            showConfirmButton: false,
            timer: 2000,
          });
          e.target.reset();
        },
      });
    }
  });

  /**
   * received to enty
   */
  $("#received").submit(function (e) {
    e.preventDefault();
    //get form data
    const forms_data = new FormData(e.target);
    const {
      document_received,
      invoice_value,
      invoice_no,
      invoice_date,
      net_weight,
    } = Object.fromEntries(forms_data);

    //form valadition
    if (
      !document_received ||
      !invoice_value ||
      !invoice_no ||
      !invoice_date ||
      !net_weight
    ) {
      Swal.fire("All Fields are Requerd !");
    } else {
      $.ajax({
        url: "./ajax/ajax.php?action=received",
        method: "POST",
        data: forms_data,
        contentType: false,
        processData: false,
        success: (data) => {
          Swal.fire({
            position: "top-center",
            icon: "success",
            title: "Your work has been saved",
            showConfirmButton: false,
            timer: 2000,
          });
          e.target.reset();
        },
      });
    }
  });
});
