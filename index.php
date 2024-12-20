<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>TamilNaatru</title>

  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="newstyle.css" />
  <link href="https://fonts.googleapis.com/css2?family=Pavanam&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


  <style>
    
    * {
  padding: 0;
  margin: 0;
  text-decoration: none;
  list-style: none;
  box-sizing: border-box;
}
body {
  font-family: "Montserrat", sans-serif;
}
nav {
  background: #1a2e35;
  height: 80px;
  width: 100%;
}

label.logo {
  color: white;
  font-size: 25px;
  line-height: 80px;
  padding: 0 100px;
  font-weight: bold;
}

label.logo img {
  height: 50px;
  margin-right: 10px;
}

nav ul {
  float: right;
  margin-right: 20px;
  list-style-type: none;
}

nav ul li {
  display: inline-block;
  line-height: 80px;
  margin: 0 5px;
}

nav ul li a {
  color: white;
  font-size: 17px;
  padding: 7px 13px;
  border-radius: 3px;
  text-transform: uppercase;
}

a.active,
a:hover {
  background: #495057;
  color: #f5ecec;
  transition: .5s;
}

.checkbtn {
  font-size: 22px;
  color: white;
  float: right;
  line-height: 80px;
  margin-right: 30px;
  cursor: pointer;
  display: none;
}

#check {
  display: none;
}

/* Dropdown Menu Styles */
nav ul li.dropdown {
  position: relative;
}

nav ul li.dropdown:hover .dropdown-content {
  display: block;
}

nav ul li .dropdown-content {
  display: none;
  position: absolute;
  top: 50px;  /* Aligns the dropdown directly below the navbar */
  left: 0;
  background-color: #1a2e35;
  width: 150px;
  padding: 0;  /* Remove padding to reduce space */
  margin: 0;  /* Remove extra space around the dropdown items */
  border-radius: 5px;
  
}

/* Ensure no margin or padding between dropdown list items */
nav ul li .dropdown-content li {
  display: block;
  margin: 0;  /* Remove any margin between the list items */
  padding: 0; /* Remove any padding between the list items */
  line-height: 3.00;  /* Reduce line-height to decrease space between items */
}

/* Ensure no padding on the anchor tags */
nav ul li .dropdown-content li a {
  padding: 5px 10px; /* Reduce the padding to make the links tighter */
  font-size: 15px;  /* Optional: Adjust font size */
  text-transform: none;  /* Keep text lowercase for better readability */
}



nav ul li .dropdown-content li a:hover {
  background: #495057;
  color: #f5ecec;
  transition: .5s;
}

@media (max-width: 1050px) {
  label.logo {
    padding-left: 20px;
    font-size: 20px;
  }
  label.logo img {
    height: 25px;
  }
  nav ul li a {
    font-size: 15px;
  }
}
/* Responsive media query code for small screen */
@media (max-width: 890px) {
  .checkbtn {
    display: block;
  }
 
  ul {
    position: fixed;
    width: 100%;
    height: 100vh;
    background:  #1a2e35;
    top: 80px;
    left: -100%;
    text-align: center;
    transition: all .5s;
  }
  nav ul li {
    display: block;
    margin: 50px 0;
    line-height: 0px;
  }
  nav ul li a {
    font-size: 20px;
    gap: 15px;
  }
  a:hover,
  a.active {
    background: none;
    color: #fafafa;
  }
  #check:checked~ul {
    left: 0;
  }
  /* Mobile dropdown menu */
  nav ul li .dropdown-content {
    position: static;
    width: 100%;
    display: none;
  }

  nav ul li:hover .dropdown-content {
    display: block;
  }

  /* Existing CSS remains as is */

/* Add styling for the cross icon */

}


/* Search Bar Styling */
.search-bar-container {
    margin-top: 0px;
    display: flex;
    justify-content: left;
    gap: 10px;
    width: 100%; /* Ensures it aligns with the content */
    flex-wrap: wrap;
  }

.search-input {
    padding: 10px;
    width: 300px;
    max-width: 100%;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    font-family: 'Tamil Sangam MN', 'Arial', sans-serif;
    outline: none;
    box-sizing: border-box;
    
}

.search-input:focus {
    border-color: #ff4f5a;
    box-shadow: 0 0 5px rgba(255, 79, 90, 0.5);
}

.search-button {
    padding: 10px 20px;
    background-color: #343a40;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.search-button:hover {
    background-color: #5f3434;
}

