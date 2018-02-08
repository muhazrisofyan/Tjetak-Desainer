function cek(id, value) {


    if (value.length > 0) {
      document.getElementById(id).nextElementSibling.innerHTML = "";
      document.getElementById(id).classList.remove("w3-border-red");
    }
    else {
      document.getElementById(id).nextElementSibling.innerHTML = " Field " + id + " wajib diisi";
      document.getElementById(id).classList.add("w3-border-red");
    }

}
