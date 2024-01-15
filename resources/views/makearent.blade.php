@extends('layout.makearentlayout')
@section('title', 'wheelsonlese')
@section('content')








<style>

    .custom-select {
        position: relative;
        width: 100%;
    }

    .custom-select select {
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        border: 1px solid #ccc;
        padding: 5px;
        cursor: pointer;
        width: 100%;
    }

    .custom-select::before {
        content: '▼'; /* Unicode character for a down arrow ▼ */
        position: absolute;
        top: 50%;
        right: 10px; /* Adjust the right spacing as needed */
        transform: translateY(-50%);
        pointer-events: none;
    }



    .red-input {
        background-color: rgb(253, 241, 241);
        color: rgb(0, 0, 0);
        border: 1px solid rgb(32, 30, 30);
    }






        /* styles.css */
       .custom-card {
         margin: 20px;
         background-color: #F5F5F5;
         border: 1px solid #ddd;
         margin-left: 2.5cm;
         margin-right: 1.5cm;
      }

       .custom-card .card-header {
         background-color: #18282b;
         color: white;
       }





      .custom-button {
        width: 150px;
        height: 40px;
        margin-left: 0.4cm;
        /* Add any other styles you want for the buttons */
      }




    .required-text {
        color: red;
        font-size: 13px; /* You can adjust the font size as needed */
    }



      .image-upload {
        display: inline-block;
        position: relative;
        padding-top: 1cm;
        padding-right: 1%;
      }

      .image-upload-label {
        width: 100px;
        height: 100px;
        background-color: #ccc;
        color: #000000;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
      }

      .photo1-input {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        opacity: 0;
        cursor: pointer;
      }

      .image-preview1 {
        width: 100px;
        height: 100px;
        background-size: cover;
        background-position: center;
        background-color: #f9f9f9;
        display: none;
        position: absolute; /* Position the image preview absolutely */
        top: 1cm; /* Align it with the top of the image-upload div */
      }

      .preview-image1 {
        width: 100%;
        height: 100%;

      }

      .cancel-preview1 {
        position: absolute;
        top: 5px;
        right: 5px;
        background: rgba(255, 255, 255, 0.8);
        border: none;
        border-radius: 100%;
        padding: 1px;
        cursor: pointer;
        display: none;
      }

      .cancel-cross {
        font-size: 17px;
        display: block;
        text-align: center;
      }






















      .photo2-input {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        opacity: 0;
        cursor: pointer;
      }

      .image-preview2 {
        width: 100px;
        height: 100px;
        background-size: cover;
        background-position: center;
        background-color: #f9f9f9;
        display: none;
        position: absolute; /* Position the image preview absolutely */
        top: 1cm; /* Align it with the top of the image-upload div */
      }

      .preview-image2 {
        width: 100%;
        height: 100%;
      }

      .cancel-preview2 {
        position: absolute;
        top: 5px;
        right: 5px;
        background: rgba(255, 255, 255, 0.8);
        border: none;
        border-radius: 100%;
        padding: 1px;
        cursor: pointer;
        display: none;
      }























      .photo3-input {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        opacity: 0;
        cursor: pointer;
      }

      .image-preview3 {
        width: 100px;
        height: 100px;
        background-size: cover;
        background-position: center;
        background-color: #f9f9f9;
        display: none;
        position: absolute; /* Position the image preview absolutely */
        top: 1cm;  /* Align it with the top of the image-upload div */
      }

      .preview-image3 {
        width: 100%;
        height: 100%;
      }

      .cancel-preview3 {
        position: absolute;
        top: 5px;
        right: 5px;
        background: rgba(255, 255, 255, 0.8);
        border: none;
        border-radius: 100%;
        padding: 1px;
        cursor: pointer;
        display: none;
      }


















      .photo4-input {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        opacity: 0;
        cursor: pointer;
      }

      .image-preview4 {
        width: 100px;
        height: 100px;
        background-size: cover;
        background-position: center;
        background-color: #f9f9f9;
        display: none;
        position: absolute; /* Position the image preview absolutely */
        top: 1cm;  /* Align it with the top of the image-upload div */
      }

      .preview-image4 {
        width: 100%;
        height: 100%;
      }

      .cancel-preview4 {
        position: absolute;
        top: 5px;
        right: 5px;
        background: rgba(255, 255, 255, 0.8);
        border: none;
        border-radius: 100%;
        padding: 1px;
        cursor: pointer;
        display: none;
      }




















      .photo5-input {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        opacity: 0;
        cursor: pointer;
      }

      .image-preview5 {
        width: 100px;
        height: 100px;
        background-size: cover;
        background-position: center;
        background-color: #f9f9f9;
        display: none;
        position: absolute; /* Position the image preview absolutely */
        top: 1cm;  /* Align it with the top of the image-upload div */
      }

      .preview-image5 {
        width: 100%;
        height: 100%;
      }

      .cancel-preview5 {
        position: absolute;
        top: 5px;
        right: 5px;
        background: rgba(255, 255, 255, 0.8);
        border: none;
        border-radius: 100%;
        padding: 1px;
        cursor: pointer;
        display: none;
      }




















      .photo6-input {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        opacity: 0;
        cursor: pointer;
      }

      .image-preview6 {
        width: 100px;
        height: 100px;
        background-size: cover;
        background-position: center;
        background-color: #f9f9f9;
        display: none;
        position: absolute; /* Position the image preview absolutely */
        top: 1cm;  /* Align it with the top of the image-upload div */
      }

      .preview-image6 {
        width: 100%;
        height: 100%;
      }

      .cancel-preview6 {
        position: absolute;
        top: 5px;
        right: 5px;
        background: rgba(255, 255, 255, 0.8);
        border: none;
        border-radius: 100%;
        padding: 1px;
        cursor: pointer;
        display: none;
      }



















      .photo7-input {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        opacity: 0;
        cursor: pointer;
      }

      .image-preview7 {
        width: 100px;
        height: 100px;
        background-size: cover;
        background-position: center;
        background-color: #f9f9f9;
        display: none;
        position: absolute; /* Position the image preview absolutely */
        top: 1cm;  /* Align it with the top of the image-upload div */
      }

      .preview-image7 {
        width: 100%;
        height: 100%;
      }

      .cancel-preview7 {
        position: absolute;
        top: 5px;
        right: 5px;
        background: rgba(255, 255, 255, 0.8);
        border: none;
        border-radius: 100%;
        padding: 1px;
        cursor: pointer;
        display: none;
      }






















      .photo8-input {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        opacity: 0;
        cursor: pointer;
      }

      .image-preview8 {
        width: 100px;
        height: 100px;
        background-size: cover;
        background-position: center;
        background-color: #f9f9f9;
        display: none;
        position: absolute; /* Position the image preview absolutely */
        top: 1cm; /* Align it with the top of the image-upload div */
      }

      .preview-image8 {
        width: 100%;
        height: 100%;
      }

      .cancel-preview8 {
        position: absolute;
        top: 5px;
        right: 5px;
        background: rgba(255, 255, 255, 0.8);
        border: none;
        border-radius: 100%;
        padding: 1px;
        cursor: pointer;
        display: none;
      }



      @media screen and (max-width: 645px)
              {
                .custom-card {
                    top:2cm;
                    margin-bottom: 4cm;
                 }

              }


              @media screen and (max-width: 1300px)
              {
                .custom-card {
                    margin-left: 1.5cm;
                    margin-right: 1.5cm;
                 }

              }

              @media screen and (max-width: 900px)
              {
                .custom-card {
                    margin-left: 1cm;
                    margin-right: 1cm;
                 }

              }

              @media screen and (max-width: 600px)
              {
                .custom-card {
                    margin-left: 5%;
                    margin-right: 5%;
                 }

              }






    </style>