.search-results-container {
    margin-top: 10px;
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    padding: 10px;
    max-height: 200px;
    overflow-y: auto;
    display: none; /* Hidden by default */
    position: absolute; /* Position it below the search bar */
    width: 100%; /* Match the width of the search bar */
    z-index: 1000;
}


.search-result-item {
    display: block;
    padding: 5px 10px;
    text-decoration: none;
    color: #333;
    border-bottom: 1px solid #ddd;
}

.search-result-item:hover {
    background-color: #f0f0f0;
    color: #000;
}





 </style>
</head>
<body>

    <div class="hero_area">
      <body>
      <nav>
  <!-- Checkbox for toggling menu -->
  <input type="checkbox" id="check">
  
  <!-- Menu icon -->
  <label for="check" class="checkbtn">
    <i class="fas fa-bars"></i>
  </label>
  
  <!-- Site logo -->
  <label class="logo">
    <img src="images/Tlogo.jpg" alt="Logo">
    தமிழ் நாற்று
  </label>
  
  <!-- Navigation links -->
  <ul>
    <li><a href="index.php">முகப்பு</a></li>
    
    <!-- Dropdown menu for 'கட்டுரைகள்' -->
    <li class="dropdown">
      <a href="#">கட்டுரைகள்</a>
      <ul class="dropdown-content">
        <li><a href="kalvi.php">கல்வி</a></li>
        <li><a href="ulaviyal.php">உளவியல்</a></li>
       
        <li><a href="samugam.php">சமூகம்</a></li>
        <li><a href="tholinotpam.php">தொழில்நுட்பம்</a></li>
        <li><a href="arasiyal.php">அரசியல்</a></li>
        <li><a href="arangiyal.php">அரங்கியல்</a></li>
      </ul>
    </li>
    
    <!-- Dropdown menu for 'இலக்கியம்' -->
    <li class="dropdown">
      <a href="#">இலக்கியம்</a>
      <ul class="dropdown-content">
        <li><a href="sirugadhai.php">சிறுகதை</a></li>
        <li><a href="kavidhai.php">கவிதை</a></li>
        <li><a href="cinema.php">சினிமா</a></li>
      </ul>
    </li>
    
    <!-- Dropdown menu for 'பொது அறிவு' -->
    <li class="dropdown">
      <a href="#">பொது அறிவு</a>
      <ul class="dropdown-content">
        <li><a href="ilangai.php">இலங்கை</a></li>
        <li><a href="india.php">இந்தியா</a></li>
        <li><a href="ulagam.php">உலகம்</a></li>
        <li><a href="tholil.php">தொழில்நுட்பம்</a></li>
      </ul>
    </li>
    <li><a href="login.html">உள்நுழைவு</a></li>
  </ul>
</nav>


        <section class="small-page">
          <div class="content-container">
            <div class="text-section">
              <h2>"தமிழ் நாற்று வலைத்தள பக்கத்திற்கு வரவேற்கிறோம்"</h2>
              
              <blockquote class="thirukkural">
                "அகர முதல எழுத்தெல்லாம் ஆதி<br>
                பகவன் முதற்றே உலகு"
              </blockquote>
            </div>
            <div class="image-section">
              <img src="images/valluvar-removebg-preview.png" alt="Thiruvalluvar" class="valluvar-img">
            </div>
            <div class="search-bar-container">
    <form method="GET" action="search.php">
        <input type="text" name="query" placeholder="தேடல்..." class="search-input" required>
        <input type="submit" value="தேடு" class="search-button">
        <div id="searchResults" class="search-results-container"></div>
    </form>
</div>

           

          </div>
         
        </section>
        
        
  
      </div>
  
 

      <div class="container">         
          <!-- Left Side -->
          <div class="left-side" id="leftContent">
              <h2 style="text-align: center; font-weight: bold;">சமீபத்திய புதிப்பிப்புகள்</h2>
              
             
          </div>
      
      
    
        <!-- Right Side -->
