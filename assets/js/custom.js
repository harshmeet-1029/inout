var showNotification;
showNotification = function(from, align, message, color) {
  // type = ['', 'info', 'danger', 'success', 'warning', 'rose', 'primary'];
  // color = Math.floor((Math.random() * 6) + 1);
  // color = 4;
  $.notify({
    icon: "add_alert",
    message: message

  }, {
    type: color,
    delay: 3000,
    placement: {
      from: from,
      align: align
    }
  });
}
const fileInput = document.querySelector('input[type="file"]');

fileInput.addEventListener('change', function() {
  const fileSize = this.files[0].size; // Get the size of the selected file in bytes
  const maxSize = 2 * 1024 * 1024; // Set the maximum file size to 2MB
  
  if (fileSize > maxSize) {
    alert('File size exceeds the limit of 2MB. Please choose a smaller file.'); // Display an error message
    this.value = null; // Reset the file input element
  }
});