<div class="card custom-card">
  <div class="card-header">Create New Rent</div>
  <div class="card-body">
    <form action="{{ route('makearent') }}" method="post" enctype="multipart/form-data"  id="rentForm">
      @csrf

      <div class="form-group">
        <label for="rent">Rent:</label>
        <div class="custom-select">
            <select name="rent" id="rent" class="form-control">
                <option value="" disabled selected>Select what you choose to rent</option>
                <option value="car">Car</option>
                <option value="bike">Bike</option>
            </select>
        </div>
        <span class="required-text">Provide what you make rent (car or bike). Please complete the required field.</span>
    </div>







    <div class="form-group">
        <label for="brand">Brand:</label>
        <input type="text" name="brand" id="brand" class="form-control" autocomplete="off" oninput="convertToUppercase(this)">
        <span class="required-text">Brand of vehicle. Please complete the required field.</span>
    </div>

    <!-- Model Field -->
    <div class="form-group">
        <label for="model">Model:</label>
        <input type="text" name="model" id="model" class="form-control" autocomplete="off" oninput="convertToUppercase(this)">
        <span class="required-text">Model of vehicle. Please complete the required field.</span>
    </div>

      <!-- Year Field -->
      <div class="form-group">
        <label for="year">Year:</label>
        <input type="text" name="year" id="year" class="form-control" autocomplete="off" oninput="this.value = this.value.replace(/[^0-9]/g, '');">
        <span class="required-text">Year of the vehicle. Please complete the required field.</span>
    </div>


      <!-- Fuel Field -->
      <div class="form-group">
        <label for="fuel">Fuel:</label>
        <div class="custom-select">
            <select name="fuel" id="fuel" class="form-control">
                <option value="" disabled selected>Select fuel</option>
                <option value="petrol">Petrol</option>
                <option value="diesel">Diesel</option>
                <option value="electric">Electric</option>
                <option value="cng">CNG</option>
                <option value="lpg">LPG</option>
            </select>
        </div>
        <span class="required-text">Please complete the required field.</span>
    </div>

      <!-- Transmission Field -->
      <div class="form-group">
        <label for="transmission">Transmission:</label>
        <div class="custom-select">
            <select name="transmission" id="transmission" class="form-control">
                <option value="" disabled selected>Select Transmission</option>
                <option value="manual">Manual</option>
                <option value="automatic">Automatic</option>
            </select>
        </div>
        <span class="required-text">Select Transmission of vehicle. Please complete the required field.</span>
    </div>


      <!-- Kilometers Driven Field -->
      <div class="form-group">
        <label for="kmsdriven">Kilometers Driven:</label>
        <input type="text" name="kmsdriven" id="kmsdriven" class="form-control" autocomplete="off" oninput="this.value = this.value.replace(/[^0-9]/g, '');">
        <span class="required-text">Provide kilometers driven. Please complete the required field.</span>
      </div>

      <!-- Number of Owners Field -->
      <div class="form-group">
        <label for="ownernum">Number of Owners:</label>
        <div class="custom-select">
            <select name="ownernum" id="ownernum" class="form-control">
                <option value="" disabled selected>Select number of owners</option>
                <option value="1st owner">1st owner</option>
                <option value="2nd owner">2nd owner</option>
                <option value="3rd owner">3rd owner</option>
                <option value="4th and more owner">owner- 4th or more</option>
            </select>
        </div>
        <span class="required-text">Select the number of owners. Please complete the required field.</span>
    </div>




      <!-- District Field -->
      <div class="form-group">
        <label for="district">District:</label>
        <div class="custom-select">
            <select name="district" id="district" class="form-control">
                <option value="" disabled selected>Select District</option>
                <option value="Thiruvananthapuram">Thiruvananthapuram</option>
                <option value="Kollam">Kollam</option>
                <option value="Pathanamthitta">Pathanamthitta</option>
                <option value="Alappuzha">Alappuzha</option>
                <option value="Kottayam">Kottayam</option>
                <option value="Idukki">Idukki</option>
                <option value="Ernakulam">Ernakulam</option>
                <option value="Thrissur">Thrissur</option>
                <option value="Palakkad">Palakkad</option>
                <option value="Malappuram">Malappuram</option>
                <option value="Kozhikode">Kozhikode</option>
                <option value="Wayanad">Wayanad</option>
                <option value="Kannur">Kannur</option>
                <option value="Kasaragod">Kasaragod</option>
            </select>
        </div>
        <span class="required-text">Select a district. Please complete the required field.</span>
    </div>




      <!-- Local Place Field -->
      <div class="form-group">
        <label for="city">City:</label>
        <div class="custom-select">
            <select name="city" id="city" class="form-control">
                <option value="" disabled selected>Select city</option>
                <option value="Thiruvananthapuram">Thiruvananthapuram</option>
                <option value="Kollam">Kollam</option>
                <option value="Pathanamthitta">Pathanamthitta</option>
                <option value="Alappuzha">Alappuzha</option>
                <option value="Kottayam">Kottayam</option>
                <option value="Idukki">Idukki</option>
                <option value="Ernakulam">Ernakulam</option>
                <option value="Thrissur">Thrissur</option>
                <option value="Palakkad">Palakkad</option>
                <option value="Malappuram">Malappuram</option>
                <option value="Kozhikode">Kozhikode</option>
                <option value="Wayanad">Wayanad</option>
                <option value="Kannur">Kannur</option>
                <option value="Kasaragod">Kasaragod</option>
                <!-- Add more cities as needed -->
            </select>
        </div>
        <span class="required-text">Select a city. Please complete the required field.</span>
    </div>


      <!-- Title Field -->
      <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" class="form-control red-input" autocomplete="off">
        <span class="required-text">Provide a suitable title with brand, model, etc... Please complete the required field.</span>
    </div>


      <!-- Description Field -->
      <div class="form-group">
        <label for="description">Description:</label>
        <textarea name="discription" id="discription" class="form-control" autocomplete="off"></textarea>
        <span class="required-text">Provide condition, features and reason for selling. Please complete the required field.</span>
      </div>





      <!-- Price Field -->
      <div class="form-group">
        <label for="rentday">Rent charge per day:</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">&#8377;</span>
            </div>
            <input type="text" name="rentday" id="rentday" class="form-control" autocomplete="off" oninput="this.value = this.value.replace(/[^0-9]/g, '');">
        </div>
        <span class="required-text">Provide rent charge for a day for your item. Please complete the required field.</span>
    </div>


    <div class="form-group">
        <label for="rentmonth">Rent charge for month (30 days):</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">&#8377;</span>
            </div>
            <input type="text" name="rentmonth" id="rentmonth" class="form-control" autocomplete="off" oninput="this.value = this.value.replace(/[^0-9]/g, '');">
        </div>
        <span class="required-text">Provide rent charge for a month for your item.(provide only if renting for a month).</span>
    </div>



      <!-- Photo Upload Field 1 -->
      <div class="image-upload">
        <label for="photo1-input" class="image-upload-label">

          <span class="add-photo-text">Cover Photo</span>
        </label>
        <input type="file" name="photo1" id="photo1-input" accept="image/*" class="photo1-input" multiple>
        <div class="image-preview1">
          <img src="#" alt="Preview" id="preview-image1" class="preview-image1">
          <button type="button" id="cancel-preview1" class="cancel-preview1">
            <span class="cancel-cross">✖</span> <!-- Cross symbol inside a square -->
          </button>
        </div>
        <span class="required-text">Cover photo</span>
      </div>


      <!-- Photo Upload Field 2 -->
      <div class="image-upload">
        <label for="photo2-input" class="image-upload-label">

          <span class="add-photo-text">Add Photo 2</span>
        </label>
        <input type="file" name="photo2" id="photo2-input" accept="image/*" class="photo2-input" multiple>
        <div class="image-preview2">
          <img src="#" alt="Preview" id="preview-image2" class="preview-image2">
          <button type="button" id="cancel-preview2" class="cancel-preview2">
            <span class="cancel-cross">✖</span>
          </button>
        </div>
        <span class="required-text">Photo-2 required</span>
      </div>

      <!-- Photo Upload Field 3 -->
      <div class="image-upload">
        <label for="photo3-input" class="image-upload-label">

          <span class="add-photo-text">Add Photo 3</span>
        </label>
        <input type="file" name="photo3" id="photo3-input" accept="image/*" class="photo3-input" multiple>
        <div class="image-preview3">
          <img src="#" alt="Preview" id="preview-image3" class="preview-image3">
          <button type="button" id="cancel-preview3" class="cancel-preview3">
            <span class="cancel-cross">✖</span>
          </button>
        </div>
        <span class="required-text">Photo-3 required</span>
      </div>


  <!-- Photo Upload Field 4 -->
  <div class="image-upload">
    <label for="photo4-input" class="image-upload-label">

      <span class="add-photo-text">Add Photo 4</span>
    </label>
    <input type="file" name="photo4" id="photo4-input" accept="image/*" class="photo4-input" multiple>
    <div class="image-preview4">
      <img src="#" alt="Preview" id="preview-image4" class="preview-image4">
      <button type="button" id ="cancel-preview4" class="cancel-preview4">
        <span class="cancel-cross">✖</span>
      </button>
    </div>
    <span class="required-text"  style="color: black;"  >Photo-4</span>
  </div>

  <!-- Photo Upload Field 5 -->
  <div class="image-upload">
    <label for="photo5-input" class="image-upload-label">

      <span class="add-photo-text">Add Photo 5</span>
    </label>
    <input type="file" name="photo5" id="photo5-input" accept="image/*" class="photo5-input" multiple>
    <div class="image-preview5">
      <img src="#" alt="Preview" id="preview-image5" class="preview-image5">
      <button type="button" id ="cancel-preview5" class="cancel-preview5">
        <span class="cancel-cross">✖</span>
      </button>
    </div>
    <span class="required-text"  style="color: black;"  >Photo-5</span>
  </div>

  <!-- Photo Upload Field 6 -->
  <div class="image-upload">
    <label for="photo6-input" class="image-upload-label">

      <span class="add-photo-text">Add Photo 6</span>
    </label>
    <input type="file" name="photo6" id="photo6-input" accept="image/*" class="photo6-input" multiple>
    <div class="image-preview6">
      <img src="#" alt="Preview" id="preview-image6" class="preview-image6">
      <button type="button" id ="cancel-preview6" class="cancel-preview6">
        <span class="cancel-cross">✖</span>
      </button>
    </div>
    <span class="required-text"  style="color: black;"  >Photo-6</span>
  </div>
  <!-- Photo Upload Field 7 -->
  <div class="image-upload">
    <label for="photo7-input" class="image-upload-label">

      <span class="add-photo-text">Add Photo 7</span>
    </label>
    <input type="file" name="photo7" id="photo7-input" accept="image/*" class="photo7-input" multiple>
    <div class="image-preview7">
      <img src="#" alt="Preview" id="preview-image7" class="preview-image7">
      <button type="button" id="cancel-preview7" class="cancel-preview7">
        <span class="cancel-cross">✖</span>
      </button>
    </div>
    <span class="required-text"  style="color: black;" >Photo-7</span>
  </div>

  <!-- Photo Upload Field 8 -->
  <div class="image-upload">
    <label for="photo8-input" class="image-upload-label">

      <span class="add-photo-text">Add Photo 8</span>
    </label>
    <input type="file" name="photo8" id="photo8-input" accept="image/*" class="photo8-input" multiple>
    <div class="image-preview8">
      <img src="#" alt="Preview" id="preview-image8" class="preview-image8">
      <button type="button" id="cancel-preview8" class="cancel-preview8">
        <span class="cancel-cross">✖</span>
      </button>
    </div>
    <span class="required-text" style="color: black;">Photo-8</span>
  </div>

  <br><br>

  <div class="form-group">
    <label for="ownername">Your name:</label>
    <input type="text" name="ownername" id="ownername" class="form-control" autocomplete="off">
    <span class="required-text">Provide your name. Please complete the required field.</span>
  </div>


  <div class="form-group">
    <label for="ownerphone">Phone number:</label>
    <input type="text" name="ownerphone" id="ownerphone" class="form-control" autocomplete="off" oninput="this.value = this.value.replace(/[^0-9+\s]/g, '');">
    <span class="required-text">Provide your Number. Please complete the required field.</span>