<!--Right Side: Buttons-->
<div class="right-side" id="updateList">




        <!--div class="update-box" onclick="fetchArticles('திருக்குறள்')" style="  border: 2px solid #121111;">
            <img src="images/thiru.jpg" alt="திருக்குறள்" class="update-photo">
            <div class="update-title">திருக்குறள்</div>
        </div>
        <div class="update-box" onclick="fetchArticles('சினிமா')" style="  border: 2px solid #121111;">
            <img src="images/cine.jpg" alt="சினிமா" class="update-photo">
            <div class="update-title">சினிமா</div>
        </div>
       
        <div class="update-box" onclick="fetchArticles('சிறுகதை')" style="  border: 2px solid #121111;">
            <img src="images/books.png" alt="சிறுகதை" class="update-photo">
            <div class="update-title">சிறுகதை</div>
        </div>
        <div class="update-box" onclick="fetchArticles('பொது அறிவு')" style="  border: 2px solid #121111;">
            <img src="images/brain.png" alt="பொது அறிவு" class="update-photo" >
            <div class="update-title">பொது அறிவு</div>
        </div-->
        <?php
require_once('connect.php');

// Fetch categories from the database
$query = "SELECT display_name, category_name, image_path FROM categories ORDER BY button_position ASC";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '
        <div class="update-box" onclick="fetchArticles(\'' . $row['category_name'] . '\')" style="border: 2px solid #121111;">
            <img src="' . $row['image_path'] . '" alt="' . $row['display_name'] . '" class="update-photo">
            <div class="update-title">' . $row['display_name'] . '</div>
        </div>';
    }
} else {
    echo '<p>No categories available.</p>';
}
?>

  
</div>
    </div-->



    </div>
    

<!--end category section-->
<!--addnew button-->






<!-- Footer Section -->
<footer style="background-color: #1a2e35; color: #fff; padding: 20px 0; text-align: center;">
    <div style="max-width: 1200px; margin: auto; display: flex; flex-wrap: wrap; justify-content: space-between; padding: 0 20px;">
        <!-- About Us Section -->
        <div style="flex: 1; min-width: 250px; margin-bottom: 15px;">
            <h5>எங்களைப் பற்றி</h5>
            <p>சமீபத்திய புதுப்பிப்புகள் மற்றும் தரமான உள்ளடக்கத்தை கொண்டு வர நாங்கள் கடமைப்பட்டுள்ளோம். மேலும் புதுப்பிப்புகளுக்கு இணைந்திருங்கள்.</p>
        </div>
        <!-- Quick Links Section -->
        <div style="flex: 1; min-width: 250px; margin-bottom: 15px;">
            <h5>விரைவு இணைப்புகள்</h5>
            <ul style="list-style: none; padding: 0;">
                <li><a href="#" style="color: #fff; text-decoration: none;">முகப்பு</a></li>
                <li><a href="#" style="color: #fff; text-decoration: none;">கட்டுரைகள்</a></li>
                <li><a href="#" style="color: #fff; text-decoration: none;">இலக்கியம்</a></li>
                <li><a href="#" style="color: #fff; text-decoration: none;">பொது அறிவு</a></li>
            </ul>
        </div>
        <!-- Contact Us Section -->
        <div style="flex: 1; min-width: 250px; margin-bottom: 15px;">
            <h5>தொடர்புகளுக்கு</h5>
            <p>Email: <a href="mailto:info@tamilnaatru.com" style="color: rgb(240, 244, 248);">info@tamilnaatru.com</a></p>
            <p>Phone: +91 123 456 7890</p>
            <div>
                <a href="#" style="color: #fff; text-decoration: none; margin-right: 10px;">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" style="color: #fff; text-decoration: none; margin-right: 10px;">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" style="color: #fff; text-decoration: none;">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>
    </div>
    <p style="font-size: 14px; margin-top: 20px;">&copy; 2024 Faite. All Rights Reserved.</p>
</footer>


  
  <!-- end  footer section -->

<script>

document.addEventListener("DOMContentLoaded", function() {
  const checkbtn = document.querySelector(".checkbtn i");
  const checkbox = document.querySelector("#check");

  checkbox.addEventListener("change", function() {
    if (checkbox.checked) {
      checkbtn.classList.remove("fa-bars");
      checkbtn.classList.add("fa-times");
    } else {
      checkbtn.classList.remove("fa-times");
      checkbtn.classList.add("fa-bars");
    }
  });
});



    // Fetch latest uploads using AJAX
    fetch('fetch_latest_uploads.php')
        .then(response => {
            if (!response.ok) {
                throw new Error("Failed to fetch updates.");
            }
            return response.text(); // Get the PHP output as text
        })
        .then(data => {
            // Insert the fetched content into the .left-side div
            document.querySelector('.left-side').innerHTML += data;

            // Add event listeners to the dynamically added update boxes
            document.querySelectorAll(".left-side").forEach((box) => {
                box.addEventListener("click", () => {
                    const id = box.getAttribute("data-id"); // Get the data-id of the clicked box
                    const leftSide = document.querySelector('.left-side');
                    leftSide.innerHTML = updates[id]; // Update the left-side content
                });
            });
        })
        .catch(error => {
            console.error('Error:', error);
            document.querySelector('.left-side').innerHTML += '<p>Error loading updates.</p>';
        });


