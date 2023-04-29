
$(document).ready(
  function()
  {
const fileInput = document.querySelector('input[type="file"]');

fileInput.addEventListener('change', function() {
  const fileSize = this.files[0].size; // Get the size of the selected file in bytes
  const maxSize = 2 * 1024 * 1024; // Set the maximum file size to 2MB
  
  if (fileSize > maxSize) {
    alert('File size exceeds the limit of 2MB. Please choose a smaller file.'); // Display an error message
    this.value = null; // Reset the file input element
  }
});
}
);

$(document).ready(
  function()
  {
    document.getElementById('cl').addEventListener('click',cl_div);
    function cl_div(){
     let password = window.prompt("Enter password to sign out");
     if (password != null && password !=""){
      console.log(password);

      var xhr = new XMLHttpRequest();
     // xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xhr.onreadystatechange = function() {
          if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
              console.log("Response received: " + this.responseText);
          }
      };
      xhr.open("GET", "signout_verify.php?myVariable="+password);
      xhr.send();
      
     window.location.replace("signout_verify.php?myVariable="+password);
     }
    }

    
  }
);

