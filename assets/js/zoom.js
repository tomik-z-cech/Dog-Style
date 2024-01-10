// database of pictures
pictures = [
    { url: "assets/images/image1.jpeg", desc: "Lovely doggo after treatment" },
    { url: "assets/images/image2.jpeg", desc: "Inside of Dog Style" },
    { url: "assets/images/image3.jpeg", desc: "Lovely doggo after treatment" },
    { url: "assets/images/image4.jpeg", desc: "Collage of our work" },
    { url: "assets/images/image5.jpeg", desc: "Collage of our work" },
    { url: "assets/images/image6.jpeg", desc: "Lovely doggo after treatment" },
    { url: "assets/images/image7.jpeg", desc: "Doggie-clothes available" },
    { url: "assets/images/image8.jpeg", desc: "Lovely doggo after treatment" },
    { url: "assets/images/image9.jpeg", desc: "Lovely doggo after treatment" },
    { url: "assets/images/image10.jpeg", desc: "Andzelika and happy customer" },
    { url: "assets/images/image11.jpeg", desc: "Andzelika and happy customer" },
  ];
  
  
  $(document).ready(function () {
    /**
     * Function displays picture based on number
     */
    function displayPicture() {
      // inject data from database to html
      $("#desc-container").html(
        `<h2 class="error-text">${pictures[picNumber].desc}</h2>`
      );
      $("#photo-container").html(
        `<img src="${pictures[picNumber].url}" alt="${pictures[picNumber].desc}" class="add-shadow img-fluid">`
      );
    }
  
    //read variable passed from gallery.html
    let urlParams = new URLSearchParams(window.location.search);
    let picNumber = urlParams.get("picNumber");
    // if no variable passed picNumber = 0
    picNumber == null ? (picNumber = 0) : (picNumber = picNumber);
    //call displayPicture function
    displayPicture();
    $("#pic-start").click(function () {
      picNumber = 0;
      displayPicture();
    });
    $("#pic-end").click(function () {
      picNumber = 10;
      displayPicture();
    });
    $("#pic-minus").click(function () {
      picNumber == 0 ? (picNumber = 0) : picNumber--;
      displayPicture();
    });
    $("#pic-plus").click(function () {
      picNumber == 10 ? (picNumber = 10) : picNumber++;
      displayPicture();
    });
    $("#zoom-close").click(function () {
      window.open("gallery.html", "_self");
    });
  });