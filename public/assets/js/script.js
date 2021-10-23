const wrapImg = document.querySelector(".wrapImg"),
fileInput = document.querySelector(".file-input");

wrapImg.addEventListener("click", () =>{
  fileInput.click();
});


$('.file-input').on('change', function () {
  const file = this.files[0];

  if (file) {
    const reader = new FileReader();
    reader.onload = function () {
      document.querySelector(".wrapImg img").src = reader.result;
      wrapImg.classList.add("active");
    }

    reader.readAsDataURL(file);
  }

  if(this.value){
    let fileName = $(this).val().split('\\').pop();
    document.querySelector(".file-name").textContent = fileName;
    // let valueStore = this.value.match(regExp);
    // fileName.textContent = valueStore;
  }

})

