<!DOCTYPE html>
<html>
<head>
<title>Popup Button</title>

<link rel="stylesheet">
<style>

/* Style for the popup */
.form-container {
  display: none; /* Hidden by default */
  position: fixed; /* Fixed position relative to viewport */
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%); /* Center the popup */
  background-color: white;
  padding: 20px;
  border: 1px solid #ccc;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  z-index: 1000; /* Ensure it's on top of other content */
}

/* Style for the close button within the popup */
.close-button {
  position: absolute;
  top: 10px;
  right: 10px;
  cursor: pointer;
}

body {
  font-family: sans-serif;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  margin: 0;
  background-color: #f4f4f4;
}

.form-container {
  background-color: white;
  padding: 30px;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  width: 350px;
}

.form-container h2 {
  text-align: center;
  margin-bottom: 25px;
  color: #333;
}

.form-group {
  margin-bottom: 20px;
}

label {
  display: block;
  margin-bottom: 8px;
  font-weight: bold;
}

input[type="text"],
input[type="tel"],
input[type="email"] {
  width: calc(100% - 22px);
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  font-size: 16px;
}

button {
  background-color: #007bff;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  width: 100%;
  font-size: 16px;
}

button:hover {
  background-color: #0056b3;
}
</style>
<script>
function openPopup() {
  document.getElementById("getupdates").style.display = "block";
}

function closePopup() {
  document.getElementById("getupdates").style.display = "none";
}
</script>
</head>
<body>

  <div class="form-container" id="getupdates">
  <span class="close-button" onclick="closePopup()">&times;</span>
    <h2>Contact Us</h2>
    <form id="contactForm">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="contact">Contact No.:</label>
        <input type="tel" id="contact" name="contact" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <button type="submit">Submit</button>
    </form>
  </div>

</body>
</html>