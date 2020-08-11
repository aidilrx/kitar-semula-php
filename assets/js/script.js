function readFile(input, target) {
  if (input.files && input.files[0]) {
      console.log("Reading");
      console.log('targeting..' + target.id);
    var reader = new FileReader();
    reader.onload = function (e) {
      $(`#${target.id}`).attr("src", e.target.result).css("display", "block");
    };
    reader.readAsDataURL(input.files[0]);
  } else {
    $(`#$${target.id}`).css("display", "none");
  }
}
