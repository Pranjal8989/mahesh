<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script>
  function edit(id) {
    var myurl = "<?php echo base_url('student/edit/'); ?>" + id;

    $.ajax({
      type: "GET",
      url: myurl,
      dataType: 'JSON',
      success: function (data) {
console.log(data);
        // Update modal fields with received data
        // $('#edit input[name="id"]').val(data.id);
        $('#edit input[name="student_name"]').val(data.student_name);
        $('#edit input[name="father_name"]').val(data.father_name);
        $('#edit input[name="mother_name"]').val(data.mother_name);
        $('[name="class"] option[value="'+ data.class +'"]').prop('selected', true);
        $('#edit input[name="dob"]').val(data.dob);
        $('#edit input[name="scholar_no"]').val(data.scholar_no);
        $('#edit input[name="Samagra"]').val(data.Samagra);
        $('#edit input[name="aadhar"]').val(data.aadhar);
        $('#edit input[name="account"]').val(data.account);
        $('[name="caste"] option[value="'+ data.caste +'"]').prop('selected', true);
        $('#edit input[name="caste_no"]').val(data.caste_no);
        $('#edit input[name="Mobile"]').val(data.Mobile);
        $('#edit input[name="school"]').val(data.school);
        $('#edit input[name="Percentage"]').val(data.Percentage);


    

        // Set form action to update with the correct article ID
        $('#edit form').attr('action', '<?php echo base_url("student/update/"); ?>' + data.id);
        // Show the modal
        $('#edit').modal('show');
      },
      error: function (xhr, status, error) {
        console.error("AJAX Error:", status, error);
        console.log("Response text:", xhr.responseText);
      }
    });
  }

</script>