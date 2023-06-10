document.getElementById("openBtn").addEventListener("click", function() {
    document.getElementById("popup").style.display = "block";
  });

  document.getElementsByClassName("close")[0].addEventListener("click", function() {
    document.getElementById("popup").style.display = "none";
  });

  document.getElementById("modifyForm").addEventListener("submit", function(e) {
    e.preventDefault(); // Prevent form submission
    // Get the values from the input fields
    var brightnessValue = document.getElementById("brightness").value;
    var contrastValue = document.getElementById("contrast").value;

    // Apply the modifications to the picture (you need to implement this part)
    modifyPicture(brightnessValue, contrastValue);

    // Close the pop-up window
    document.getElementById("popup").style.display = "none";
  });

//   function handleFileSelect(event) {
//     const file = event.target.files[0];
//     // Perform necessary actions with the selected file
//     console.log(file);
//   }
$(document).ready(function(){
  var prix = parseFloat($("#prix").val());
  var fee = parseFloat($("#fee").val());
  var prixtot = $("#total");
  
  if (prix > 50) {
    fee.val("$0");
  } else {
    var total = prix + fee;
    prixtot.val(total);
  }
  
});
