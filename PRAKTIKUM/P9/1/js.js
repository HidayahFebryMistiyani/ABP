$(document).ready(function() {
    $('#formRegistrasi').on('submit', function(e) {
      e.preventDefault();
  
      const nama = $('#nama').val().trim();
  
      if (nama === '') {
        $('#errorNama').removeClass('d-none');
      } else {
        $('#errorNama').addClass('d-none');
        alert('Form berhasil dikirim!');
      }
    });
  });
  