</div>


</div>


  <input type="submit" value="Save" class="btn btn-success custom-button" id="submitButton" disabled><br>

    </form>
  </div>




<script>
    // Add an event listener to each input field to check for changes
    const inputFields = document.querySelectorAll('input, textarea');
    inputFields.forEach((field) => {
      field.addEventListener('input', validateForm);
    });

    // Function to validate the form
    function validateForm() {
      // Define the required fields here
      const requiredFields = [
        'rent', 'brand', 'model', 'year', 'fuel', 'transmission', 'kmsdriven',
        'ownernum', 'district', 'city', 'title', 'discription',  'rentday', 'rentmonth', 'photo1', 'photo2', 'photo3','ownername','ownerphone',
      ];

      // Check if all required fields are filled
      const isFormValid = requiredFields.every(fieldName => {
        const inputField = document.querySelector(`[name="${fieldName}"]`);
        return inputField.value.trim() !== '';
      });

      // Enable or disable the submit button based on form validity
      const submitButton = document.getElementById('submitButton');
      submitButton.disabled = !isFormValid;
    }



    // Function to handle image preview
    const photoInput = document.getElementById('photo1-input');
    const imagePreview = document.querySelector('.image-preview1');
    const previewImage = document.querySelector('.preview-image1');
    const cancelPreviewButton = document.getElementById('cancel-preview1');

    photoInput.addEventListener('change', function (e) {
      imagePreview.style.display = 'block';
      previewImage.src = URL.createObjectURL(e.target.files[0]);
      cancelPreviewButton.style.display = 'block';
    });

    cancelPreviewButton.addEventListener('click', function () {
      imagePreview.style.display = 'none';
      previewImage.src = '';
      cancelPreviewButton.style.display = 'none';
      // Reset the file input to clear the selected file
      photoInput.value = '';
    });





         function convertToUppercase(input) {
             input.value = input.value.toUpperCase();
              }








    // Function to handle image preview
    const photoInput2 = document.getElementById('photo2-input');
    const imagePreview2 = document.querySelector('.image-preview2');
    const previewImage2 = document.querySelector('.preview-image2');
    const cancelPreviewButton2 = document.getElementById('cancel-preview2');

    photoInput2.addEventListener('change', function (e) {
      imagePreview2.style.display = 'block';
      previewImage2.src = URL.createObjectURL(e.target.files[0]);
      cancelPreviewButton2.style.display = 'block';
    });

    cancelPreviewButton2.addEventListener('click', function () {
      imagePreview2.style.display = 'none';
      previewImage2.src = '';
      cancelPreviewButton2.style.display = 'none';
      // Reset the file input to clear the selected file
      photoInput2.value = '';
    });




    // Function to handle image preview
    const photoInput3 = document.getElementById('photo3-input');
    const imagePreview3 = document.querySelector('.image-preview3');
    const previewImage3 = document.querySelector('.preview-image3');
    const cancelPreviewButton3 = document.getElementById('cancel-preview3');

    photoInput3.addEventListener('change', function (e) {
      imagePreview3.style.display = 'block';
      previewImage3.src = URL.createObjectURL(e.target.files[0]);
      cancelPreviewButton3.style.display = 'block';
    });

    cancelPreviewButton3.addEventListener('click', function () {
      imagePreview3.style.display = 'none';
      previewImage3.src = '';
      cancelPreviewButton3.style.display = 'none';
      // Reset the file input to clear the selected file
      photoInput3.value = '';
    });


    // Function to handle image preview
    const photoInput4 = document.getElementById('photo4-input');
    const imagePreview4 = document.querySelector('.image-preview4');
    const previewImage4 = document.querySelector('.preview-image4');
    const cancelPreviewButton4 = document.getElementById('cancel-preview4');

    photoInput4.addEventListener('change', function (e) {
      imagePreview4.style.display = 'block';
      previewImage4.src = URL.createObjectURL(e.target.files[0]);
      cancelPreviewButton4.style.display = 'block';
    });

    cancelPreviewButton4.addEventListener('click', function () {
      imagePreview4.style.display = 'none';
      previewImage4.src = '';
      cancelPreviewButton4.style.display = 'none';
      // Reset the file input to clear the selected file
      photoInput4.value = '';
    });





    // Function to handle image preview
    const photoInput5 = document.getElementById('photo5-input');
    const imagePreview5 = document.querySelector('.image-preview5');
    const previewImage5 = document.querySelector('.preview-image5');
    const cancelPreviewButton5 = document.getElementById('cancel-preview5');

    photoInput5.addEventListener('change', function (e) {
      imagePreview5.style.display = 'block';
      previewImage5.src = URL.createObjectURL(e.target.files[0]);
      cancelPreviewButton5.style.display = 'block';
    });

    cancelPreviewButton5.addEventListener('click', function () {
      imagePreview5.style.display = 'none';
      previewImage5.src = '';
      cancelPreviewButton5.style.display = 'none';
      // Reset the file input to clear the selected file
      photoInput5.value = '';
    });



    // Function to handle image preview
    const photoInput6 = document.getElementById('photo6-input');
    const imagePreview6 = document.querySelector('.image-preview6');
    const previewImage6 = document.querySelector('.preview-image6');
    const cancelPreviewButton6 = document.getElementById('cancel-preview6');

    photoInput6.addEventListener('change', function (e) {
      imagePreview6.style.display = 'block';
      previewImage6.src = URL.createObjectURL(e.target.files[0]);
      cancelPreviewButton6.style.display = 'block';
    });

    cancelPreviewButton6.addEventListener('click', function () {
      imagePreview6.style.display = 'none';
      previewImage6.src = '';
      cancelPreviewButton6.style.display = 'none';
      // Reset the file input to clear the selected file
      photoInput6.value = '';
    });



    // Function to handle image preview
    const photoInput7 = document.getElementById('photo7-input');
    const imagePreview7 = document.querySelector('.image-preview7');
    const previewImage7 = document.querySelector('.preview-image7');
    const cancelPreviewButton7 = document.getElementById('cancel-preview7');

    photoInput7.addEventListener('change', function (e) {
      imagePreview7.style.display = 'block';
      previewImage7.src = URL.createObjectURL(e.target.files[0]);
      cancelPreviewButton7.style.display = 'block';
    });

    cancelPreviewButton7.addEventListener('click', function () {
      imagePreview7.style.display = 'none';
      previewImage7.src = '';
      cancelPreviewButton7.style.display = 'none';
      // Reset the file input to clear the selected file
      photoInput7.value = '';
    });




    // Function to handle image preview
    const photoInput8 = document.getElementById('photo8-input');
    const imagePreview8 = document.querySelector('.image-preview8');
    const previewImage8 = document.querySelector('.preview-image8');
    const cancelPreviewButton8 = document.getElementById('cancel-preview8');

    photoInput8.addEventListener('change', function (e) {
      imagePreview8.style.display = 'block';
      previewImage8.src = URL.createObjectURL(e.target.files[0]);
      cancelPreviewButton8.style.display = 'block';
    });

    cancelPreviewButton8.addEventListener('click', function () {
      imagePreview8.style.display = 'none';
      previewImage8.src = '';
      cancelPreviewButton8.style.display = 'none';
      // Reset the file input to clear the selected file
      photoInput8.value = '';
    });
  </script>







@endsection