//searching
document.querySelector('.search-bar-container form').addEventListener('submit', function (event) {
    event.preventDefault();

    const query = document.querySelector('.search-input').value.trim();
    const searchResultsContainer = document.getElementById('searchResults');

    if (query === '') {
        searchResultsContainer.innerHTML = '';
        searchResultsContainer.style.display = 'none';
        return;
    }

    fetch(`search.php?query=${encodeURIComponent(query)}`)
        .then(response => response.text())
        .then(data => {
            if (data.trim() !== '') {
                searchResultsContainer.innerHTML = data;
                searchResultsContainer.style.display = 'block';
            } else {
                searchResultsContainer.innerHTML = '<p>No results found.</p>';
                searchResultsContainer.style.display = 'block';
            }
        })
        .catch(error => {
            console.error('Error fetching search results:', error);
            searchResultsContainer.innerHTML = '<p>An error occurred while fetching results.</p>';
            searchResultsContainer.style.display = 'block';
        });
});



  
  
 /*category
  function fetchArticles(displayCategory) {
    const categoryMapping = {
        "திருக்குறள்": "Essay",
        "சினிமா": "Literature",
        "சிறுகதை": "Short Story",
        "பொது அறிவு": "General Knowledge"
    };

    const category = categoryMapping[displayCategory];
    if (!category) {
        console.error("Invalid category selected:", displayCategory);
        return;
    }

    const url = 'fetch_articles.php';
    const articlesContainer = document.getElementById('leftContent');

    // Show loading message
    articlesContainer.innerHTML = '<p>Loading articles...</p>';

    fetch(url, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ category: category }),
    })
        .then(response => response.json())
        .then(data => {
            if (data.error) {
                articlesContainer.innerHTML = `<p>${data.error}</p>`;
            } else {
                const articlesHTML = data
                    .map(
                        article => `
                        <div style="background-color: transparent; padding: 10px;">
                            <img src="${article.image_path}" alt="${article.title}" class="update-photo1">
                            <div class="content">
                                <h2 class="updates-header">${article.title}</h2>
                                <p>${article.content.substring(0, 150)}...</p>
                                <a href="view.php?id=${article.id}" style="text-decoration: none; background-color: transparent; display: inline-block;">
                                    <button>மேலும் வாசிக்க</button>
                                </a>
                            </div>
                        </div>
                    `
                    )
                    .join('');
                articlesContainer.innerHTML = articlesHTML;
            }
        })
        .catch(error => {
            console.error('Error fetching articles:', error);
            articlesContainer.innerHTML = '<p>Failed to load articles.</p>';
        });
}*/


function fetchArticles(category) {
    console.log("Fetching articles for category:", category); // Debugging output
    fetch("fetch_articles.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded",
        },
        body: "category=" + encodeURIComponent(category),
    })
        .then(response => response.json())
        .then(data => {
            console.log("Articles received:", data); // Debugging output
            const leftContent = document.getElementById("leftContent");
            if (data.length > 0) {
                leftContent.innerHTML = data
                    .map(article => `
                        <div style="background-color: transparent; padding: 10px;">
                            <img src="${article.image_path}" alt="${article.title}" class="update-photo1">
                            <div class="content">
                                <h2 class="updates-header">${article.title}</h2>
                                <p>${article.content.substring(0, 150)}...</p>
                                <a href="view.php?id=${article.id}" style="text-decoration: none; background-color: transparent; display: inline-block;">
                                    <button>மேலும் வாசிக்க</button>
                                </a>
                            </div>
                        </div>
                    `)
                    .join("");
            } else {
                leftContent.innerHTML = "<p>No articles found for this category.</p>";
            }
        })
        .catch(error => console.error("Error fetching articles:", error));
}










</script>



  

</body>
</body>

</html>